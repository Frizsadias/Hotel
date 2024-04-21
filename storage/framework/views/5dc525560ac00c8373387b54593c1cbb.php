<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <div class="card border-0 p-3">
                    <div class="card-body">

                        <h3 class="mb-4"><?php echo e($title); ?></h3>

                        
                        <?php if(session()->has('success')): ?>
                            <small>
                                <div class="alert alert-primary alert-dismissible" role="alert">
                                    <?php echo e(session('success')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </small>
                        <?php endif; ?>
                        

                        
                        <div class="table-responsive">
                            <small>
                                <table class="table table-sm mb-5 table-bordered">
                                    <thead class="bg-secondary text-white">
                                        <tr>
                                            <th>No</th>
                                            <th>Image</th>
                                            <th>Kamar</th>
                                            <th>Harga</th>
                                            <th>Jumlah Kamar</th>
                                            <th>Total Harga</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($pDetails)): ?>
                                            <?php if($pDetails->count() > 0): ?>
                                                <?php $__currentLoopData = $pDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($loop->iteration); ?></td>
                                                        
                                                        <td><a href="<?php echo e(asset('storage/' . $detail->Kamar->image)); ?>"
                                                                target="_blank"><img
                                                                    src="<?php echo e(asset('storage/' . $detail->Kamar->image)); ?>"
                                                                    alt="" width="40"
                                                                    title="<?php echo e($detail->Kamar->image); ?>"></a></td>
                                                        <td><?php echo e($detail->kamar->kamar); ?></td>
                                                        <td>RP. <?php echo e(number_format($detail->kamar->harga)); ?></td>

                                                        <td><?php echo e($detail->jumlah); ?></td>
                                                        <td>Rp. <?php echo e(number_format($detail->harga)); ?></td>
                                                        <td>
                                                            <?php
                                                            $buktiTf = App\Models\BuktiPembayaranUser::where('pesanan_detail_id', $detail->id)->first();
                                                            ?>
                                                            <?php if(!empty($buktiTf)): ?>
                                                                <a href="/cetak-pdf/<?php echo e($detail->id); ?>"
                                                                    class="btn btn-info btn-sm text-end">Cetak</a>
                                                            <?php endif; ?>
                                                            <a
                                                                href="/detail-pesanan-user/<?php echo e($detail->id); ?>"class="btn btn-sm btn-warning">Detail</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td class="text-danger" colspan="8">Anda belum memiliki history
                                                        pemesanan tiket</td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td class="text-danger" colspan="8">Anda belum memiliki history pemesanan
                                                    tiket</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </small>
                        </div>
                        

                    </div>
                    <div class="col-lg-4 offset-lg-4 ">
                        <?php if(empty($buktiTf)): ?>
                            <marquee behavior="" direction=""><small>
                                    <p class="text-end text-success" style="font-style: italic"><strong>Silahkan upload
                                            bukti
                                            pembayaran agar bisa mencetak tiket!</strong></p>
                                </small></marquee>
                        <?php else: ?>
                            <small>
                                <p class="text-end text-success text-center" style="font-style: italic; font-size: 20px">
                                    <strong>Silahkan Cetak Tiket
                                    </strong>
                                </p>
                            </small>

                    </div>
                    <?php endif; ?>
                </div>
                
            </div>
        </div>

    </div>

    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\LaravelReservasiHotel\resources\views/User/Pesanan/History.blade.php ENDPATH**/ ?>