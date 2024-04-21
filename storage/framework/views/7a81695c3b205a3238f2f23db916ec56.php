<?php $__env->startSection('content'); ?>
 <div class="container">
    <div class="card mt-3">
        <div class="row py-3 ms-3 justify-content-between">
          <div class="col-lg-6 text-dark text-capitalize fs-4">
           Data Pengguna
          </div>
          <div class="col-lg-4">
            <form action="/users">
              <div class="input-group input-group-merge mb-3">
                <button type="submit" class="border-0"><i class="bx bx-search"></i></button>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search..."
                  aria-label="Search..."
                  name="search"
                  aria-describedby="basic-addon-search31"
                />
            </div>
            </form>
  
        </div>
  
        </div>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th class="text-white">No</th>
                <th class="text-white">Nama</th>
                <th class="text-white">Email</th>
                <th class="text-white">NoHp</th>
                <th class="text-white">Status</th>
                <th class="text-white">Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo e($p->name); ?></strong></td>
                <td><?php echo e($p->email); ?></td>
                <td>
                    <?php echo e($p->nohp); ?>

                </td>
          <?php if($p->status  == 0): ?>
              <td><span class="badge bg-label-primary me-1">User</span></td>
              <?php else: ?> 
              <td><span class="badge bg-label-primary me-1">Admin</span></td>
              <?php endif; ?>
           
              
           <td>
            <div class=" d-flex">
              <a href="/users/<?php echo e($p->name); ?>/edit" class="btn btn-success me-2" id="edit" onclick="return confirm('yakin ingin Mengubah data?')"><i class="bx bx-edit"></i></a>
              <form action="/users/<?php echo e($p->name); ?>" method="Post" >
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                <button class="btn btn-danger me-2 border-0"  type="submit" onclick="return confirm('Yakin Ingin Menghapus?')"><i class="bx bx-trash"></i></button>
              </form>
            </div>
           </td>
             
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
      </table>
      </div>
      </div>
 </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\LaravelReservasiHotel\resources\views/DataPengguna/index.blade.php ENDPATH**/ ?>