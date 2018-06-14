<?php $__env->startSection('title_page'); ?>
    Register
<?php $__env->stopSection(); ?>

<?php $__env->startSection('active_home'); ?>
active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box-register">
    <div class="col-lg-4 offset-lg-4 mt-5">
        <h3 class="text-center mb-4">Register</h3>
        <div class="container">

            
            
            <form name="register" action="register_process" method="post">

                <?php echo csrf_field(); ?>

                <?php echo Session::get('status'); ?>


                <div class="form-group">
                    <input type="text" name="firstname" class="form-control" value="<?php echo e(old('firstname')); ?>" placeholder="Firstname">
                    <span class="text-danger"><?php echo e($errors->first('firstname')); ?></span>
                </div>

                <div class="form-group">
                    <input type="text" name="lastname" class="form-control" value="<?php echo e(old('lastname')); ?>" placeholder="Lastname">
                    <span class="text-danger"><?php echo e($errors->first('lastname')); ?></span>
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>" placeholder="Email">
                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                </div>

                <div class="form-group">
                    <input type="tel" name="tel" class="form-control" value="<?php echo e(old('tel')); ?>" placeholder="Tel">
                    <span class="text-danger"><?php echo e($errors->first('tel')); ?></span>
                </div>
                
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" value="male"> Male
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" value="female"> Female
                    </label>
                </div>

                <p><span class="text-danger"><?php echo e($errors->first('gender')); ?></span></p>

                <div class="form-group mt-2">
                    <textarea class="form-control" name="address" rows="4"  placeholder="Address"><?php echo e(old('address')); ?></textarea>
                    <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>