<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SiteController extends Controller
{
    public function index()
    {
        //return view('index');
        return 'index';
    }
	
	public function test()
	{
        //$user = User::create([
        //    'name' => 'Dmitry',
        //    'email' => 'foxlab.inc@gmail.com',
        //    'password' => Hash::make('aqswde'),
        //]);
        //
        //return 'User created';
	}
	
}
