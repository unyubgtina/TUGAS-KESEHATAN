<?php $__env->startSection('container'); ?>

    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-info text-white me-2">
          <i class="mdi mdi-ticket"></i>
        </span>Edit Data Pasien
      </h3> 
    </div>


    <div class="row">
      <div class="col-md">
        <div class="card">
          <div class="card-body">
            
            <form action="/dashboard/pendaftaran/<?php echo e($pasien[0]['id']); ?>" method="post">
              <?php echo method_field('put'); ?>
              <?php echo csrf_field(); ?>
              <div class="mb-3 col-md-6">
                  <label for="nama" class="form-label">Nama Lengkap : </label>
                  <input type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama" id="nama" placeholder="Masukan Nama Lengkap" value="<?php echo e(old('nama', $pasien[0]['nama'])); ?>" autofocus>
              <?php $__errorArgs = ['nama'];
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
  
              <div class="mb-3 col-md-4">
                  <label for="ttl" class="form-label">Tanggal Lahir : </label>
                  <input type="date" class="form-control  <?php $__errorArgs = ['ttl'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="ttl" id="ttl" value="<?php echo e(old('ttl', $pasien[0]['ttl'])); ?>">
              <?php $__errorArgs = ['ttl'];
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
  
              <div class="mb-3 col-md-4">
                  <label for="jk" class="form-label">Jenis Kelamin : </label>
                  <select class="form-select <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jenis_kelamin" id="jk">
                    <option selected disabled>Pilih Jenis Kelamin</option>
                    <?php $jk = ['Laki-laki', 'Perempuan'] ?>

                    <?php $__currentLoopData = $jk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($j); ?>" <?php echo e($j == $pasien[0]['jenis_kelamin'] ? 'selected' : ''); ?>><?php echo e($j); ?></option>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                  </select>
              <?php $__errorArgs = ['jenis_kelamin'];
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
                <label for="no_ktp" class="form-label">No KTP : </label>
                <input type="text" class="form-control <?php $__errorArgs = ['no_ktp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="no_ktp" id="no_ktp" placeholder="Masukan No KTP" value="<?php echo e(old('no_ktp', $pasien[0]['no_ktp'])); ?>">
                <?php $__errorArgs = ['no_ktp'];
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
                <label for="no_hp" class="form-label">No Handphone : </label>
                <input type="text" class="form-control <?php $__errorArgs = ['no_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="no_hp" id="no_hp" placeholder="Masukan NO Handphone" value="<?php echo e(old('no_hp', $pasien[0]['no_hp'])); ?>">
                <?php $__errorArgs = ['no_hp'];
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
                  <label for="pj" class="form-label">Penganggung Jawab : </label>
                  <input type="text" class="form-control <?php $__errorArgs = ['pj'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="pj" id="pj" placeholder="Masukan Nama Penanggung Jawab" value="<?php echo e(old('pj', $pasien[0]['pj'])); ?>">
                  <?php $__errorArgs = ['pj'];
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
                  <label for="no_pj" class="form-label">Nomor HP Penganggung Jawab : </label>
                  <input type="text" class="form-control <?php $__errorArgs = ['no_pj'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="no_pj" id="no_pj" placeholder="Masukan Nama Penanggung Jawab" value="<?php echo e(old('no_pj', $pasien[0]['no_pj'])); ?>">
                  <?php $__errorArgs = ['no_pj'];
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

              <div class="mb-3 col-md-4">
                <label for="status" class="form-label">Status : </label>
                <select class="form-select <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="status" id="status">
                  <option selected>Pilih Status</option>
                  <?php $status = ['Single', 'Berumah Tangga', 'Pelajar'] ?>
                  <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($j); ?>" <?php echo e($j == $pasien[0]['status'] ? 'selected' : ''); ?>><?php echo e($j); ?></option>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
                <?php $__errorArgs = ['status'];
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
  
              <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control  <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Alamat" name="alamat" id="alamat" style="height: 100px"> <?php echo e(old('alamat', $pasien[0]['alamat'])); ?> </textarea>
                    <label for="floatingTextarea2">Alamat</label>
                  </div>
              <?php $__errorArgs = ['alamat'];
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

              <div class="mb-3 col-md-4">
                <label for="pendidikan" class="form-label">Pendidikan : </label>
                <select class="form-select <?php $__errorArgs = ['pendidikan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="pendidikan" id="pendidikan">
                  <option disabled selected>Pilih pendidikan</option>
                  <?php $pendidikan = ['SMA', 'S1', 'S2', 'S3', 'Lainnya'] ?>
                  <?php $__currentLoopData = $pendidikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($j); ?>" <?php echo e($j == $pasien[0]['pendidikan'] ? 'selected' : ''); ?>><?php echo e($j); ?></option>       
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
                <?php $__errorArgs = ['pendidikan'];
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
                <label for="pekerjaan" class="form-label">Pekerjaan : </label>
                <input type="text" class="form-control <?php $__errorArgs = ['pekerjaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="pekerjaan" id="pekerjaan" placeholder="Masukan pekerjaan Lengkap" value="<?php echo e(old('pekerjaan', $pasien[0]['pekerjaan'])); ?>">
                <?php $__errorArgs = ['pekerjaan'];
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

                <div class="mb-3 col-md-4">
                  <label for="agama" class="form-label">Agama : </label>
                  <select class="form-select <?php $__errorArgs = ['agama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="agama" id="agama">
                    <option disabled selected>Pilih agama</option>
                   <?php $agama = ['ISLAM', 'KRISTEN', 'HINDU', 'BUDHA', 'LAINNYA']; ?>
                    <?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($j); ?>" <?php echo e($j == $pasien[0]['agama'] ? 'selected' : ''); ?>><?php echo e($j); ?></option>    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                  </select>
                  <?php $__errorArgs = ['agama'];
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

               
  
              <button type="submit" class="btn btn-gradient-info btn-sm mt-2">Edit Data</button>
                
            </form>
            
          </div>
        </div>
      </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\APLIKASI PROJECT\Aplikasi-Antrian-Klinik\resources\views/dashboard/pendaftaran/edit.blade.php ENDPATH**/ ?>