<nav>
  <div class="left-side">
    <ul><h3>Minikuis</h3></ul>
    <ul>
      <li><a href="/dashboard">Dashboard</a></li>
      <li><a href="">Kuis</a></li>
      @auth
        @if (auth()->user()->isAdmin())
          <li><a href="">Soal</a></li> 
        @endif
      @endauth
    </ul>
  </div>
  <div class="right-side">
    @if (auth()->user())
      <form action="/logout" method="post">
        @csrf
        <ul class="logout">
          <li><button type="submit" class="dropdown-item">Logout</button></li>
        </ul>
      </form>
    @else
    <ul>
      <li><a href="/login">Login</a></li>
    </ul>
    @endif
  </div>
</nav>