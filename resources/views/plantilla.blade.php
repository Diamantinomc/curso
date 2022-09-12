<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>Plantilla</title>
</head>
<body>
    <div class="container-fluid">
    <div class="row ">
        <div class="col-sm-12 ">
            <div class="card bg-light mb-3">
                    <div class="card-header bg-primary">
                        @yield('nombre_card')
                    </div>
                    <div class="card-body">
                        @yield('cuerpo_card')
                    </div>
                    <div class="card-footer bg-primary"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>