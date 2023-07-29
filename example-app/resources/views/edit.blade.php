<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Laravel Tutorial</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog - Bootstrap : Frenchcoder</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>

	




  <div class="container">
  
  <h2>Create a Post</h2>
  
	<form action="{{url('/posts')}}/{{$post->id}}" method="post" class="row g-3">
    @csrf
    @method('PATCH')
	    <input type="text" name="title" value="{{$post->title}}" class="form-control" placeholder="Title">
		<input type="text" name="imge_name" value="{{$post->imge_name}}" class="form-control" placeholder="img name">
		<input type="text" name="description" value="{{$post->description}}" class="form-control" placeholder="Description">
	  <div class="col-auto">
		<button type="submit" class="btn btn-primary mb-3">Update</button>
	  </div>
	</form>
</div>
</body>
</html>
