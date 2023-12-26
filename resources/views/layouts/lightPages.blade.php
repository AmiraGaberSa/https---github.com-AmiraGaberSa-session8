<!DOCTYPE html>
<html>

<head>
@include('includes.head')

</head>

<body>

@include('includes.headerSectionLight')

@yield('content')

@include('includes.info')

@include('includes.footer')    
   
@include('includes.footerJs')
  
</body>

</html>