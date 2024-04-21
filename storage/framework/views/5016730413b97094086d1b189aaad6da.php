<?php $__env->startSection('content'); ?>
    <div class="container mt-4">

        <?php if(session()->has('success')): ?>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo e(session('success')); ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row mb-3">
            <div class="col-lg-4">
                <a href="/tambah-keranjang" class="btn btn-primary">Tambah Pesanan</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Kamar</th>
                                    <th>harga</th>
                                    <th>Jumlah Kamar</th>
                                    <th>Total Harga</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php if(!empty($pesanans)): ?>
                                    <?php if($pesanans->count() > 0): ?>
                                        <?php $__currentLoopData = $pesanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><a href="<?php echo e(asset('storage/' . $pesanan->kamar->image)); ?>"
                                                        target="_blank"><img
                                                            src="<?php echo e(asset('storage/' . $pesanan->kamar->image)); ?>"
                                                            alt="" width="60"
                                                            title="<?php echo e($pesanan->kamar->kamar); ?>"></a></td>
                                                <td><?php echo e($pesanan->Kamar->kamar); ?></td>
                                                <td>Rp.<?php echo e(number_format($pesanan->Kamar->harga)); ?></td>
                                                
                                                
                                                <td><?php echo e($pesanan->jumlah); ?></td>
                                                <td>Rp. <?php echo e(number_format($pesanan->harga)); ?></td>
                                                <td><a href="/detail-pesanan-user/<?php echo e($pesanan->id); ?>"
                                                        class="badge bg-warning"><span
                                                            class="badge badge-warning btn-sm border-0"><i
                                                                class="bx bxs-bullseye"></i></span></a></td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <td colspan="6">Anda belum pesan</strong></td>
                                <?php endif; ?>

                            </tbody>
                    </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\LaravelReservasiHotel\resources\views/User/Pesanan/keranjang.blade.php ENDPATH**/ ?>