<?php $__env->startSection('content'); ?>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Tambah Produk<small>Orlinfarm</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="<?php echo e(route('jurnalUmum.store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label for="">Pilih Bulan</label>
            <select class="form-control" name="bulan">
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Pilih Tahun</label>
            <select class="form-control" name="tahun">
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
            </select>
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
        <h2>Jurnal Umum <b><?php echo $month?> - <?php echo $tahun ?> </h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>NO</th>
              <th>KETERANGAN</th>
              <th>DEBIT</th>
              <th>KREDIT</th>
            </tr>
          </thead>


          <tbody>
            <?php $counter=1; ?>
            <?php $total=0; ?>
            <?php $__currentLoopData = $transaksis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo $counter++ ?></td>
                <td><?php echo e($transaksi->tanggal); ?>/<?php echo e($transaksi->bulan); ?>/<?php echo e($transaksi->tahun); ?><br><?php echo e($transaksi->keterangan); ?></td>
                <td><?php echo e(\app\cabang_akun::find($transaksi->debit)->nama); ?><br><?php echo e($transaksi -> nilai); ?></td>
                <td><?php echo e(\app\cabang_akun::find($transaksi->kredit)->nama); ?><br><?php echo e($transaksi -> nilai); ?></td>

              </tr>
              <?php $total += $transaksi->nilai ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </tbody>
        </table>
      </div>


        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>JUMLAH DEBIT</th>
              <th><?php echo $total?></th>
            </tr>
            <tr>
              <th>JUMLAH KREDIT</th>
              <th><?php echo $total ?></th>
            </tr>
          </thead>
        </table>

    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('name'); ?>
  <?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>