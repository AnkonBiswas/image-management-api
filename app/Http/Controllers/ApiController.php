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
       //     ->join('categories', 'categories.id', '=', 'imagelists.category')
            ->where('users.api_key', $key)
            ->where('imagelists.enable', 1)
            ->select('imagelists.*')

            ->get();

           return response()->json($api);
   }

      function cate($key,$cate){
   	header('Access-Control-Allow-Origin: *');  

        	$api = DB::table('imagelists')
            ->join('users', 'users.id', '=', 'imagelists.userid')
            ->join('categories', 'categories.id', '=', 'imagelists.category')
            ->where('categories.id', $cate)
            ->where('imagelists.enable', 1)
            ->where('users.api_key', $key)
            ->select('imagelists.*', 'categories.cname')

            ->get();

           return response()->json($api);
   }



      function sort($key,$cate,$sort,$sv){
    header('Access-Control-Allow-Origin: *');  


    if ($cate>0) {

       $api = DB::table('imagelists')
            ->join('users', 'users.id', '=', 'imagelists.userid')
            ->join('categories', 'categories.id', '=', 'imagelists.category')
            ->where('categories.id', $cate)
            ->where('imagelists.enable', 1)
            ->where('users.api_key', $key)
            ->select('imagelists.*', 'categories.cname')
            ->orderBy($sort, $sv)
            ->get();
      
    }else{
       $api = DB::table('imagelists')
            ->join('users', 'users.id', '=', 'imagelists.userid')
            ->join('categories', 'categories.id', '=', 'imagelists.category')
            ->where('users.api_key', $key)
            ->where('imagelists.enable', 1)
            ->select('imagelists.*', 'categories.cname')
            ->orderBy($sort, $sv)
            ->get();
    }

         

           return response()->json($api);
   }




      function getCate(){
   	header('Access-Control-Allow-Origin: *');  

        	$api = DB::table('categories')->get();
        //   return response()->json($api);

        	return view('cate.html')->with('cates', $api);
   }

}
