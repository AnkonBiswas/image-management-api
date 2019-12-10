<!DOCTYPE html>
<html>
<head>
	<title>Edit Image</title>

	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/uikit/css/uikit.min.css" />
          <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
                  <script src="/img/jquery.js" ></script>


        <script src="/uikit/js/uikit.min.js"></script>
        <script src="/uikit/js/uikit-icons.min.js"></script>

        <script src="/img/rcrop.min.js" ></script>
        <link href="/img/rcrop.min.css" media="screen" rel="stylesheet" type="text/css">

         <style>
            body{margin: 0; padding: 0px}
            main{
                min-height:500px;
                display: block
            }
            pre{
                overflow: auto;
            }
            .demo{
                padding: 20px;
            }
            .image-wrapper{
                max-width: 600px;
                min-width: 200px;
            }
            img{
                max-width: 100%;
            }
            
            #image-4-wrapper .rcrop-outer-wrapper{
                opacity: .75;
            }
            #image-4-wrapper .rcrop-outer{
                background: #000
            }
            #image-4-wrapper .rcrop-croparea-inner{
                border: 1px dashed #fff;
            }
            
            #image-4-wrapper .rcrop-handler-corner{
                width:12px;
                height: 12px;
                background: none;
                border : 0 solid #51aeff;
            }
            #image-4-wrapper .rcrop-handler-top-left{
                border-top-width: 4px;
                border-left-width: 4px;
                top:-2px;
                left:-2px
            }
            #image-4-wrapper .rcrop-handler-top-right{
                border-top-width: 4px;
                border-right-width: 4px;
                top:-2px;
                right:-2px
            }
            #image-4-wrapper .rcrop-handler-bottom-right{
                border-bottom-width: 4px;
                border-right-width: 4px;
                bottom:-2px;
                right:-2px
            }
            #image-4-wrapper .rcrop-handler-bottom-left{
                border-bottom-width: 4px;
                border-left-width: 4px;
                bottom:-2px;
                left:-2px
            }
            #image-4-wrapper .rcrop-handler-border{
                display: none;
            }
            
            #image-4-wrapper .clayfy-touch-device.clayfy-handler{
                background: none;
                border : 0 solid #51aeff;
                border-bottom-width: 6px;
                border-right-width: 6px;
            }
            
            label{
                display: inline-block;
                width: 60px;
                margin-top: 10px;
            }
            #update{
                margin: 10px 0 0 60px ;
                padding: 10px 20px;
            }
            
            #cropped-original, #cropped-resized{
                padding: 20px;
                border: 4px solid #ddd;
                min-height: 60px;
                margin-top: 20px;
            }
            #cropped-original img, #cropped-resized img{
                margin: 5px;
            }
td {
    padding: 10px 31px;
}
            
        </style>
</head>
<body>
	<div class="uk-container uk-card uk-card-default uk-card-body">
	<h1>Edit Image</h1>

	<a class="uk-button uk-button-primary" href="{{route('home.index')}}">Back</a> |
        <a class="uk-button uk-button-primary" href="{{route('image.index')}}">Image List</a> |

	<a class="uk-button uk-button-primary" href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post" enctype="multipart/form-data" >
	{{csrf_field()}}
	<table border="0">
		  @foreach($images as $image)

          <tr>
    <td> <a class="uk-button uk-button-primary" href="/image/rotate/{{ $image->id }}/left">Left Rotate</a></td>
    <td> <a class="uk-button uk-button-primary" href="/image/rotate/{{ $image->id }}/right">Right Rotate</a></td>
</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title" value="{{ $image->title }}" class="uk-input"></td>
		</tr>

		    <div class="demo">

                <div class="image-wrapper">
                    <img id="image-2" src="/upload/{{ $image->name }}">
                    <div style="display: none;" >
                        <div>
                            <label for="width">width:</label> 
                            <input id="width" type="text" name="width" >
                        </div>
                        <div>
                            <label for="height">height:</label>  
                            <input id="height" type="text" name="height"  >
                        </div>
                        <div>
                            <label for="x">x:</label>  
                            <input id="x" type="text" name="image-x">
                        </div>
                        <div>
                            <label for="y">y:</label>  
                            <input id="y" type="text" name="image-y" >
                        </div>
                        </div>
                </div>
            </div>
            
       


		<tr>
			<td>category</td>
			<td>
				<select name="category" id="" class="uk-select">
					  @foreach($cates as $cate)

                      @if($cate->id == $image->category)     
					<option value="{{ $cate->id }}" selected="selected">{{ $cate->cname }}</option>

                    @else
                    <option value="{{ $cate->id }}">{{ $cate->cname }}</option>

                     @endif

					 @endforeach
				</select>
			</td>
		</tr>
		<tr>
			<td>sort</td>
			<td><input type="text" name="sort" value="{{ $image->sort }}" class="uk-input"></td>
		</tr>
		<tr>
			<td>des</td>
			<td><textarea type="text" name="des" value="{{ $image->des }}" class="uk-textarea" rows="5"></textarea></td>
		</tr>

		<tr>
			<td>Is Enable


                <input type="hidden" name="pic" value="{{ $image->name }}">

                <input type="hidden" value="0" id="crop" name="crop"></td>

			@if($image->enable == 0)         
			<td><input type="checkbox" name="enable"  class="uk-checkbox" value="0"></td>
            @else
			<td><input type="checkbox" name="enable" class="uk-checkbox" checked="checked" value="1"></td>
           @endif
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save" class="uk-input"></td>
		</tr>

		@endforeach
	</table>
</form>

@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach

</div>


 <script>

            $(document).ready(function(){
                $('#image-1').rcrop({
                    minSize : [200,200],
                    preserveAspectRatio : true,
                    grid : true,
                    
                    preview : {
                        display: true,
                        size : [100,100],
                    }
                });
                
                var $image2 = $('#image-2'),
                    $update = $('#update'),
                    inputs = {
                        x : $('#x'),
                        y : $('#y'),
                        width : $('#width'),
                        height : $('#height')
                    },
                    fill = function(){
                        var values = $image2.rcrop('getValues');
                        for(var coord in inputs){
                           inputs[coord].val(values[coord]);

                          


                        }
                         
                    }
                $image2.rcrop();
    
                $image2.on('rcrop-changed rcrop-ready', fill);
                
                $update.click(function(){
                    $image2.rcrop('resize', inputs.width.val(), inputs.height.val(), inputs.x.val(), inputs.y.val());
                    fill();
                })
                
                $('#image-3').rcrop({
                    minSize : [200,200],
                    preserveAspectRatio : true,
                    
                    preview : {
                        display: true,
                        size : [100,100],
                        wrapper : '#custom-preview-wrapper'
                    }
                });
                
                $('#image-2').on('rcrop-changed', function(){


                    console.log('checked');

                     $("#crop").val(1);
                  
                });
                
                $('#image-4').rcrop();
                
                
            });
        </script>
</body>
</html>