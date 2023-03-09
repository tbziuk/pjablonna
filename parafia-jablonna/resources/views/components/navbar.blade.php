<nav class="py-2 shadow navbar navbar-expand-lg sticky-top bg-light" >
  <div class="container">
    <a class="navbar-brand py-0 d-flex align-items-center" href="{{ url('/strona-glowna') }}">
      <img src="{{ URL::asset('images/parafia.ico')}}" width="56" height="56" class="logo">&nbsp;Parafia Jabłonna
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/strona-glowna') }}">Strona Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/aktualnosci') }}">Aktualności</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/msze-i-nabozenstwa') }}">Msze i nabożeństwa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/kancelaria') }}">Kancelaria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/ogloszenia-parafialne') }}">Ogłoszenia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/intencje-mszalne') }}">Intencje mszalne</a>
        </li>
        <li class="nav-item">
          <a class="nav-link last-nav-item" href="{{ url('/wspolnoty') }}">Wspólnoty Parafialne</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  