<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!---Meta-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="InstHunters" />
    <meta name="author" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="<?php echo e(asset('neonFrontEnd/assets/images/favicon.ico')); ?>">


    <title>Big Data</title>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/bootstrap.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/font-icons/entypo/css/entypo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/neon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/neon-core.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/neon-theme.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/neon-forms.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('neonFrontEnd/assets/css/custom.css')); ?>">
    <!-- Scripts -->
    <script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery-1.11.3.min.js')); ?>"></script>


</head>
<body>
    <div class="wrap">

        <!-- Logo and Navigation -->
    <div class="site-header-container container">

        <div class="row">

            <div class="col-md-12">

                <header class="site-header">

                    <section class="site-logo">

                        <a href="<?php echo e(url('/')); ?>">
                            <img src="<?php echo e(asset('Imagenes/logo.png')); ?>" width="120" />
                        </a>

                    </section>

                    <nav class="site-nav">

                        <ul class="main-menu hidden-xs" id="main-menu">
                            <li>
                                <a href="<?php echo e(url('/')); ?>">
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(URL::to('Servicios')); ?>">
                                    <span>Sevicios</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(URL::to('Contact')); ?>">
                                    <span>Contactenos</span>
                                </a>
                            </li>
                                <?php if(Route::has('login')): ?>
                                    <?php if(auth()->guard()->check()): ?>
                                    <div class="btn-group left-dropdown">
                                    <button type="button" class="btn btn-black"><?php echo e(Auth::user()->name); ?></button>
                                        <button type="button" class="btn btn-black dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-primary" role="menu">
                                            <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                                Logout
                                            </a>
                                            <form id="frm-logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                <?php echo e(csrf_field()); ?>

                                            </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <?php else: ?>
                                    <li>
                                        <a href="<?php echo e(route('login')); ?>">
                                            <span class="btn btn-black">Login</span>
                                        </a>
                                    </li>
                                    <?php endif; ?>
                            <?php endif; ?>
                        </ul>


                        <div class="visible-xs">

                            <a href="#" class="menu-trigger">
                                <i class="entypo-menu"></i>
                            </a>

                        </div>
                    </nav>

                </header>

            </div>

        </div>

    </div>
<?php echo $__env->yieldContent('content'); ?>
    <!-- Bottom scripts (common) -->
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/gsap/TweenMax.min.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/bootstrap.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/joinable.js')); ?>"></script>
	<script src="<?php echo e(asset('neonFrontEnd/assets/js/resizeable.js')); ?>"></script>
    <script src="<?php echo e(asset('neonFrontEnd/assets/js/neon-api.js')); ?>"></script>
<?php echo $__env->yieldContent('Scripts'); ?>


		<!-- JavaScripts initializations and stuff -->
		<script src="<?php echo e(asset('neonFrontEnd/assets/js/neon-custom.js')); ?>"></script>


		<!-- Demo Settings -->
		<script src="<?php echo e(asset('neonFrontEnd/assets/js/neon-demo.js')); ?>"></script>
</html>
<?php /**PATH C:\laragon\www\AppTransaccional-v4.2rc\resources\views/layouts/app.blade.php ENDPATH**/ ?>