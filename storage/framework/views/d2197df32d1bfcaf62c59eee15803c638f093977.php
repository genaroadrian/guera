<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                    <h1>Imagenes</h1>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success text-center">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <label for="select">Seleccione la imagen: </label>
                    <select name="" id="selec">
                            <option value="urlexample.jpg">Seleccione una opcion</option>
                            <?php $__currentLoopData = $imagen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($img->image); ?>"> <?php echo e($img->nombre); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
                <div class="card" style="width: 35rem;">
                        <img src="" class="card-img-top" alt="" id="imagen">
                        <div class="card-body">
                          <p class="card-text text-center" id="tittle"></p>
                        </div>
                </div>
        </div>
    </div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\select\resources\views/index.blade.php ENDPATH**/ ?>