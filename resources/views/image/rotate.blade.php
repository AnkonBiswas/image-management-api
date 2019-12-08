<html>
	<head></head>
	<body>
<form method="post">
		{{csrf_field()}}

		 @foreach($images as $image)

		<img width="30%" src="/upload/{{ $image->name }}" alt="">
		<input type="hidden" name="image" value="{{ $image->name }}">

		Rotate :

		 <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <label><input class="uk-radio" type="radio" name="rotate" checked value="-90"> Left</label>
            <label><input class="uk-radio" type="radio" name="rotate" value="90"> Right</label>
        </div>

        <input type="submit" value="Submit">

		 @endforeach
		 </form>
	</body>
</html>