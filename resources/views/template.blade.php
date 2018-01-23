<html>
    <head>
        <title>{{$title or 'Lista de Cursos'}}</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script> <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-orange.min.css" />
        
        <link rel="stylesheet" href="{{url('assets/style.css')}}"
           
    </head>
    <body class="body">
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            @yield('content')
        </div>

    </body>
</html>