<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>
    
  </head>
  <body>
  <div id="app">
    <header>
      <header-box></header-box>
    </header>
    <div>
      <page-show></page-show>
    </div>
    <footer>
      <footer-box></footer-box>
    </footer>
  </div>

  
  <script src="/js/mobile.js"></script>
  </body>
</html>