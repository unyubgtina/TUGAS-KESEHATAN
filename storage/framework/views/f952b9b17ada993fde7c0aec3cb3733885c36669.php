<?php $__env->startSection('container'); ?>

  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-info text-white me-2">
        <i class="mdi mdi-account-multiple"></i>
      </span> Registrasi Pasien
    </h3> 
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="clearfix">
            <h4 class="card-title float-left"><?php echo e($pasien->no_rm . ' - ' .  $pasien->nama); ?></h4>
          </div>
          
          <div class="row">
            <div class="col-md-2">
                <img src="/vendors/assets/images/faces/face1.jpg" alt="profile" class="img-fluid rounded">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                      Data Pasien <?php echo e($pasien->nama); ?>

                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><strong>Nama : </strong> <?php echo e($pasien->nama); ?></li>
                      <li class="list-group-item"><strong>No HP : </strong> <?php echo e($pasien->no_hp); ?></li>
                      <li class="list-group-item"><strong>No KTP : </strong> <?php echo e($pasien->no_ktp); ?></li>
                      <li class="list-group-item"><strong>Tanggal Lahir : </strong> <?php echo e($pasien->ttl); ?></li>
                      <li class="list-group-item"><strong>Jenis Kelamin : </strong> <?php echo e($pasien->jenis_kelamin); ?></li>
                      <li class="list-group-item"><strong>Agama : </strong> <?php echo e($pasien->agama); ?></li>
                      <li class="list-group-item"><strong>Status : </strong> <?php echo e($pasien->status); ?></li>
                      <li class="list-group-item"><strong>Alamat : </strong> <?php echo e($pasien->alamat); ?></li>
                      <li class="list-group-item"><strong>Pendidikan : </strong> <?php echo e($pasien->pendidikan); ?></li>
                      <li class="list-group-item"><strong>Pekerjaan : </strong> <?php echo e($pasien->pekerjaan); ?></li>
                      <li class="list-group-item"><strong>Penanggung Jawab : </strong> <?php echo e($pasien->pj); ?></li>
                      <li class="list-group-item"><strong>No Penanggung Jawab : </strong> <?php echo e($pasien->no_pj); ?></li>


                    </ul>

                    
                  </div>
                  
                  <a href="/dashboard/pendaftaran" class="btn btn-sm btn-success mt-2"> Kembali <i class="mdi mdi-exit-to-app"></i>  </a>
                  <a href="/dashboard/pendaftaran/<?php echo e($pasien->no_rm); ?>/edit" class="btn btn-sm btn-info mt-2"> Edit Data <i class="mdi mdi-pen"></i>  </a>

                

            </div>

            <div class="col-md">
                <div class="card">
                    <div class="card-header mb-3">
                      <strong>Pilih Layanan</strong> 
                    </div>
                    <?php if($registrasi): ?>
                    <div class="alert alert-danger text-center" role="alert">
                      Pasien Sudah Teregistrasi di <strong><?php echo e($registrasi->layanan->nama_layanan); ?></strong> 
                    </div>
                    <?php else: ?>
                    <form action="/dashboard/regpasien" method="post">
                      <?php echo csrf_field(); ?>
                        <input type="hidden" name="pasien_id" value="<?php echo e($pasien->id); ?>">
                        <input type="hidden" name="no_rm" value="<?php echo e($pasien->no_rm); ?>">
                        <div class="mb-3 row">
                            <label for="layanan" class="col-sm-3 col-form-label">Layanan</label>
                            <div class="col-sm-9">
                                <select class="form-select <?php $__errorArgs = ['layanan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="layanan_id" id="layanan">
                                    <option selected disabled>Pilih Layanan</option>
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

                        </div>

                        <div class="mb-3 row">
                            <label for="dokter" class="col-sm-3 col-form-label">Dokter</label>
                            <div class="col-sm-9">
                                <select class="form-select <?php $__errorArgs = ['dokter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dokter_id" id="dokter">
                                    <option selected disabled>Pilih Dokter</option>
                                    <?php $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <option value="<?php echo e($dr->id); ?>"><?php echo e($dr->nama_dokter); ?></option>                                      
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                              <?php $__errorArgs = ['dokter'];
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

                        <div class="mb-3 row">
                            <label for="tipe_pasien" class="col-sm-3 col-form-label">Tipe Pasien</label>
                            <div class="col-sm-9">
                                <select class="form-select <?php $__errorArgs = ['tipe'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tipe_pasien" id="tipe_pasien">
                                    <option selected disabled>Pilih Tipe Pasien</option>
                                    <option value="BPJS">BPJS</option>
                                    <option value="Umum">Umum</option>           
                                  </select>
                              <?php $__errorArgs = ['tipe'];
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

                        <div class="mb-3 row show-bpjs" style="display: none">
                          <label for="no_bpjs" class="col-sm-3 col-form-label">No BPJS : </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control <?php $__errorArgs = ['no_bpjs'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="no_bpjs" id="no_bpjs" placeholder="Masukan No BPJS" value="<?php echo e(old('no_bpjs')); ?>">
                          <?php $__errorArgs = ['no_bpjs'];
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

                        <button type="submit" class="btn btn-sm btn-info mt-2"> Registrasi <i class="mdi mdi-book"></i>  </button>
                        <a href="/dashboard/pendaftaran" class="btn btn-sm btn-danger mt-2"> Kembali <i class="mdi mdi-exit-to-app"></i>  </a>

                    </form>
                    <?php endif; ?>
                </div>



            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <script>

    const tipePasien = document.getElementById('tipe_pasien')
    const inputBpjs = document.querySelector('.show-bpjs')

    // console.log(tipePasien.value  == 'BPJS')


    // console.log(tipePasien.value);
    tipePasien.addEventListener('change', function(e){
      // if(e.value == 'BPJS'){
      if(e.target.value == 'BPJS'){
        inputBpjs.style.display=''
      } else if(e.target.value=='Umum'){
        inputBpjs.style.display= 'none'
      }
    })


  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APLIKASI PROJECT\Aplikasi-Antrian-Klinik\resources\views/dashboard/pendaftaran/show.blade.php ENDPATH**/ ?>