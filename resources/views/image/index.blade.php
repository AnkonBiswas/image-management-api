<!DOCTYPE html>
<html>
<head>
	<title>Image Filemanager</title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="uikit/css/uikit.min.css" />
          <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

        <script src="uikit/js/uikit.min.js"></script>
        <script src="uikit/js/uikit-icons.min.js"></script>
              <script src="js/ab.js"></script>


            </head>
</head>
    <style>
        .uk-container>:last-child {
    /* margin-bottom: 0; */
    margin: auto;
    display: table;
    box-shadow: 0 0 14px #e1e1e1;
    padding: 6%;
    margin-top: 50px;
    margin-bottom: 50px;
}

#upload{
  position: relative;
  top: 50%;
  left: 50%;
  margin-top: -100px;
  margin-left: -250px;
  width: 500px;
  height: 200px;
  border: 4px dashed #fff;
  background-image: radial-gradient(circle 441px at 38.42% 100%, #3d0c60 0%, #1c0a43 100%);
}
#upload p{
  width: 100%;
  height: 100%;
  text-align: center;
  line-height: 170px;
  color: #ffffff;
  font-family: Arial;
}
#upload input{
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
}
#upload button{
  margin: 0;
  color: #fff;
  background: #16a085;
  border: none;
  width: 508px;
  height: 35px;
  margin-top: -20px;
  margin-left: -4px;
  border-radius: 4px;
  border-bottom: 4px solid #117A60;
  transition: all .2s ease;
  outline: none;
}
#upload button:hover{
  background: #149174;
  color: #0C5645;
}
#upload button:active{
  border:0;
}
form#ajax {
    padding-top: 50px;
}
        </style>

        <script>
          
          $(function () {
        $(":file").change(function () {

           document.getElementById("btn-click").click();

             });
    });
        </script>
</head>
<body>

	<div class="uk-container">

	<div class="uk-card uk-card-body">
	<h1>Welcome home! {{ session('uname') }}   {{ session('id') }}</h1>
	<br>
	<p uk-margin>
	<a href="{{ route('logout.index') }}" class="uk-button uk-button-primary">logout</a>

</p>
<form method="post" enctype="multipart/form-data" id="upload"><input id="someInput" type="file" name="images[]" multiple>  <p>Drag your files here or click in this area.</p>
  <button type="submit" id="btn-click" style="display: none;">Upload</button>
  <br><br>
</form>


<form id="ajax">
<div class="uk-margin">
  <select id="sv" name="sv" id="" class="uk-select">
    <option value="asc">Asc</option>
    <option value="desc">Desc</option>
</select>
</div>

   <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-radio" type="radio" name="layout" checked value="simple"> Simple</label>
            <label><input class="uk-radio" type="radio" name="layout" value="mosaic"> Mosaic</label>
        </div>

  <div class="uk-margin">
<input type="text" class="uk-input" placeholder="Search" name="search">
</div>
<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Id <input type="radio" name="sort" value="id" class="uk-checkbox" checked=""></th>
            <th>Image </th>
            <th>Title <input type="radio" name="sort" value="title" class="uk-checkbox"></th>
             <th>Category <input type="radio" name="sort" value="cname" class="uk-checkbox"></th>
              <th>Des</th>
             <th>Sort <input type="radio" name="sort" value="sort" class="uk-checkbox"></th>
              <th>Date Added <input type="radio" name="sort" value="date_added" class="uk-checkbox"></th>
               <th>Date Modified <input type="radio" name="sort" value="date_modified" class="uk-checkbox"></th>
               <th>Edit</th>
               <th>Status <input type="radio" name="sort" value="enable" class="uk-checkbox"></th>
             
        </tr>
    </thead>
    <tbody id="load">
                  @foreach($cates as $cate)

        <tr>
            <td>{{ $cate->id }}</td>
            <td><img width="50px" src="upload/{{ $cate->name }}" alt=""></td>
            <td>{{ $cate->title }}</td>
            <td>{{ $cate->category }}</td>
            <td>{{ $cate->des }}</td>
            <td>{{ $cate->sort }}</td>
            <td>{{ $cate->date_added }}</td>
            <td>{{ $cate->date_modified }}</td>
             <td><a href="image/edit/{{ $cate->id }}" class="uk-button uk-button-primary">Edit</a></td>
         <!--     <td><a href="image/rotate/{{ $cate->id }}" class="uk-button uk-button-primary">Rotate</a></td>
             <td><a href="image/crop/{{ $cate->id }}" class="uk-button uk-button-primary">Resize</a></td> -->


             @if($cate->enable == 0) 

              <td><a href="image/enable/{{ $cate->id }}/1" class="uk-button uk-button-primary">Enable</a></td>

                @else

                              <td><a href="image/enable/{{ $cate->id }}/0" class="uk-button uk-button-danger">Disable</a></td>



               @endif
        </tr>

          @endforeach
        
    </tbody>
</table>
</form>

</div></div>


<script>
  $('#ajax input,#ajax select').on('input', function() {
    console.log('changed');

    html="";

     $.ajax({
                url: 'image/load', // url where to submit the request
                type : "POST", // type of action POST || GET
                dataType : 'json', // data type
                data : $("#ajax").serialize(), // post data || get data
                success : function(result) {


                  $("#load").empty();
                    // you can see the result from the console
                    // tab of the developer tools
                    console.log(result);
                   for (var i = result.length - 1; i >= 0; i--) {

                    console.log(result[i]['name']);
                    id =result[i]['id'];
                    name =(result[i]['name'] == null) ? "" : result[i]['name'];
                    title = ( result[i]['title'] == null) ? "" : result[i]['title'];
                    cname = ( result[i]['cname'] == null) ? "" : result[i]['cname'];
                    des =(result[i]['des'] == null) ? "" : result[i]['des'];
                    sort =(result[i]['sort'] == null) ? "" :result[i]['sort'];
                    date_added = result[i]['date_added'];
                    date_modified = result[i]['date_modified'];

                   html +='<tr><td>'+id+'</td><td><img width="50px" src="upload/'+name+'" alt=""></td><td>'+title+'</td><td>'+cname+'</td><td>'+des+'</td><td>'+sort+'</td><td>'+date_added+'</td><td>'+date_modified+'</td><td><a href="image/edit/'+id+'" class="uk-button uk-button-primary">Edit</a></td>';

                     if (result[i]['enable'] == 0) {

                      html +="<td><a href='image/enable/"+id+"/1' class='uk-button uk-button-primary'>Enable</a></td>";

                     }else{

                        html +="<td><a href='image/enable/"+id+"/0' class='uk-button uk-button-danger'>Disable</a></td>";


                     }
                     html +="</tr>";

                   }

                    $('#load').append(html);

                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            })

});
</script>
</body>
</html>