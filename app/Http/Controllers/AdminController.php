<?php

namespace App\Http\Controllers;
use App\Mail\Bienvenido;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contador;
use App\Admin;
use App\Cliente;
use App\TipoDoc;
use App\Atestiguamiento;
use App\RelacionIngresos;
use App\CartaPresentacion;
use App\RelDoc;


class AdminController extends Controller
{
    public function validar()
	 {	
			
		$data = request()->all();
	
		$admin = Admin::where([
			'user' => $data['usuario'],
			'password' => $data['password']
		])->get()->first();

		if (empty($admin)){
			return redirect()
				->route('home')
				->withErrors([
					'msj_error_home' => 'Usuario o contraseña incorrecta'
				]);
		}else{
			session(['admin' => $admin]);
		}

			return redirect()->route('admin.inicio');
	}

	public function inicio()
	{	
			$admin = session()->get('admin');
			$contadores = Contador::where(['estatus'=>false])->get();
			return view('admin.inicio',['contadores'=>$contadores, 'admin' => $admin]);
			
	}

	public function buscarcontador()
	{
		$data = request()->all();	
		$contadores = Contador::where([
			'nombre' => $data['buscarcont'],
			])->get();
		if($contadores->isNotEmpty()){
			return view('admin.listacontadores',['contadores'=>$contadores]);
		}else
		{
			$contadores = Contador::where([
			'cedula' => (int) $data['buscarcont'],
			])->get();
			if($contadores->isNotEmpty()){
				return view('admin.listacontadores',['contadores'=>$contadores]);
			}else{
				$contadores = Contador::where([
				'apellido' => $data['buscarcont'],
				])->get();
			if($contadores->isNotEmpty()){
				return view('admin.listacontadores',['contadores'=>$contadores]);
			}else{
				$contadores = Contador::where([
				'nro_colegiado' => (int) $data['buscarcont'],
				])->get();
				return view('admin.listacontadores',['contadores'=>$contadores]);
			}
			
		}
	}
}

	public function cambiarestatus(Contador $contador, $url)
	{	
			//Mail::to($contador->email,$contador->nombre." ".$contador->apellido)
			//	->send(new Bienvenido());
			$admin = session()->get('admin');
			if ($contador->estatus==false){
				$contador->estatus=true;
			}else{
				$contador->estatus=false;
			}
			$contador->save();
			if ($url=='admin.inicio'){
				$contador = Contador::where(['estatus'=>false])->get();
				return view($url,['contadores'=>$contador, 'admin' => $admin]);
			}if($url=="admin.listacontadores"){
				return redirect()->route($url);
			}if($url=="admin.mostrarcontador"){
				return redirect()->route($url,['contador'=>$contador]);
			}			
	}

	public function mostrarcontador(Contador $contador)
	{
		$clientes = Cliente::where([
			'nro_colegiado_cont' => $contador->nro_colegiado,
		])->get();
		
		return view('admin.mostrarcontador',['contador'=>$contador, 'clientes' => $clientes]);
	}
	
	public function listacontadores()
	{
		$contadores = Contador::all();
		
		return view('admin.listacontadores',['contadores'=>$contadores]);
	}
	
	public function destroycontador(Contador $contador){
		
		$contador_del = Contador::where([
			'id' => $contador->id,
		])->get()->first();
		
		$clientes = Cliente::where([
			'nro_colegiado_cont' => $contador_del->nro_colegiado,
		])->get();
		
		foreach ($clientes as $cliente){
			$id_reldoc = RelDoc::where([
			'cedula_cli' => $cliente->cedula,
			])->get();
		
			foreach ($id_reldoc as $id_doc){
				RelDoc::destroy($id_doc->id);

				$id_cart = RelacionIngresos::where([
				'id_doc' => $id_doc->id,
				])->get()->first();
				CartaPresentacion::destroy($id_cart->id);	
			
				$id_rel = RelacionIngresos::where([
				'id_doc' => $id_doc->id,
				])->get()->first();
				RelacionIngresos::destroy($id_rel->id);

				$id_ates = Atestiguamiento::where([
				'id_doc' => $id_doc->id,
				])->get()->first();
				Atestiguamiento::destroy($id_ates->id);
			}		

			Cliente::destroy($cliente->id);
		}

		Contador::destroy($contador->id);
		return redirect()->route('admin.listacontadores');

	}

	public function crearadmin(){
		return view('admin.crearadmin');
	}

	public function guardaradmin()
	{	
			$data = request()->all();
			
			Admin::create([
			'user' => $data['user_admin'],
			'password' => $data['password_admin'],
			]);

			return redirect()->route('admin.listaradmin');		
	}

	public function listaradmin(){
		$administradores = Admin::all();
		return view('admin.listaradmin',['administradores' => $administradores]);
	}

	public function destroyadmin(Admin $admin){
		
		$admin_session = session()->get('admin');
		if($admin_session->id == $admin->id)
		{
			return redirect()
				->route('admin.listaradmin')
				->withErrors([
					'msj_error_admin' => 'No puedes eliminarte'
				]);
		}else{
			Admin::destroy($admin->id);
			return redirect()->route('admin.listaradmin');
		}
	}
	
	public function editaradmin(){
		$admin = session()->get('admin');
		return view('admin.editaradmin',['admin' => $admin]);
	}

	public function updateadmin(){
		
		$data = request()->all();
		$admin = session()->get('admin');

		$admin->user = $data['user_admin'];
		$admin->password = $data['password_admin'];
		$admin->save();

		session(['admin' => $admin]);

		return redirect()->route('admin.listaradmin');		
	}
}
