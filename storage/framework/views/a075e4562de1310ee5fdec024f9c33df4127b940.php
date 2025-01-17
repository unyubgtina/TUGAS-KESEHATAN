<?php $__env->startSection('container'); ?>

    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white me-2">
          <i class="mdi mdi-ticket"></i>
        </span> Data Loket
      </h3> 
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            
            <div class="card-body">
              <div class="clearfix">
                <h4 class="card-title float-left">Daftar Data Loket</h4>
                
              </div>
              
            <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show col-md-10" role="alert">
              <strong><?php echo e(session('success')); ?></strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
    
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Loket</th>
                      <th>Kode</th>
                      <th>Deskripsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $loket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $L): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($L->nama_loket); ?></td>
                        <td><?php echo e($L->kode); ?></td>
                        <td><?php echo e($L->deskripsi); ?></td>
                        
                        
    
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
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APLIKASI PROJECT\Aplikasi-Antrian-Klinik\resources\views/dashboard/loket/index.blade.php ENDPATH**/ ?>