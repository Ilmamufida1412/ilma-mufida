

<?php $__env->startSection('content'); ?>
<h4>Form Edit</h4>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='<?php echo e(url('students')); ?>'">
                kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="<?php echo e(url('students/'.$txtid)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row mb-3">
                <label for="txtid" class="col-sm-2 col-form-label">Id Students</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control-plaintext form-control-sm " id="txtid" name="txtid" value="<?php echo e($txtid); ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtfullname" class="col-sm-2 col-form-label col-form-label-sm">Full Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm <?php $__errorArgs = ['txtfullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="txtfullname" name="txtfullname" value="<?php echo e($txtfullname); ?>">
                  <?php $__errorArgs = ['txtfullname'];
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
              </div>
              <div class="row mb-3">
                <label for="txtgender" class="col-sm-2 col-form-label col-form-label-sm <?php $__errorArgs = ['txtgender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">Gender</label>
                <div class="col-sm-4">
                    <select class="form-select form-select-sm" name="txtgender" id="txtgender">
                        <option value="" selected>-pilih-</option>
                        <option value="M" <?php echo e(($txtgender=='M') ? 'selected' : ''); ?>>Male</option>
                        <option value="F" <?php echo e(($txtgender=='F') ? 'selected' : ''); ?>>Female</option>
                    </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtage" class="col-sm-2 col-form-label col-form-label-sm ">Age</label>
                <div class="col-sm-3">
                    <input type="text" name="txtage" id="txtage" class="form-control form-control-sm <?php $__errorArgs = ['txtage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($txtage); ?>">
                    <?php $__errorArgs = ['txtage'];
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
              </div>
              <div class="row mb-3">
                <label for="txtaddress" class="col-sm-2 col-form-label col-form-label-sm">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control  <?php $__errorArgs = ['txtaddress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="txtaddress" id="txtaddress" cols="15" rows="5"><?php echo e($txtaddress); ?></textarea>
                    <?php $__errorArgs = ['txtaddress'];
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
              </div>
              <div class="row mb-3">
                <label for="txtemail" class="col-sm-2 col-form-label col-form-label-sm ">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="txtemail" id="txtemail" class="form-control form-control-sm <?php $__errorArgs = ['txtemail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($txtemail); ?>">
                    <?php $__errorArgs = ['txtemail'];
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
              </div>
              <div class="row mb-3">
                <label for="txtphone" class="col-sm-2 col-form-label col-form-label-sm ">Phone Number</label>
                <div class="col-sm-6">
                    <input type="text" name="txtphone" id="txtphone" class="form-control form-control-sm <?php $__errorArgs = ['txtphone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($txtphone); ?>">
                    <?php $__errorArgs = ['txtphone'];
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
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label col-form-label-sm"></label>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-sm btn-success">
                        Update
                    </button>
                </div>
              </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app-laravel10\resources\views/students/formedit.blade.php ENDPATH**/ ?>