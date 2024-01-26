

<?php $__env->startSection('container'); ?>

<div class="form4">
  <?php if(session()->has('success')): ?>
      <div class="success" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <?php if(session()->has('loginError')): ?>
      <div class="fail" role="alert">
        <?php echo e(session('loginError')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
  <form action="" method="POST" class="login-email">
    <?php echo csrf_field(); ?>
    <p class="login-text" style="font-size: 2rem; font-weight: 800">Login</p>
    <div class="input-group">
      <input type="email" placeholder="Email" name="email" value="" required />
    </div>
    <div class="input-group">
      <input type="password" placeholder="Password" name="password" value="" required />
    </div>
    <div class="input-group">
      <button name="submit" class="btn">Login</button>
    </div>
    <p class="login-register-text">Don't have an account? <a href="/register">Register Here</a>.</p>
  </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FILE KULIAH\Kuliah Online\SEMESTER 5\Pemrograman Web\UAS\UAS_Pemweb\resources\views/auth/login.blade.php ENDPATH**/ ?>