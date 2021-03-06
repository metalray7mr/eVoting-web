<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'EVoting') }}</title>
        <!-- Styles -->
        <style type="text/css">
            .table-fixed thead {
  width: 97%;
}
.table-fixed tbody {
  height: 120px;
  overflow-y: auto;
  width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
  display: block;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
  float: left;
  border-bottom-width: 0;
}
        </style>

        </style>
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Scripts -->
        <script>
        window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
        ]); ?>
        </script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        @yield('imports')
    </head>

    <body>
       
       <ul class="nav nav-tabs">
        <li role="presentation" ><a href="/admin">Home</a></li>
         <li role="presentation"><a href="/info">info</a></li>
         <li role="presentation" class="active"><a href="#">Authorize</a></li>
         <li role="presentation"><a href="/result">View Results</a></li>
           <li role="presentation" align = "right"><a href="/logout">Logout</a></li>
        </ul>
 
    <div class="container" style="margin-top: 30px">
    <div class="rows">
    @yield('content')
    </div>
    </div>
    </body>
    
</html>
