<?php $__env->startSection('content'); ?>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><b>Bayar HUtang ke "<?php echo $nama; ?>" </b></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="#" method="post">
        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="">Tanggal</label>
              <input id="tanggal" type="date" class="form-control" name="tanggal" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="">Diambil Dari</label>
            <select class="form-control" name="kredit">
              <option value="-1">Silahkan Pilih Akun</option>
              <?php $__currentLoopData = $akun_asets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $akun_aset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($akun_aset->id_cabang); ?>"><?php echo e($akun_aset->kode); ?> - <?php echo e($akun_aset->nama); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <label for="">Untuk Pembayaran</label>
            <select class="form-control" name="kredit">
              <option value="-1">Silahkan Pilih Akun</option>
              <?php $__currentLoopData = $akun_hutangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $akun_hutang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($akun_hutang->id_cabang); ?>"><?php echo e($akun_hutang->kode); ?> - <?php echo e($akun_hutang->nama); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

         <div class="form-group">
            <label for="">Nilai</label>
            <input id="harga"type="number" class="form-control" name="harga" placeholder="" value="<?php echo e($transaksi_hutangs->nilai); ?>">
         </div>

         <div class="form-group">
            <label for="">Referensi</label>
            <input id="harga"type="text" class="form-control" name="referensi" placeholder="" value="">
         </div>

         <div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
            <label for="">Keterangan</label>
            <input id="nama" type="text" class="form-control" name="keterangan" placeholder="Pembayaran Hutang" value="">
          </div>

         <div class="form-group">
           <input type="submit" name="" class="btn btn-primary" value="Save">
         </div>
      </form>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('name'); ?>
  <?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appEdit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>