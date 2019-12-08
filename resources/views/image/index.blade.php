<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
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

form{
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
form p{
  width: 100%;
  height: 100%;
  text-align: center;
  line-height: 170px;
  color: #ffffff;
  font-family: Arial;
}
form input{
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
}
form button{
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
form button:hover{
  background: #149174;
  color: #0C5645;
}
form button:active{
  border:0;
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
<form method="post" enctype="multipart/form-data"><input id="someInput" type="file" name="images[]" multiple>  <p>Drag your files here or click in this area.</p>
  <button type="submit" id="btn-click" style="display: none;">Upload</button>
  <br><br>
</form>
<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Title</th>
             <th>Category</th>
              <th>Des</th>
             <th>Sort</th>
              <th>Date Added</th>
               <th>Date Modified</th>
               <th>Edit</th>
               <th>Rotate</th>
               <th>Resize</th>
        </tr>
    </thead>
    <tbody>
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
             <td><a href="image/rotate/{{ $cate->id }}" class="uk-button uk-button-primary">Rotate</a></td>
             <td><a href="image/crop/{{ $cate->id }}" class="uk-button uk-button-primary">Resize</a></td>
        </tr>

          @endforeach
        
    </tbody>
</table>


</div></div>
</body>
</html>