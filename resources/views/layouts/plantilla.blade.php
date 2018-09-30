<!DOCTYPE html>
<html>
<head>
	<title>Documento sin titulo</title>
	
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>
	
	@include("layouts.navbar")
	
	@yield("cabecera")

	@include("layouts.jumbotron");
     
	@yield("infoGeneral")


    @yield("pie")

   
       
</body>
</html>