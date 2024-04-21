<?php $__env->startSection('content'); ?>
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-lg-6">
                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
                        <?php echo e(session('success')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4">
                <div class="input-group input-group-merge mb-3">
                    <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search..."
                        aria-describedby="basic-addon-search31" />
                </div>

            </div>
        </div>

        <div class="row">
            <?php $__currentLoopData = $kamars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kamar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-3">
                        <img src="<?php echo e(asset('storage/' . $kamar->image)); ?>" class="card-img-top" width="50"
                            height="200">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($kamar->kamar); ?></h5>
                            <p class="card-text">
                                Rp <?php echo e($kamar->harga); ?>/<span>Malam</span>
                            </p>
                            <div class="mb-3">
                                <a href="/pemesanan/<?php echo e($kamar->id); ?>" class="btn btn-primary">Pesan</a>
                            </div>
                            <p class="card-text">
                                <small class="text-muted"><?php echo e($kamar->created_at->diffForHumans()); ?></small>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\LaravelReservasiHotel\resources\views/User/Pesanan/DataPesanan.blade.php ENDPATH**/ ?>