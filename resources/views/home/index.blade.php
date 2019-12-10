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
	<h1>Welcome home! {{ session('uname') }}</h1><br>
<!--       Your Api Key : <input type="text" value="{{ session('api_key') }}">
 -->
	<br>
	<p uk-margin>
	<a href="{{ route('logout.index') }}" class="uk-button uk-button-primary">logout</a>

	<a href="{{ route('image.index') }}" class="uk-button uk-button-primary">List Image</a>
</p>

</div></div>
</body>
</html>