<?php $__env->startSection('container'); ?>


  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white me-2">
        <i class="mdi mdi-account-multiple"></i>
      </span> Laporan Kunjungan
    </h3> 
  </div>
  <div class="row">
    
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          
          <div class="card-body">
            <div class="clearfix">
              <h4 class="card-title float-left">Laporan data antrian per poliklinik</h4>
            </div>



            
              <form action="/dashboard/laporan/cetak" method="post">
                <?php echo csrf_field(); ?>
           
                <div class="mb-3 col-md-6">
                    <label for="bulan" class="form-label">Pilih Bulan : </label>
                    <select class="form-select <?php $__errorArgs = ['bulan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="bulan" id="bulan">
                      <option selected disabled>Pilih bulan : </option>             
                      <?php $__currentLoopData = $bulan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bln): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e(($key+1 >= 10 ? '' : '0') . $key+1); ?>" <?php echo e($key+1 == date('m') ? 'selected' : ''); ?> ><?php echo e($bln); ?></option>             
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </select>
                <?php $__errorArgs = ['bulan'];
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

                <div class="mb-3 col-md-6">
                  <label for="layanan" class="form-label">Pilih Layanan : </label>
                  <select class="form-select <?php $__errorArgs = ['layanan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="layanan" id="layanan">
                    <option selected disabled>Pilih Layanan : </option>             
                    <?php $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option value="<?php echo e($l->id); ?>"><?php echo e($l->nama_layanan); ?></option>             
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                  </select>
              <?php $__errorArgs = ['layanan'];
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

                <button type="submit" class="btn btn-info btn-cari-laporan">Cetak Laporan</button>
         
              </form>
            
          </div>
        </div>
      </div>
    
  </div>

 
<?php $__env->stopSection(); ?>



<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APLIKASI PROJECT\Aplikasi-Antrian-Klinik\resources\views/dashboard/laporan/index.blade.php ENDPATH**/ ?>