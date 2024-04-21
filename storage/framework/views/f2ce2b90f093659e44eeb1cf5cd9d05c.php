<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4 mt-3">
                    <h5 class="card-header">Default</h5>
                    <div class="card-body">
                        <form action="/pemesanan/<?php echo e($kamar->id); ?>" method="Post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id_pesanan" value="<?php echo e($data->id); ?>">
                            <div class="mb-3">
                                <label for="kamar" class="form-label">Nama Kamar</label>
                                <input type="text" class="form-control" name="kamar" value="<?php echo e($data->kamar); ?>"
                                    id="kamar" aria-describedby="defaultFormControlHelp" required autofocus disabled />
                            </div>
                            <div class="mb-3">
                                <label for="html5-date-input" class="form-label">Tanggal ChekcIn</label>
                                <input name="tanggal_pesan" class="form-control" type="date" value="2021-06-18"
                                    id="html5-date-input" />
                            </div>
                            <div class="mb-3">
                                <label for="defaultFormControlInput" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="defaultFormControlInput" name="harga"
                                    value="Rp. <?php echo e($data->harga); ?>" aria-describedby="defaultFormControlHelp" required
                                    autofocus disabled />
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_kamar" class="form-label">Jumlah Kamar</label>
                                <input class="form-control" type="number" value="0" id="jumlah_kamar"
                                    name="jumlah_kamar" />
                            </div>
                            <input type="hidden" name="cek_pesanan" value="0">

                            <div class="mt-3">
                                <button class="btn btn-primary text-end" type="submit">Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\LaravelReservasiHotel\resources\views/User/Pesanan/IsiData.blade.php ENDPATH**/ ?>