<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="uikit/css/uikit.min.css" />
          <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

        <script src="uikit/js/uikit.min.js"></script>
        <script src="uikit/js/uikit-icons.min.js"></script></head>
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
        </style>
</head>
<body>

	<div class="uk-container">

	<div class="uk-card uk-card-body">
	<h1>Welcome home! {{ session('uname') }}</h1>
	<br>
	<p uk-margin>
	<a href="{{ route('logout.index') }}" class="uk-button uk-button-primary">logout</a>

</p>

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
            <td><img width="50px" src=" {{ $cate->name }}" alt=""></td>
            <td>{{ $cate->title }}</td>
            <td>{{ $cate->category }}</td>
            <td>{{ $cate->des }}</td>
            <td>{{ $cate->sort }}</td>
            <td>{{ $cate->date_added }}</td>
            <td>{{ $cate->date_modified }}</td>
             <td><a href="" class="uk-button uk-button-primary">Edit</a></td>
             <td><a href="" class="uk-button uk-button-primary">Rotate</a></td>
             <td><a href="" class="uk-button uk-button-primary">Resize</a></td>
        </tr>

          @endforeach
        
    </tbody>
</table>


</div></div>
</body>
</html>