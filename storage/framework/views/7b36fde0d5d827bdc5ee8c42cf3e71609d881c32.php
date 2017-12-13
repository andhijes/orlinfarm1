<?php $__env->startSection('content'); ?>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>CARI BUKU BESARBERDASARKAN:</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form class="" action="<?php echo e(route('bukuBesar.store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>




        <div class="form-group">
            <label for="">PIlih Akun</label>
            <select class="form-control" name="kode_cabang">
              <?php $__currentLoopData = $cabang_akuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cabang_akun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <option <?php echo e($kode_cabang == $cabang_akun->id_cabang ? 'selected' : ''); ?> value="<?php echo e($cabang_akun->id_cabang); ?>"><?php echo e($cabang_akun->kode); ?> - <?php echo e($cabang_akun->nama); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>



        <div class="form-group">
          <?php $number=0; ?>
            <label for="">Pilih Bulan</label>
            <?php $test = $bulan - 1;?>
            <select class="form-control" name="bulan">
             <?php for ($i = 0; $i <= 11; $i++){ ?>
               foreach ($months)
                   <option <?php echo e($i == $bulan ? 'selected' : ''); ?> value="<?php echo $i?>"><?php echo e($months[$i]); ?></option>
             <?php $number++; } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="">Pilih Tahun</label>
            <select class="form-control" name="tahun">
              <?php for ($i = 0; $i < 5; $i++){ ?>
                foreach ($years)
                    <option <?php echo e($years[$i] == $year ? 'selected' : ''); ?> value="<?php echo $years[$i]?>"><?php echo e($years[$i]); ?></option>
              <?php $number++; } ?>
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
        <h2>BUKU BESAR <b><?php echo $month?> - <?php echo $tahun ?> </b></h2>
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
              <th>TANGGAL</th>
              <th>KETERANGAN</th>
              <th>DEBIT</th>
              <th>KREDIT</th>
              <th>SALDO</th>
            </tr>
          </thead>


          <tbody>
            <?php $counter=1; ?>
            <?php $saldo=0; ?>
            <?php $__currentLoopData = $transaksis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                  $id_debit = $transaksi->debit;
                  $id_kredit = $transaksi->kredit;
                  $debit = '';
                  $kredit = '';
                  if($id_debit == $kode_cabang){
                    $debit = $transaksi->nilai;
                  }
                  if($id_kredit == $kode_cabang){
                    $kredit = $transaksi->nilai;
                  }
                  $saldo += $transaksi->nilai;

                 ?>
              <tr>
                <td><?php echo $counter++ ?></td>
                <td><?php echo e($transaksi->tanggal); ?>/<?php echo e($transaksi->bulan); ?>/<?php echo e($transaksi->tahun); ?></td>
                <td><?php echo e($transaksi->keterangan); ?></td>
                <td><?php echo $debit ?></td>
                <td><?php echo $kredit ?></td>
                <td><?php echo $saldo ?></td>
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