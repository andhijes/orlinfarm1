<?php $__env->startSection('content'); ?>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><b>Input Penjualan Harian</b></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <form class="" action="<?php echo e(route('produk.sell_store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>


        <div class="form-group has-feedback<?php echo e($errors->has('tanggal') ? ' has-error': ''); ?>">
            <label for="">Tanggal</label>
              <input id="tanggal" type="date" class="form-control" name="tanggal" placeholder="" value="<?php echo e(old('tanggal')); ?>" required>
              <?php if($errors->has('tanggal')): ?>
                <span class="help-block">
                  <p><?php echo e($errors->first('tanggal')); ?></p>
                </span>
              <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="">Nama Produk</label>
            <select class="form-control" name="id_produk">
              <?php $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($produk->id_produk); ?>"><?php echo e($produk->nama); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

           <div class="form-group has-feedback<?php echo e($errors->has('jumlah') ? ' has-error': ''); ?>">
            <label for="">Jumlah Produk </label>
            <input id="jumlah" type="number" class="form-control" name="jumlah" placeholder="Jumlah Produk yang Terjual" value="<?php echo e(old('jumlah')); ?>" required>
            <?php if($errors->has('jumlah')): ?>
              <span class="help-block">
                <p><?php echo e($errors->first('jumlah')); ?></p>
              </span>
            <?php endif; ?>
         </div>

         <div class="form-group">
           <input type="submit" name="" class="btn btn-primary" value="Save">
         </div>
      </form>
    </div>
  </div>
</div>

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><b>Riwayat Penjualan Orlinfarm</b></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <!-- <p class="text-muted font-13 m-b-30">
          The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
        </p> -->
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Tanggal</th>
              <th>Nama Produk</th>
              <th>Jumlah Terjual</th>
              <th>Subtotal</th>
              <th>Keuntungan</th>
              <th>Opsi</th>
            </tr>
          </thead>


          <tbody>
            <?php $counter=1; ?>
            <?php $__currentLoopData = $penjualan_produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penjualan_produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <?php $keuntungan = $penjualan_produk->total_hargajual - $penjualan_produk->total_hargabeli?>
                <td><?php echo $counter++ ?></td>
                <td><?php echo e($penjualan_produk->tanggal); ?>-<?php echo e($penjualan_produk->bulan); ?>-<?php echo e($penjualan_produk->tahun); ?> </td>
                <td><?php echo e(\app\Produk::find($penjualan_produk->id_produk)->nama); ?></td>
                <td><?php echo e($penjualan_produk->jumlah); ?></td>
                <td><?php echo e($penjualan_produk->total_hargajual); ?></td>
                <td><?php echo $keuntungan ?></td>
                <td><a href="<?php echo e(route('produk.historyEdit',$penjualan_produk->id_penjualan)); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                  <br>
                  <form class="" action="<?php echo e(route('penjualan.delete',$penjualan_produk->id_penjualan)); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    <input type="submit" name="" class="btn btn-danger btn-xs" value="Delete">
                  </form>
                </td>




              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </tbody>
        </table>
      </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('name'); ?>
  <?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>