<nav>
  <div class="left-side">
    <ul><h3>Minikuis</h3></ul>
    <ul>
      <li><a href="/dashboard">Dashboard</a></li>
      <li><a href="">Kuis</a></li>
      <?php if(auth()->guard()->check()): ?>
        <?php if(auth()->user()->isAdmin()): ?>
          <li><a href="">Soal</a></li> 
        <?php endif; ?>
      <?php endif; ?>
    </ul>
  </div>
  <div class="right-side">
    <?php if(auth()->user()): ?>
      <form action="/logout" method="post">
        <?php echo csrf_field(); ?>
        <ul class="logout">
          <li><button type="submit" class="dropdown-item">Logout</button></li>
        </ul>
      </form>
    <?php else: ?>
    <ul>
      <li><a href="/login">Login</a></li>
    </ul>
    <?php endif; ?>
  </div>
</nav><?php /**PATH F:\FILE KULIAH\Kuliah Online\SEMESTER 5\Pemrograman Web\UAS\UAS_Pemweb\resources\views/partials/navbar.blade.php ENDPATH**/ ?>