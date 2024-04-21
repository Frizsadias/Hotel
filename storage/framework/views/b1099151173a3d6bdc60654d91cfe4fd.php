<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-center  align-items-center">
                  <h5 class="mb-0 fw-bold fs-1">Tambah Data Kamar</h5>
              </div>
              <div class="card-body">
                  <form action="/kamars/<?php echo e($kamars->kamar); ?>" method="Post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('Put'); ?>
                    <div class="mb-3">
                        <label class="form-label" for="image">Image</label>
                        <input type="hidden" name="oldimage" value="<?php echo e($kamars->image); ?>">
                        <?php if($kamars->image): ?>
                        <img src="<?php echo e(asset('storage' . $kamars->image)); ?>" class=" img-preview img-fluid mb-3 col-sm-5 d-block">
                        <?php else: ?>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <?php endif; ?>
                        
                        <input type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="image" name="image" onchange="previewImage()" value ="<?php echo e(old('image', $kamars->image)); ?>" required autofocus />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="kamar">Jenis Kamar</label>
                      <input type="text" class="form-control <?php $__errorArgs = ['kamar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="kamar" name="kamar" value ="<?php echo e(old('kamar', $kamars->kamar)); ?>" required autofocus  />
                      <?php $__errorArgs = ['kamar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="invalid-feedback">
                         <?php echo e($message); ?>

                     </div>
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                 </div>
                 <div class="mb-3">
                    <label class="form-label" for="harga">Harga</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="harga" name="harga" value ="<?php echo e(old('harga', $kamars->harga)); ?>" required autofocus  />
                    <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                       <?php echo e($message); ?>

                   </div>
                   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   <button type="submit" class="btn btn-primary mt-3">Tambah</button>
               </form>
           </div>
       </div>
   </div>
</div>
</div>
<script>
    
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        
        imgPreview.style.display = 'block';
        
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        
        oFReader.onload = function (oFREvent){
          imgPreview.src = oFREvent.target.result;
      }
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\LaravelReservasiHotel\resources\views/Admin/DataKamar/edit.blade.php ENDPATH**/ ?>