<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
</head>
<body>
	<h1>Add Student</h1>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post" enctype="multipart/form-data" >
	{{csrf_field()}}
	<table border="0">
		  @foreach($images as $image)
		<tr>
			<td>Title</td>
			<td><input type="text" name="title" value="{{ $image->title }}"></td>
		</tr>
		<tr>
			<td>category</td>
			<td>
				<select name="category" id="">
					  @foreach($cates as $cate)
					<option value="{{ $cate->id }}">{{ $cate->cname }}</option>

					 @endforeach
				</select>
			</td>
		</tr>
		<tr>
			<td>sort</td>
			<td><input type="text" name="sort" value="{{ $image->sort }}"></td>
		</tr>
		<tr>
			<td>des</td>
			<td><textarea type="text" name="des" value="{{ $image->des }}"></textarea></td>
		</tr>
		<tr>
			<td>Image</td>
			<td><input type="file" name="pic" value="{{ $image->name }}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>

		@endforeach
	</table>
</form>

@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach
</body>
</html>