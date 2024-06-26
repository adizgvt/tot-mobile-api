<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-auto col-md-10">

            <?php if(Session::get('message')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(Session::get('message')); ?>

            </div>
            <?php endif; ?>

            <h2>
                <center>Senarai blog</center>
            </h2>
            <a href="<?php echo e(route('create')); ?>" type="button" class="btn btn-primary float-end">Tambah Blog</a>
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tajuk</th>
                        <th scope="col">Tarikh publish</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row"><?php echo e($key + 1); ?></td>
                            <td><?php echo e($article->tajuk); ?></td>
                            <td><?php echo e($article->tarikh_publish); ?></td>
                            <td><?php echo e($article->penulis); ?></td>
                            <td><?php echo e($article->kategori); ?></td>
                            <td>
                                <a href="<?php echo e(route('edit', $article->id)); ?>" type="button" class="btn btn-primary">Edit</a>
                                <form action="<?php echo e(route('destroy', $article->id)); ?>" method="post" style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger" type="submit" 
                                        onclick="return confirm('Adakah anda pasti ?')">Hapus</button>
                                </form>
                            </td>
                        </tr>    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pocketdata/Desktop/blog-training/resources/views/index.blade.php ENDPATH**/ ?>