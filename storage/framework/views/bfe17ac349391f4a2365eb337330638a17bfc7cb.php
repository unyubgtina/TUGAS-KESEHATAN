<?php $__env->startSection('container'); ?>

    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white me-2">
          <i class="mdi mdi-ticket"></i>
        </span> Data Antrian Pasien
      </h3> 
    </div>
  

    <div class="row">
        

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card"> 
                
              <div class="card-body">

                    <div class="col-lg-8 mb-2">
                        <form action="/dashboard/get-plasma" method="POST" class="input-group">
                          <?php echo csrf_field(); ?>
                            <div class="col-md-6">
                                <select class="form-select loket mb-3" name="layanan_id">
                                    <option selected disabled>Pilih Antrian POLI</option>
                                    <?php $__currentLoopData = $poli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                                    <option value="<?php echo e($l->id); ?>"><?php echo e($l->nama_layanan); ?></option>
                               
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-sm btn-info mx-2">Lihat Plasma</button>
                
                            </div>
                        </form>
                    </div>
                
                
              </div>
            </div>
        </div>

    </div>


    <script>
       

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APLIKASI PROJECT\Aplikasi-Antrian-Klinik\resources\views/dashboard/antrian/plasma_antrian.blade.php ENDPATH**/ ?>