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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Blogging</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Articles</a>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Connexion</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Rechercher article" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
      </form>
    </div>
  </div>
</nav>
<br/><br/>

	




  <div class="container">
  
  <h2>Create a Post</h2>
  
	<form action="{{url('/posts')}}" method="POST" class="row g-3">
    @csrf
	    <input type="text" name="title" class="form-control" placeholder="Title">
		<input type="text" name="imge_name" class="form-control" placeholder="img name">
		<input type="text" name="description" class="form-control" placeholder="Description">
	  <div class="col-auto">
		<button type="submit" class="btn btn-primary mb-3">Save</button>
	  </div>
	</form>
  
  
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col-md-8">
	
	@foreach($posts as $post)
	
		<div class="card mb-3">
		    
          <!--<img src="https://cdn.pixabay.com/photo/2016/01/19/17/29/earth-1149733_1280.jpg" class="card-img-top" alt="...">-->
          <div class="card-body">
            <h5 class="card-title">	{{$post->title}}</h5>
            <p class="card-text">{{$post->description}}</p>
            <p class="card-text "><small class="text-muted"><a href="{{url('/posts/')}}/{{$post->id}}/edit">Edit</a> | 
            <form action="{{url('/posts')}}/{{$post->id}}/delete" method="post" >
                @csrf
                @method('DELETE')

                <input type="submit" value="delete"/>
            </form>
            
            </small></p>
          </div>
        </div>

	@endforeach
      
        
      
      
      
    </div>
    
  </div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
