<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="/">
        <img src="images/logo.png" alt="">
    </a>
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item <?php echo $__env->yieldContent('active_home'); ?>">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item <?php echo $__env->yieldContent('active_about'); ?>">
                <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item <?php echo $__env->yieldContent('active_service'); ?>">
                    <a class="nav-link" href="service">Service</a>
            </li>
            <li class="nav-item <?php echo $__env->yieldContent('active_portfolio'); ?>">
                    <a class="nav-link" href="portfolio">Portfolio</a>
            </li>
            <li class="nav-item <?php echo $__env->yieldContent('active_contact'); ?>">
                    <a class="nav-link" href="contact">Contact us</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a name="" id="" class="btn btn-default mr-3 btn-register" href="register" role="button">Register</a>
            <input class="form-control mr-sm-2 inp-search" type="text" placeholder="Search">
        </form>
    </div>
</nav>