<html>
	<head></head>
	<body>
<form method="post">
		{{csrf_field()}}

		 @foreach($images as $image)

		<img width="300px" src="/upload/{{ $image->name }}" alt="">
		<input type="hidden" name="image" value="{{ $image->name }}">

		Rotate :

		 <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label>Width:<input class="uk-radio" type="text" name="width" checked value="100"></label>
            <label>Height:<input class="uk-radio" type="text" name="height" value="100"></label>
        </div>

        <input type="submit" value="Submit">

		 @endforeach
		 </form>
	</body>
</html>