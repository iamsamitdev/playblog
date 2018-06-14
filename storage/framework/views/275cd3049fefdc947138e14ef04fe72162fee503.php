<?php $__env->startSection('title_page'); ?>
    Province
<?php $__env->stopSection(); ?>

<?php $__env->startSection('active_home'); ?>
active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="jumbotron jumbotron-fluid jumbo-head">
        <div class="container-fluid">
            <h1 class="display-3">Province List (<?php echo e(count($province)); ?>)</h1>
        </div>
    </div>

    <div class="container-fluid blog-content">
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name (th)</th>
                    <th>Name (eng)</th>
                    <th>GEO</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $province; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pv->province_id); ?></td>
                    <td><?php echo e($pv->province_code); ?></td>
                    <td><?php echo e($pv->province_name); ?></td>
                    <td><?php echo e($pv->province_name_eng); ?></td>
                    <td><?php echo e($pv->geo_id); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
         <?php echo e($province->links('pages.pagination_default')); ?>

     </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>