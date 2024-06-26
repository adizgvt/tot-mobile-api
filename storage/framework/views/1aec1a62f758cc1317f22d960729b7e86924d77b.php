<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="card col-md-8">
        <div class="card-body">
            <div class="col-auto col-md-12">
                <h2>
                    <center>Edit artikel</center>
                </h2>
                <hr>
                </br>
                <form action="<?php echo e(route('update', $article->id)); ?>" method="POST" class="row g-3">
                    <?php echo method_field('put'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="col-md-6">
                        <label class="form-label">Tajuk</label>
                        <input type="text" class="form-control" id="tajuk" name="tajuk" value="<?php echo e($article->tajuk); ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tarikh Publish</label>
                        <input type="text" class="form-control" id="tarikh_publish" name="tarikh_publish" value="<?php echo e($article->tarikh_publish); ?>">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo e($article->penulis); ?>">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo e($article->kategori); ?>">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">About</label>
                        <textarea type="text" class="form-control" id="about" name="about"><?php echo e($article->about); ?></textarea>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Content</label>
                          <textarea id="summernote" name="editordata"><?php echo e($article->content); ?></textarea>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Social Media</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="jenis[]" value="Facebook" readonly>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="url[]" value="<?php echo e($article->socialMedia[0]->url); ?>" required>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="jenis[]" value="Instagram" readonly>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="url[]" value="<?php echo e($article->socialMedia[1]->url); ?>" required>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="jenis[]" value="Twitter" readonly>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="url[]" value="<?php echo e($article->socialMedia[2]->url); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary float-end">Kemaskini</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/pocketdata/Desktop/blog-training/resources/views/edit.blade.php ENDPATH**/ ?>