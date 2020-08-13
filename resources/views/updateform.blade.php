<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Post save form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-4">
    <div class="row">
        <h2 class="w-100 text-center">Update Post form</h1>
    </div>
    <div class="row mt-4">
      <div class="col-md-8 bg-dark text-white py-3 rounded">

        <form action="{{ route('post.update')}}" method="post" enctype="multipart/form-data" onsubmit="return validateForm1()" name="myform">
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{$post->id}}">
          <div class="form-group">
              <label for="pname">Here write a name of post</label>
              <input type="text" class="form-control" id="pname" name="pname" required minlength="4" value="{{$post->title}}">
              <small id="emailHelp" class="form-text text-muted">Text</small>
          </div>
          <div class="form-group">
              <label for="psdedc">Here write a short description for this post</label>
              <input type="text" class="form-control" id="psdedc" name="psdedc" value="{{$post->title_desc}}">
              <small id="emailHelp" class="form-text text-muted">Text</small>
          </div>
          <div class="form-group">
              <label for="pcontent">Here write a content</label>
              <textarea class="form-control" id="pcontent" name="pcontent" required minlength="10">{{$post->content}}"</textarea>
              <small id="emailHelp" class="form-text text-muted">Text</small>
          </div>
          <div class="form-group">
              <label for="ffile">Here select a picture for this post: </label>
              <input type="file" name="image" id="image"><br>

              <small id="emailHelp" class="form-text text-muted">Picture</small>
          </div>
          <div class="from-group text-right">
              <input type="submit" class="btn btn-info" value="Update" name="submit">

          </div>
        </form>
      </div>
      <div class="col-md-4">
        <h3>Why do we use update form?</h3>
        <p style="text-align: justify;">
          @if($post->pic)
            <img src="/storage/{{$post->pic}}" style="width:100%" alt="img">
          @else
            <h6>No picture for this post at the moment.</h6>
          @endif
        </p>
      </div>
    </div>
    <div class="row mt-4 mb-4">
      <a class="btn btn-info" href="/posts">Back to posts...</a>
    </div>
  </div>
  <script>
    function validateForm1(e){}
    function validateForm(e){
        return true
        var myForm = document.forms.myform
        if(document.forms.myform.pname.value.length < 4
            || document.forms.myform.psdedc.value.length < 16
            || document.forms.myform.pcontent.value.length < 36
        ) {
            alert('Not valid data');
            return false
        }
    }
  </script>
</body>
</html>
