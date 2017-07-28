<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.rawgit.com/icons8/titanic/master/dist/js/titanic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.5.9/bodymovin.min.js"></script>
    <script>
    var titanic = new Titanic({
      hover: true, // auto animated on hover (default true)
      click: true  // auto animated on click/tap (default false)
    });
    </script>
  </head>
  <body>
    @yield('content')
  </body>
</html>
