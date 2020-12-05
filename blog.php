<?php

$posts = [
	[
		'title' => 'Best car',
		'text' => 'Mercedes Bens is the most loved car brand in the world',
		'footer' => 'Added 4 minutes',
	],
	[
		'title' => 'Worst brand',
		'text' => 'Mercedes Bens is the most loved car brand in the world',
		'footer' => 'Added 4 minutes',
	],
	[
		'title' => 'Middle car',
		'text' => 'Mercedes Bens is the most loved car brand in the world',
		'footer' => 'Added 4 minutes',
	],
];

if (isset($_POST['search']) && !empty($_POST['query'])) {
	$query = $_POST['query'];

	$results = [];

	foreach ($posts as $key => $post) {
		if (strpos(strtolower($post['title']), strtolower($query)) !== false) {
			$results[] = $post;
		}
	}
	$posts = $results;

}

?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">		<title>Blog</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0" action="" method="post">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
				</form>
			</div>
		</nav>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="..." class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="..." class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="..." class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="container">
			<div class="row">
				<?php foreach ($posts as $key => $post): ?>
				<div class="col-3">
					<div class="card text-center mt-3">
						<div class="card-body">
							<h4 class="card-title">
							<?php echo ++$key . '. ' . $post['title'] ?>
							</h4>
							<div class="card-text">
								<?php echo $post['text'] ?>
							</div>
						</div>
						<div class="card-footer">
							<?php echo $post['footer'] ?>
						</div>
					</div>
				</div>
				<?php endforeach?>
			</div>
		</div>
		<!-- jQuery and Bootstrap Bundle (includes Popper) -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>