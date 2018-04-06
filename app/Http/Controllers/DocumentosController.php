<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use App\Contador;
use App\Cliente;
use App\TipoDoc;
use App\Atestiguamiento;
use App\RelacionIngresos;
use App\CartaPresentacion;
use App\RelDoc;

class DocumentosController extends Controller
{
    public function cargadatosdocumentos(Cliente $cliente){
		$contador = session()->get('contador');
		return view('documentos.cargadatosdocumentos',['contador'=>$contador, 'cliente' => $cliente]);
	}
	public function pdf($id_cliente, $id_doc)
    {        
		$contador = session()->get('contador');
		$cliente=Cliente::where([
			'cedula'=>$id_cliente,
		])->get()->first();
		$ates=Atestiguamiento::where([
			'id' => $id_doc,
		])->get()->first();
		$rel=RelacionIngresos::where([
			'id' => $id_doc,
		])->get()->first();
		$cart=CartaPresentacion::where([
			'id' => $id_doc,
		])->get()->first();

		$view_at =  \View::make('pdf.pdf_documentos', 
			['contador'=>$contador, 
			'cliente'=>$cliente, 
			'ates'=>$ates,
			'rel'=>$rel,
			'cart'=>$cart,			
			])->render();
		$pdf_at = \App::make('dompdf.wrapper');
		$pdf_at->loadHTML($view_at);
		return $pdf_at->stream('documentos',array('Attachment'=>0));
    }

	 public function guardardatosdocumentos(Cliente $cliente){
		$data = request()->all();
		$contador = session()->get('contador');
		
		$reldoc=RelDoc::create([
			'nro_colegiado' => $contador->nro_colegiado,
			'cedula_cli' => $cliente->cedula,
			'estatus' => false, 
		]);

		Atestiguamiento::create([
			'institucion' => $data['institucion'],
			'actividad' => $data['actividad'],
			'motivo' => $data['motivo'],
			'fecha' => $data['fecha_ates'],
			'periodo_1' => $data['periodo_1'],
			'periodo_2' => $data['periodo_2'],
			'cod_doc_tipo' => 'ATES',
			'id_doc' => $reldoc->id,
			]);

		RelacionIngresos::create([
			'sueldo' => (int) $data['sueldo'],
			'honorarios' => (int) $data['honorarios'],
			'ventas' => (int) $data['ventas'],
			'alquiler' => (int) $data['alquiler'],
			'intereses' => (int) $data['intereses'],
			'dividendos' => (int) $data['dividendos'],
			'ingresos' => (int) $data['total_ingresos'],
			'promedio' => (int) $data['promedio'],
			'nro_seguridad' => $data['nro_seg'],
			'cod_doc_tipo' => 'RIGN',
			'id_doc' => $reldoc->id,
			]);

		CartaPresentacion::create([
			'direccion' => $data['direccion'],
			'soporte' => $data['soporte'],
			'periodo' => $data['periodo_cart'],
			'fecha' => $data['fecha_cart'],
			'cod_doc_tipo' => 'CPRE',
			'id_doc' => $reldoc->id
			]);
		
		return redirect()->route ('usuario.mostrarcliente',['cliente'=>$cliente]);
	}

	public function destroydocumento(Cliente $cliente, $id_doc){
		
		$id_cart = RelacionIngresos::where([
			'id_doc' => $id_doc,
		])->get()->first();
		CartaPresentacion::destroy($id_cart->id);	

		$id_rel = RelacionIngresos::where([
			'id_doc' => $id_doc,
		])->get()->first();
		RelacionIngresos::destroy($id_rel->id);		

		$id_ates = Atestiguamiento::where([
			'id_doc' => $id_doc,
		])->get()->first();
		Atestiguamiento::destroy($id_ates->id);

		$id_reldoc = RelDoc::where([
			'id' => $id_doc,
		])->get()->first();
		RelDoc::destroy($id_reldoc->id);

		$contador = session()->get('contador');
		$clientes = Cliente::where([
			'nro_colegiado_cont' => $contador['nro_colegiado'],
		])->get();
		return redirect()->route ('usuario.mostrarcliente',['cliente'=>$cliente]);
	}

	public function cambiarestatus(Cliente $cliente, $id_doc){
		
		$reldoc = RelDoc::where([
			'id' => $id_doc,
			'cedula_cli' =>$cliente->cedula,
		])->get()->first();

		if($reldoc->estatus==false){ 
			$reldoc->estatus=true;
		}else{
			$reldoc->estatus=false;
		}
		$reldoc->save();
		return redirect()->route ('usuario.mostrarcliente',['cliente'=>$cliente]);
	}

	public function editardocumento(Cliente $cliente, $id_doc){

		$contador = session()->get('contador');

		$ates = Atestiguamiento::where([
			'id_doc' => $id_doc,
		])->get()->first();
		$rel = RelacionIngresos::where([
			'id_doc' => $id_doc,
		])->get()->first();
		$cart = CartaPresentacion::where([
			'id_doc' => $id_doc,
		])->get()->first();

		return view('documentos.editardocumentos',['contador'=>$contador, 'cliente' => $cliente, 'ates'=>$ates, 'rel'=>$rel, 'cart'=>$cart]);
	}

	public function updatedocumento(Cliente $cliente, $id_doc){

		$contador = session()->get('contador');
		$data = request()->all();

		$ates = Atestiguamiento::where(['id_doc' => $id_doc,])->get()->first();
		$ates->institucion = $data['institucion'];
		$ates->actividad = $data['actividad'];
		$ates->motivo = $data['motivo'];
		$ates->fecha = $data['fecha_ates'];
		$ates->periodo_1 = $data['periodo_1'];
		$ates->periodo_2 = $data['periodo_2'];
		$ates->cod_doc_tipo = 'ATES';
		$ates->save();

		$rel = RelacionIngresos::where(['id_doc' => $id_doc,])->get()->first();
		$rel->sueldo = (int) $data['sueldo'];
		$rel->honorarios = (int) $data['honorarios'];
		$rel->ventas = (int) $data['ventas'];
		$rel->alquiler = (int) $data['alquiler'];
		$rel->intereses = (int) $data['intereses'];
		$rel->dividendos = (int) $data['dividendos'];
		$rel->ingresos = (int) $data['total_ingresos'];
		$rel->promedio = (int) $data['promedio'];
		$rel->nro_seguridad = $data['nro_seg'];
		$rel->cod_doc_tipo = 'RIGN';
		$rel->save();

		$cart = CartaPresentacion::where(['id_doc' => $id_doc,])->get()->first();
		$cart->direccion = $data['direccion'];
		$cart->soporte = $data['soporte'];
		$cart->periodo = $data['periodo_cart'];
		$cart->fecha = $data['fecha_cart'];
		$cart->cod_doc_tipo = 'CPRE';
		$cart->save();

		return redirect()->route ('usuario.mostrarcliente',['cliente'=>$cliente]);
	}
	
}
