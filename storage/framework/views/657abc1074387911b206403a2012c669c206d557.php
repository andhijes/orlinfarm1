<?php $__env->startSection('content'); ?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="container">
  <form class="" action="<?php echo e(route('produk.sell_store')); ?>" method="post">
    <?php echo e(csrf_field()); ?>


    <div class="form-group">
        <label for="">Tanggal</label>
          <input id="tanggal" type="date" class="form-control" name="tanggal" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="">Nama Produk</label>
        <select class="form-control" name="id_produk">
          <?php $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($produk->id_produk); ?>"><?php echo e($produk->nama); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

     <div class="form-group">
        <label for="">Jumlah Produk </label>
        <input id="jumlah" type="number" class="form-control" name="jumlah" placeholder="Jumlah Produk yang Terjual" value="">
     </div>

     <div class="form-group">
       <input type="submit" name="" class="btn btn-primary" value="Save">
     </div>
  </form>
</div>
</div><?php $__env->stopSection(); ?>

<?php $__env->startSection('name'); ?>
  <?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>