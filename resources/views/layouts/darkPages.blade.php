<!DOCTYPE html>
<html>

<head>
@include('includes.head')

</head>

<body>
@include('includes.headerSectionDark')

@yield('content')

@include('includes.info')

@include('includes.footer')    
   
@include('includes.footerJs')
  
</body>

</html>