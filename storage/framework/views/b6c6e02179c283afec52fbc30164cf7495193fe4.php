<?php $__env->startSection('content'); ?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="container">
  <form class="" action="<?php echo e(route('pemasukanTunai.store')); ?>" method="post">
    <?php echo e(csrf_field()); ?>


    <div class="form-group">
        <label for="">Tanggal</label>
          <input id="tanggal" type="date" class="form-control" name="tanggal" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="">Diterima Dari</label>
        <select class="form-control" name="kredit">
          <option value="-1">Silahkan Pilih Akun</option>
          <?php $__currentLoopData = $akun_pemasukans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pemasukan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($pemasukan->id_cabang); ?>"><?php echo e($pemasukan->kode); ?> - <?php echo e($pemasukan->nama); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Disimpan Ke</label>
        <select class="form-control" name="debit">
          <option value="-1">Silahkan Pilih Akun</option>
          <?php $__currentLoopData = $akun_asets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($aset->id_cabang); ?>"><?php echo e($aset->kode); ?> - <?php echo e($aset->nama); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Nilai</label>
          <input id="tanggal" type="number" class="form-control" name="nilai" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="">Referensi</label>
          <input id="tanggal" type="string" class="form-control" name="referensi" placeholder="" value="">
    </div>


    <div class="form-group">
        <label for="">Keterangan</label>
          <input id="tanggal" type="string" class="form-control" name="keterangan" placeholder="" value="Pendapatan usaha">
    </div>

     <div class="form-group">
       <input type="submit" name="" class="btn btn-primary" value="Save">
     </div>
  </form>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('name'); ?>
  <?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>