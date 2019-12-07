<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ApiController extends Controller
{
   function index($key){
   	header('Access-Control-Allow-Origin: *');  

        	$api = DB::table('imagelists')
            ->join('users', 'users.id', '=', 'imagelists.userid')
            ->join('categories', 'categories.id', '=', 'imagelists.category')
            ->where('users.api_key', $key)
            ->select('imagelists.*', 'categories.cname')

            ->get();

           return response()->json($api);
   }

      function cate($key,$cate){
   	header('Access-Control-Allow-Origin: *');  

        	$api = DB::table('imagelists')
            ->join('users', 'users.id', '=', 'imagelists.userid')
            ->join('categories', 'categories.id', '=', 'imagelists.category')
            ->where('categories.id', $cate)
            ->where('users.api_key', $key)
            ->select('imagelists.*', 'categories.cname')

            ->get();

           return response()->json($api);
   }

      function getCate(){
   	header('Access-Control-Allow-Origin: *');  

        	$api = DB::table('categories')->get();
        //   return response()->json($api);

        	return view('cate.html')->with('cates', $api);
   }

}
