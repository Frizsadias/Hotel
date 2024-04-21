<?php $__env->startSection('content'); ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6">
                <h3>Halaman Detail Pesanan</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo e(asset('storage/' . $PDetail->Kamar->image)); ?>" alt="Card image cap"
                        height="300" />
                    <div class="card-body">
                        <div class="card">
                            <h5 class="card-header"><?php echo e($PDetail->Kamar->kamar); ?></h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>Harga Satuan</td>
                                            <td>:</td>
                                            <td>Rp.<?php echo e(number_format($PDetail->Kamar->harga)); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Kamar</td>
                                            <td>:</td>
                                            <td><?php echo e(number_format($PDetail->jumlah)); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Total Harga</td>
                                            <td>:</td>
                                            <td>Rp.<?php echo e(number_format($PDetail->harga)); ?></td>
                                        </tr>
                                </table>
                                </tbody>

                                
                                <?php if(session()->has('success')): ?>
                                    <div class="row mt-3">
                                        <div class="col-lg-8">
                                            <small>
                                                <div class="alert alert-primary alert-dismissible" role="alert">
                                                    <?php echo e(session('success')); ?>

                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            </small>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                

                                <?php if($PDetail->status == 0): ?>
                                    <small><strong>
                                            <p class="mx-3" style="font-style: italic; ">Silahkan Melakukan Chekout
                                                Terlebih dahulu sebelum melakukan upoad pembayaran</p>
                                        </strong></small>
                                <?php else: ?>
                                    <small class="mt-3"><strong>
                                            <p style="font-style: italic; margin-top: 5px; margin-left:20px">Silahkan Uploud
                                                Bukti Pembayaran
                                                Anda</p>
                                        </strong></small>
                                <?php endif; ?>
                            </div>
                            <?php if($PDetail->status == 0): ?>
                                <a href="/checkout/<?php echo e($PDetail->id); ?>" class="btn btn-warning btn-sm col-lg-2 mx-3 mb-3"
                                    onclick="return confirm('Yakin Ingin Melakukan Chekcout ??')"><i
                                        class="bx bx-cart">CheckOut</i></a>
                            <?php elseif($PDetail->status == 1): ?>
                                
                                <?php if(empty($buktiTf)): ?>
                                    <form action="/Bukti-Pembayaran-User" method="Post" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>

                                        <div class="row ms-4">
                                            <div class="col-lg-8">
                                                <img class="col-lg-2 img-preview img-fluid mb-2" alt="">
                                                <input type="hidden" name="pesanan_detail_id" value="<?php echo e($PDetail->id); ?>">
                                                <input type="file" name="image" class="form-control mb-2 col-lg-4"
                                                    onchange="PreviewImage()" id="image" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <button type="submit"
                                                    class="btn btn-primary btn-sm ms-3 my-3 border-rounded-top">Silahkan
                                                    Kirim
                                                    Bukti Pembayaran</button>
                                            </div>
                                        </div>

                                    </form>
                                <?php else: ?>
                                    <p>dsds</p>
                                <?php endif; ?>
                            <?php else: ?>
                                <p>sdds</p>
                                
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\LaravelReservasiHotel\resources\views/User/Pesanan/detail_pesanan_user.blade.php ENDPATH**/ ?>