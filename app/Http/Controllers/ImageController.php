<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imagelist;


class ImageController extends Controller
{
    function index(Request $request){


    	$api = DB::table('imagelists')->get();


    	return view('image.index')->with('cates', $api);

    }

    function add(){


    
    	$cate = DB::table('categories')->get();
    	return view('image.add')->with('cates', $cate);

    }

        function store(Request $request){


    

    	$image = new Imagelist();
    	 if($request->hasFile('pic')){
    	 	 $file = $request->file('pic');
    	 	  $image->name = $file->getClientOriginalName();
    	 	   if($file->move('upload', $file->getClientOriginalName())){
              
            }
        

    }
        $image->title =$request->title;
        $image->category =$request->category;
        $image->sort =$request->sort;
        $image->userid =1;
        $image->des =$request->des;

        if($image->save()){
            return redirect()->route('image.index');
        }else{
            return redirect()->route('image.add');
        }

    }

     function edit($id){


    	$api = DB::table('imagelists')
    	->where('id', $id)
    	->get();



      $cate = DB::table('categories')->get();

    	return view('image.edit')->with('images', $api)->with('cates', $cate);

    }



    function rotate($id){


    	$api = DB::table('imagelists')->get();


    	return view('image.index')->with('cates', $api);

    }

    function resize($id){


    	$api = DB::table('imagelists')->get();


    	return view('image.index')->with('cates', $api);

    }
}
