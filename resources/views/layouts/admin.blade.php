 

<!DOCTYPE HTML>
	
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RAZO VOYAGE </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

	 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

	</head>

	<body>

	<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Admin RAZO VOYAGE</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="{{route('admin_voyages')}}">LIST</a></li>
        <li><a href="{{route('admin_users')}}">USERS</a></li>
      </ul>
    </div>
  </nav>
		
	<div id="page">

	<header id="gtco-header" class="gtco-cover" style="background-image: url(images/img_bg_2.jpg)">
	
	</header>
	

	@yield('admin_users')

	@yield('admin_voyages')

	@yield('form')

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	</body>
</html>



