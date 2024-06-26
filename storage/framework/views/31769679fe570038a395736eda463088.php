<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-center  align-items-center">
                  <h5 class="mb-0 fw-bold fs-1">Edit Data Pengguna</h5>
                </div>
                <div class="card-body">
                  <form action="/users/<?php echo e($users->name); ?>" method="Post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('Put'); ?>
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          name="name"
                          aria-describedby="defaultFormControlHelp"
                          value="<?php echo e(old('name', $users->name)); ?>"
                          autofocus required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input
                          type="email"
                          class="form-control"
                          id="email"
                        name="email"
                        value="<?php echo e(old('email', $users->email)); ?>"
                        required autofocus
                        />
                      </div>
                      <div class="mb-3">
                        <label for="html5-tel-input" class="col-form-label">Phone</label>
                          <input class="form-control" type="tel" value="62-<?php echo e(old('nohp', $users->nohp)); ?>" id="nohp" name="nohp" required autofocus />
                      </div>
                      <div class="form-password-toggle">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group">
                          <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            value="<?php echo e(old('password', $users->password)); ?>"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                          />
                          <span id="basic-default-password2" class="input-group-text cursor-pointer"
                            ><i class="bx bx-hide"></i
                          ></span>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="status" class="col-form-label">Status</label> 
                          <input class="form-control" type="number" value="0" name="status" id="status" required autofocus value="<?php echo e(old('status', $users->status)); ?>" />
                       
                      </div>
                    <button type="submit" class="btn btn-primary mt-3">Edit</button>
                  </form>
                </div>
              </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\LaravelReservasiHotel\resources\views/DataPengguna/edit.blade.php ENDPATH**/ ?>