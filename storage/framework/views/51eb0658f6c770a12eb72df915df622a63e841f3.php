<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Productos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('/')); ?>">Inicio</a>
                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('Productos')); ?>">Productos</a>
                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('Servicios')); ?>">Servicios</a>
                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('Contact')); ?>">Contactenos</a>
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <<div class="content">
                <br>
                <div class="title m-b-md">
                <h1 style="font-size: 40px;font-family: Carlito;">Expertos en análisis de datos y tecnologías Big Data</h1>
                </div>
                <img  style="padding-center:10px;height: 400px;"src="<?php echo e(asset('Imagenes/Productos2.png')); ?>"/>
                </div>
            </div>
        <div>
        <br>
        <b><center>Elaborado por: Semillero de Investigaciòn BigData</center></b>
        </div>
    </body>
</html>




<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BigDataII/resources/views/Productos.blade.php ENDPATH**/ ?>