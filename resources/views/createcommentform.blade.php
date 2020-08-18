
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
        <h2 class="w-100 text-center">New Post form</h1>
    </div>
    <div class="row mt-4    ">
        <div class="col-md-8 bg-dark text-white py-3 rounded">
            <form action="{{ route('comment.create')}}" method="post" enctype="multipart/form-data" onsubmit="return validateForm1()" name="myform">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$id}}">
                <div class="form-group">
                    <label for="cname">Here write a title of comment</label>
                    <input type="text" class="form-control" id="cname" name="cname" required minlength="4">
                    <small id="emailHelp" class="form-text text-muted">Text</small>
                </div>
                <div class="form-group">
                    <label for="csdedc">Here write a short description for this comment</label>
                    <input type="text" class="form-control" id="csdedc" name="csdedc">
                    <small id="emailHelp" class="form-text text-muted">Text</small>
                </div>
                <div class="form-group">
                    <label for="ccontent">Here write a comment text</label>
                    <textarea class="form-control" id="ccontent" name="ccontent" required minlength="10"></textarea>
                    <small id="emailHelp" class="form-text text-muted">Text</small>
                </div>
                <div class="from-group text-right">
                    <input type="submit" class="btn btn-info" value="Upload" name="submit">
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h3>Why do we use it?</h3>
            <p style="text-align: justify;">
                Here is a new comment form description...
            </p>
        </div>
    </div>
    <div class="row mt-4 mb-4">
        <a class="btn btn-info" href="/post/{{$id}}">Back to post...</a>
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
    // console.log(myForm)
</script>
</body>
</html>
