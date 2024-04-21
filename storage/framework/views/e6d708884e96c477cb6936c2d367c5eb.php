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
    <div class="row d-flex justify-content-between">

        <div class="col-md-2 col-sm-6">
            <a href="<?php echo e(route('kamars.create')); ?>" class="btn rounded-pill btn-primary mb-3 me-2">Tambah Data</a>
        </div>

        <div class="col-md-4 col-sm-6">
            <form action="/kamars" class="mb-0">
                <div class="input-group input-group-merge mb-3">
                    <button type="submit" class="border-0"><i class="bx bx-search"></i></button>
                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search..."
                    name="cari_kamar" value="<?php echo e(request('cari_kamar')); ?>" aria-describedby="basic-addon-search31" />
                </div>
            </form>

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
                        Rp <?php echo e(number_format($kamar->harga)); ?>/<span>Malam</span>
                    </p>
                    <div class="mb-3 d-flex">
                        <a href="/kamars/<?php echo e($kamar->kamar); ?>/edit" class="btn btn-success me-2" id="edit">
                            <i class="bx bx-edit"></i></a>
                            <form action="/kamars/<?php echo e($kamar->kamar); ?>" method="Post">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger me-2 border-0" id="hapus" onclick="alert()"><i
                                    class="bx bx-trash"></i></button>
                                    
                                </form>
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
        <script>
            function alert() {

                Swal.fire({
                    title: 'Are you sure?',
                    text: "Apakah Anda Ingin Mengapus",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            )
                    }
                })
            }
        </script>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\LaravelReservasiHotel\resources\views/Admin/DataKamar/index.blade.php ENDPATH**/ ?>