<?php $__env->startSection('content'); ?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="container">
  <form class="" action="<?php echo e(route('produk.historyUpdate', $penjualan)); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>


       <div class="form-group">
           <label for="">Nama Produk</label>
           <select class="form-control" name="id_produk">
             <?php $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option <?php echo e($penjualan->id_produk == $produk->id_produk ? 'selected' : ''); ?> value="<?php echo e($produk->id_produk); ?>"><?php echo e($produk->nama); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </select>
       </div>

       <div class="form-group">
          <label for="">Stok</label>
          <input id="produk" type="number" class="form-control" name="jumlah" placeholder="Jumlah Produk" value="<?php echo e($penjualan -> jumlah); ?>">
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