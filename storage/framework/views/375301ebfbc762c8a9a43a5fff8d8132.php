

<?php $__env->startSection('content'); ?>
<h4>Data Santri</h4>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='<?php echo e(url('students/add')); ?>'">
                <i class="fas fa-plus-circle"></i>Tambah Santri Baru
            </button>
        </div>
        <div class="card-body">
            <?php if(session('msg')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil</strong> <?php echo e(session('msg')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
            <form method="GET" action="">
                <div class="row mb-3">
                    <label for="search" class="col-sm-2 col-form-label col-form-label-sm ">Email</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" name="search" value="<?php echo e($search); ?>" placeholder="please input key for serach data" autofocus>
                    </div>
                  </div>
            </form>
            <table class="table table-sm table-strip table-bordered" >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Induk</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>NO. Telp</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $nomor = 1 +  (($students->currentPage() - 1) * $students -> perPage());
                    ?>
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        
                        <td><?php echo e($nomor++); ?></td>
                        <td><?php echo e($row->idstudents); ?></td>
                        <td><?php echo e($row->fullname); ?></td>
                        <td><?php echo e(($row->genre=='M') ? 'Male' : 'Female'); ?></td>
                        <td><?php echo e($row->age); ?></td>
                        <td><?php echo e($row->address); ?></td>
                        <td><?php echo e($row->email); ?></td>
                        <td><?php echo e($row->phone); ?></td>
                        <td>
                            <button onclick="window.location='<?php echo e(url('students/'.$row->idstudents)); ?>'" type="button" class="btn btn-sm btn-info" title="Edit Data">
                                <i class="fas fa-edit"></i>
                            </button>
                            <form onsubmit="return deleteData('<?php echo e($row->name); ?>')" method="POST" style="display: inline" action="<?php echo e(url('students/'.$row->idstudents)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" title="Hapus Data" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            
            <?php echo $students->appends(Request::except('page'))->render(); ?>

            </div>
        </div>
    <script>
        function deleteData(name) {
            pesan =confirm('yakin data santri dengan nama ${name} ini akan dihapus?');
            if (pesan) return true;
            else return false;
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app-laravel10\resources\views/students/data.blade.php ENDPATH**/ ?>