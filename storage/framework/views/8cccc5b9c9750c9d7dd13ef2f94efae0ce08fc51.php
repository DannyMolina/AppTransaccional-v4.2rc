<?php $__env->startSection('content'); ?>
    <!-- Blog -->
    <section class="blog">

        <div class="container">

            <div class="row">

                <div class="col-sm-8">

                    <div class="blog-posts">
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Blog Post -->
                        <div class="blog-post">

                            <div class="post-thumb">

                                <a href="#">
                                    <img src="<?php echo e($data->img); ?>" class="img-rounded" />
                                    <span class="hover-zoom"></span>
                                </a>

                            </div>

                            <div class="post-details">

                                <h3>
                                    <a href="#">Post</a>
                                </h3>

                                <div class="post-meta">

                                    <div class="meta-info">
                                        <i class="entypo-calendar"></i> <?php echo e($data->date); ?></div>

                                    <div class="meta-info">
                                        <i class="entypo-comment"></i>
                                        <?php echo e($data->comentarios); ?>

                                    </div>

                                    <div class="meta-info">
                                        <i class="far fa-thumbs-up"></i>
                                        <?php echo e($data->likes); ?>

                                    </div>


                                </div>

                                <p><?php echo e($data->txt); ?></p>

                            </div>

                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            <form action="<?php echo e(URL::to('instahunterview')); ?>" method="post"> <?php echo e(csrf_field()); ?>

                                <button href="#" type="submit" class="btn btn-outline-secondary pull-right btn-lg" name="save">
                                    Donwload CSV <i class="fas fa-file-download"></i>
                                 </button>
                            </form>

                        <!-- Blog Pagination -->
                        <div class="text-center">

                            <ul class="pagination">
                                <li class="active">
                                    <?php echo e($items->links()); ?>

                                </li>
                            </ul>

                        </div>

                    </div>

                </div>
                <div class="col-sm-4">

                    <!-- List Sidebar -->
    <div class="sidebar">

        <h3>
            <form action="<?php echo e(URL::to('instahunterview')); ?>" method="post"> <?php echo e(csrf_field()); ?>

                <button href="#" type="submit" class="btn btn-outline-secondary pull-right btn-lg" name="save">
                    Donwload CSV <i class="fas fa-file-download"></i>
                 </button>
            </form>
        </h3>
    </div>

    </section>
        <!-- Footer Widgets -->
    <section class="footer-widgets">

        <div class="container">

            <div class="row">

                <div class="col-sm-6">

                    <a href="https://universitariadecolombia.edu.co">
                        <img src="<?php echo e(asset('blogFrontend/assets/images/logo1.png')); ?>" width="120"/>
                    </a>

                    <p>
                        Institución educativa <br />
                        Universitaria de Colombia.
                    </p>

                </div>

                <div class="col-sm-3">

                    <h5>Sede Administrativa:</h5>
                    <p>
                        Carrera 7 No. 35-85 <br />
                        Bogotá, COL
                    </p>

                </div>

                <div class="col-sm-3">

                    <h5>Contactenos</h5>

                    <p>
                        Teléfono: +57 (1) 288 – 0871 <br />
                        Teléfono: +57 (1) 232 – 4070 <br />
                        inscripciones@universitariadecolombia.edu.co
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- Site Footer -->
    <footer class="site-footer">

        <div class="container">

            <div class="row">

                <div class="col-sm-6">
                    © 2020 Copyright:
                    <a href="https://universitariadecolombia.edu.co/programas/profesionales/ingenieria-de-sistemas/"> Semillero Ingenieria de Sistemas, Universitaria de Colombia. </a>

                </div>

                <div class="col-sm-6">

                    <ul class="social-networks text-right">
                        <li>
                            <a href="#">
                                <i class="entypo-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-facebook"></i>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </footer>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.InstaHuntershow', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/BigDataII/resources/views/instahunterview.blade.php ENDPATH**/ ?>