<?php $__env->startSection('content'); ?>
<style>
/*
 * Footer
 */
.blog-footer {
  padding: 2.5rem 0;
  color: #999;
  text-align: center;
  background-color: #f9f9f9;
  border-top: .05rem solid #e5e5e5;
}
.blog-footer p:last-child {
  margin-bottom: 0;
}
</style>
<div class="container">
    <div class="row mb-4">

        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary"><?php echo e($article->kategori); ?></strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="<?php echo e(route('read', $article->id)); ?>"><?php echo e($article->tajuk); ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?php echo e($article->tarikh_publish); ?></div>
                    <p class="card-text mb-auto"><?php echo e(Str::limit(strip_tags($article->content), 100, '...')); ?></p>
                    <a href="<?php echo e(route('read', $article->id)); ?>">Continue reading</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', ['nav' => 'index'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pocketdata/Desktop/blog-training/resources/views/welcome.blade.php ENDPATH**/ ?>