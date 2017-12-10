<?php $__env->startSection('content'); ?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="container">

  <form class="" action="<?php echo e(route('produk.store')); ?>" method="post">
    <?php echo e(csrf_field()); ?>


    <div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
       <label for="">Nama Produk</label>
       <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama Produk.." value="">
       <?php if($errors->has('nama')): ?>
           <span class="help-block">
               <strong><?php echo e($errors->first('nama')); ?></strong>
           </span>
       <?php endif; ?>
     </div>

     <div class="form-group">
        <label for="">Harga (IDR) </label>
        <input id="harga"type="number" class="form-control" name="harga" placeholder="Harga Produk" value="">
     </div>

     <div class="form-group">
        <label for="">Stok</label>
        <input id="produk" type="number" class="form-control" name="stok" placeholder="Jumlah Produk" value="">
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