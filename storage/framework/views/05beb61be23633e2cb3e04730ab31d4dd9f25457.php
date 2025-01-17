<?php $__env->startSection('container'); ?>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white me-2">
        <i class="mdi mdi-account-multiple"></i>
      </span> Data Dokter
    </h3> 
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        
        <div class="card-body">
          <div class="clearfix">
            <h4 class="card-title float-left">Daftar Data Dokter</h4>
            <a href="/dashboard/dokter/create" class="btn btn-sm btn-info mb-2"> <i class="mdi mdi-table-row-plus-before"></i> Tambah Data dokter</a>
          </div>
          
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show col-md-10" role="alert">
          <strong><?php echo e(session('success')); ?></strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

          <div class="table-responsive col-md">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th width='50'>No</th>
                  <th width='50'>Nama Dokter</th>
                  <th>Nama Spesialis</th>
                  <th>Alamat</th>
                  <th width='50'>Action</th>
                </tr>
              </thead>
              
              <tbody>
                <?php $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($l->nama_dokter); ?></td>
                    <td><?php echo e($l->spesialis); ?></td>
                    <td><?php echo e($l->alamat); ?></td>

                   
                    <td>
                      <a href="/dashboard/dokter/<?php echo e($l->id); ?>" class="badge bg-info"><i class="mdi mdi-eye"></i></a>

                      <a href="/dashboard/dokter/<?php echo e($l->id); ?>/edit" class="badge bg-success"><i class="mdi mdi-table-edit"></i></a>
                      <form action="/dashboard/dokter/<?php echo e($l->id); ?>" method="post" class="d-inline">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Apakah yakin akan dihapus?')"><i class="mdi mdi-table-row-remove"></i></button>
                      </form>
                    </td>

                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APLIKASI PROJECT\Aplikasi-Antrian-Klinik\resources\views/dashboard/dokter/index.blade.php ENDPATH**/ ?>