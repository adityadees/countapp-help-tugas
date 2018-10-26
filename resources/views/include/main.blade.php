<!DOCTYPE html>
<html lang="en">
 <head>

	   @include('include.layout.head')
 </head>

 <body>
	@include('include.layout.nav')
	@yield('content')
	@include('include.layout.footer')
	@include('include.layout.footer-script')
 </body>
</html>
