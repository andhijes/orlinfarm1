<?php $__env->startSection('content'); ?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="container">
  <form class="" action="<?php echo e(route('produk.historyUpdate', $penjualan)); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>



       <div class="form-group">
          <label for="">Nama Produk</label>
          <p class="form-control"> <?php echo e(\app\Produk::find($penjualan->id_produk)->nama); ?> </p>
       </div>



       <div class="form-group">
          <label for="">Stok</label>
          <input id="produk" type="number" class="form-control" name="stok" placeholder="Jumlah Produk" value="<?php echo e($penjualan -> jumlah); ?>">
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

<?php echo $__env->make('layouts.appEditProduk', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>