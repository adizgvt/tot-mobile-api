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
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                </h3>

                <div class="blog-post">
                    <h2 class="blog-post-title"><?php echo e($article->tajuk); ?></h2>
                    <p class="blog-post-meta"><?php echo e($article->tarikh_publish); ?> <a href="#"><?php echo e($article->penulis); ?></a></p>

                    <p><?php echo $article->content; ?></p>

                </div><!-- /.blog-post -->

                
                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="<?php echo e(route('landing')); ?>">Kembali</a>
                    <?php if(Auth::check()): ?>
                    <a class="btn btn-outline-success" href="<?php echo e(route('edit', $article->id)); ?>" target="_blank">Kemaskini</a>
                    <?php endif; ?>
                </nav>
                </br>
            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0"><?php echo e($article->about); ?></p>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Social Media</h4>
                    <ol class="list-unstyled">
                        <?php $__currentLoopData = $article->socialMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a target="_blank" href="<?php echo e($value->url); ?>"><?php echo e($value->jenis); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', ['nav' => 'read'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pocketdata/Desktop/blog-training/resources/views/read.blade.php ENDPATH**/ ?>