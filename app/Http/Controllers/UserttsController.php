<?php

namespace App\Http\Controllers;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Http\Request;
use App\Usertts;
use Twitter;


class UserttsController extends Controller
{


	public function index(Request $request, $user)
	{

		//Coleta todos os dados do banco, armazena na variavel que é enviada para a view usertts
		$usertts=Usertts::where('screen_name','=', $user)->orderBy($request->order_by, $request->order)->get();
		//Envia o resultado da consulta ao banco para a view usertts.
		return view('usertts', compact('usertts'));

	}


}
