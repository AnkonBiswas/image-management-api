<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imagelist;
use Image;


class ImageController extends Controller
{

   
    function index(Request $request){


    	$api = DB::table('imagelists')
        ->join('categories', 'categories.id', '=', 'imagelists.category')
        ->where('userid', $request->session()->get('id'))->get();


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
        $image->userid = $request->session()->get('id');
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

    function enable($id,$value){

                $image = Imagelist::find($id);
                 $image->enable =$value;

                  $image->save();


                         return redirect()->route('image.index');



    }


     function editimage($id,Request $request){




        $image = Imagelist::find($id);
         $image->title =$request->title;
        $image->category =$request->category;
        $image->sort =$request->sort;
        $image->userid = $request->session()->get('id');
        $image->des =$request->des;
        if ($request->enable != null) {

             $image->enable =1;
            
        }else{

             $image->enable =0;

        }
       


             $imgsrc="upload/".$request->pic;



        if ($request->crop == 1) {


             $img = Image::make($imgsrc);



         $img->crop($request->width, $request->height,$request->image_x,$request->image_y);

       // return $img->response('png');

         $img->save($imgsrc);
            
        }

         $image->save();

        return redirect()->route('image.edit',$id);

    }



    function rotate($id){


    	$api = DB::table('imagelists')->get();


    	return view('image.index')->with('cates', $api);

    }

    function resize($id){

$api = DB::table('imagelists')
        ->where('id', $id)
        ->get();

$image ="upload/blackfriday.png";

$img = Image::make($image)->resize(300, 200);

    //return $img->response('png');

   $img->save('upload/bar.jpg');


    	//return view('image.resize')->with('images', $api);

    }

    function makeresize($id){

        $api = DB::table('imagelists')
        ->where('id', $id)
        ->get();

$image ="upload/".$api['name'];

$img = Image::make($image)->resize(300, 200);

    return $img->response('jpg');

          $api = DB::table('imagelists')
        ->where('id', $id)
        ->get();

    }

    function imagerotate($id,$value){


        $api = DB::table('imagelists')
        ->where('id', $id)
        ->first();
     $imgsrc="upload/".$api->name;

        $img = Image::make($imgsrc);
       // $imagename= "image-".(rand(1000000,9000000)) .'.png';


// rotate image 45 degrees clockwise

        if ($value =='left') {

             $img->rotate(90);
            
        }else{

             $img->rotate(-90);

        }
       


       // return $img->response('png');

         $img->save($imgsrc);

        // $image = Imagelist::find($id);
        // $image->name = $imagename;
        //  $image->save();


       return redirect()->route('image.edit',$id);

       // return view('image.rotate')->with('images', $api);

    }

//      function rotateimage($id,$value){

// $imgsrc="upload/".$request->image;

//         $img = Image::make($imgsrc);
//         $imagename= "image-".(rand(1000000,9000000)) .'.png';


// // rotate image 45 degrees clockwise
//         $img->rotate($request->rotate);


//        // return $img->response('png');

//          $img->save('upload/'.$imagename);

//         $image = Imagelist::find($id);
//         $image->name = $imagename;
//          $image->save();


//        return redirect()->route('image.index');

//     }

     function imagecrop($id){

        $api = DB::table('imagelists')
        ->where('id', $id)
        ->get();

        return view('image.crop')->with('images', $api);

    }

     function cropimage($id,Request $request){

$imgsrc="upload/".$request->image;


$img = Image::make($imgsrc);

// crop image

        $img = Image::make($imgsrc);
        $imagename= "image-".(rand(1000000,9000000)) .'.png';



         $img->crop($request->width, $request->height);

       // return $img->response('png');

         $img->save('upload/'.$imagename);

        $image = Imagelist::find($id);
        $image->name = $imagename;
         $image->save();


       return redirect()->route('image.index');

    }



    function upload(Request $request){




     //   print_r($request);
    $images=array();
    if($files=$request->file('images')){
        foreach($files as $file){
    $image = new Imagelist();


            echo $file->getClientOriginalName();
          

            $image->name = $file->getClientOriginalName();
             $image->userid =$request->session()->get('id');
               if($file->move('upload', $file->getClientOriginalName())){
              
            }

            $image->save();
        }
    } else{
        //die();
    }


      return redirect()->route('image.index');
    
    }


    function load(Request $request){


        if ($request->layout) {

            $request->session()->put('layout', $request->layout);

            
        }


        header('Access-Control-Allow-Origin: *'); 

        if ($request->search != null) {
            $api = DB::table('imagelists')
            ->join('categories', 'categories.id', '=', 'imagelists.category')
            ->select('imagelists.*', 'categories.cname')
             ->where('title','like', "%$request->search%")
            ->orderBy($request->sort, $request->sv)
            ->get();
            
        }else{
            $api = DB::table('imagelists')
            ->join('categories', 'categories.id', '=', 'imagelists.category')
            ->select('imagelists.*', 'categories.cname')
            ->orderBy($request->sort, $request->sv)
            ->get();
        }
          

            return response()->json($api);

    }
}
