<?php $__env->startSection('title_page'); ?>
    Home
    ##parent-placeholder-31a36438edbbb78b4525e1048e21b686e31c12bb##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="images/slide/slide1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                    <img src="images/slide/slide2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                    <img src="images/slide/slide3.jpg" alt="First slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="jumbotron">
        <h1 class="display-3 text-center">Introduction</h1>
    </div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>