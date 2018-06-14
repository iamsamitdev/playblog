<?php if($paginator->hasPages()): ?>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        
        <?php if($paginator->onFirstPage()): ?>
            <li class="page-item disabled"><span class="page-link">ก่อนหน้า</span></li>
        <?php else: ?>
            <li class="page-item"><a href="<?php echo e($paginator->previousPageUrl()); ?>" class="page-link" rel="prev">ก่อนหน้า</a></li>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <li class="page-item disabled"><span class="page-link"><?php echo e($element); ?></span></li>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="page-item active"><span class="page-link"><?php echo e($page); ?></span></li>
                    <?php else: ?>
                    <li class="page-item"><a href="<?php echo e($url); ?>" class="page-link"><?php echo e($page); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <li class="page-item"><a href="<?php echo e($paginator->nextPageUrl()); ?>" class="page-link" rel="next">ถัดไป</a></li>
        <?php else: ?>
            <li class="page-item disabled"><span class="page-link">ถัดไป</span></li>
        <?php endif; ?>
    </ul>
</nav>
    <?php endif; ?>