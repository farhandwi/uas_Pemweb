

<?php $__env->startSection('container'); ?>

<div class="containerSoal">
    <div class="row">
        <div class="col">
            <h3> Daftar Film </h3>
        </div>
        <div class="col">
            <div style="float: right;">
                <a class="tambahSoalBtn" href="/soal/create"> Tambah Soal </a>
            </div>
        </div>
    </div>
        <table class="tableSoal">
            <thead>
                <tr>
                    <th> [-] </th>
                    <th> No </th>
                    <th> Pertanyaan </th>
                    <th> Tipe </th>
                    <th> Opsi </th>
                    <th> Jawaban </th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $dataSoal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td width="5%">
                            <input type="checkbox" name="check[]" value="<?php echo e($data->id); ?>">
                        </td>
                        <td width="5%"> <?php echo e($loop->iteration); ?> </td>
                        <td width="20%"> <?php echo e($data->pertanyaan); ?> </td>
                        <td width="5%"> <?php echo e($data->tipe_soal); ?> </td>
                        <?php $__currentLoopData = $opsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $op): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td width="15%"> <?php echo e($op->opsi_A); ?> <?php echo e($op->opsi_B); ?> <?php echo e($op->opsi_C); ?> <?php echo e($op->opsi_D); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td width="10%"> <?php echo e($data->jawaban); ?> </td>
                        <td width="8%">
                            <form method="POST" action="/soal/<?php echo e($data->id); ?>/edit">
                            <?php echo csrf_field(); ?>
                            <button class="button" type="submit"> edit </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
        
                </tr>
            </tbody>
        </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FILE KULIAH\Kuliah Online\SEMESTER 5\Pemrograman Web\UAS\UAS_Pemweb\resources\views/soal/index.blade.php ENDPATH**/ ?>