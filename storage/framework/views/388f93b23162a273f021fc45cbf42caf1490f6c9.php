<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->


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
            .m-md {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('/')); ?>">Inicio</a>
                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('Servicios1')); ?>">Servicios</a>
                <a class="btn btn-outline-secondary" href="<?php echo e(URL::to('Contact')); ?>">Contactenos</a>
                <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Portal de Usuarios</a>
                    <?php endif; ?>
        </div>
            <?php endif; ?>
        <div class="container">
            <div class="content">
                <div class="title m-b-md">
                        <center>BIG DATA</center>
                </div>
            <img style="height: 400px;" src="<?php echo e(asset('Imagenes/logo.png')); ?>" alt="">
            <br>
            <br>
            <br>
            <div><b><center> Transforma tu empresa en un motor de   crecimiento para tu negocio</center></b>
        <br>
        <br>
        <br>
        <br>
        <br>

        <b><center>Elaborado por: Semillero de Investigación BigData</center></b>

            </div>
            </div>
            <br>
                <div class="footer-copyright text-center py-3"><center>© 2020 Copyright:
                  <a href="https://universitariadecolombia.edu.co/programas/profesionales/ingenieria-de-sistemas/"> Semillero Ingenieria de Sistemas, Universitaria de Colombia. </a></center>
                </div>    
        </div>
        </div>

    </body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/AppTransaccional v3.2rc/resources/views/welcome.blade.php ENDPATH**/ ?>