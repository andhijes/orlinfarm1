<?php $__env->startSection('content'); ?>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>TAMBAH ASET<small>Orlinfarm</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="<?php echo e(route('aset.update', $akun_cabang)); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PATCH')); ?>


        <div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
           <label for="">Kode</label>
           <input id="nama" type="text" class="form-control" name="kode" placeholder="Kode Aset.." value="<?php echo e($akun_cabang->kode); ?>">
         </div>

         <div class="form-group">
            <label for="">Nama</label>
            <input id="harga"type="string" class="form-control" name="nama" placeholder="Nama Aset.." value="<?php echo e($akun_cabang->nama); ?>">
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