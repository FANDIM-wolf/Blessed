<!DOCTYPE html>

<html>
<head>
	<title>Server oso</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
 <style>
      
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    
    /* Disable link */

    

    .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}


    </style>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

   

<header>
	
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Blessed</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"   aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      
     <div class="dropdown">
  <h6 style="color:white; margin-top: 10px;">Mouse over me</h6>
  <div class="dropdown-content">
    <p>Hello World!</p>
    <a href="upload.php"style="text-decoration: none; color: black;">Link1</a>
  </div>
</div>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST">
      <input class="form-control mr-sm-2" type="text"  id="myinput" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" onclick="search(myinput.value);"type="submit">Search</button>
    </form>
  </div>
</nav>

</header>
	
<div id="video_go">	
<h1>Video</h1>
</div>
<h1 id="videomine" style="color: red;">Video</h1>


<?php 



?>

<script type="text/javascript">

	var input = document.getElementById("myinput");
	var video = document.getElementById("videomine");
	function search(addr) {
        window.location.assign(addr);
		if (input.value == "Skynotepad" || "notepad") {
                
             window.location.assign("upload.php");
		}
	}


</script>
</body>
</html>