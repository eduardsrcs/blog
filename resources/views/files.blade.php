<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File save</title>
</head>
<body>
	<form action="{{ route('image.upload')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
		<input type="file" name="image" id="image">
		<input type="submit" value="Upload" name="submit">
	</form>

  @isset($path)
    <img src="{{ asset('/storage/' . $path) }}" alt="so">
  @endisset
</body>
</html>
