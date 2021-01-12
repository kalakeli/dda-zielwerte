<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    @if ( (Auth::user()) )
      <!-- <li class="nav-item">
        <router-link to="/dashboard" class="nav-link">
          <i class="nav-icon fas fa-user-alt"></i>
          <p>
            Profil
          </p>
        </router-link>
      </li> -->
    @endif
      <li class="nav-item">
        <router-link to="/home" class="nav-link">
          <i class="nav-icon">
            <img src="{{ asset('images/icons/icon_birdcage.svg') }}" class="img-fluid inline-icon" alt="Start">
          </i>
          <p>
            Startseite
          </p>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link to="/agrarlandschaft" class="nav-link">
          <i class="nav-icon">
            <img src="{{ asset('images/icons/icon_agriculture.svg') }}" class="img-fluid inline-icon" alt="Agrarlandschaft">
          </i>
          <p>
            Agrarlandschaft
          </p>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link to="/waelder" class="nav-link">
          <i class="nav-icon">
            <img src="{{ asset('images/icons/icon_forests.svg') }}" class="img-fluid inline-icon" alt="Wälder">
          </i>
          <p>
            Wälder
          </p>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link to="/siedlungen" class="nav-link">
          <i class="nav-icon">
            <img src="{{ asset('images/icons/icon_urban.svg') }}" class="img-fluid inline-icon" alt="Siedlungen">
          </i>
          <p>
            Siedlungen
          </p>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link to="/binnengewaesser" class="nav-link">
          <i class="nav-icon">
            <img src="{{ asset('images/icons/icon_lakes.svg') }}" class="img-fluid inline-icon" alt="Binnengewässer">
          </i>
          <p>
            Binnengewässer
          </p>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link to="/kuesten_meere" class="nav-link">
          <i class="nav-icon">
            <img src="{{ asset('images/icons/icon_sea.svg') }}" class="img-fluid inline-icon" alt="Küsten Meere">
          </i>
          <p>
            Zielwerte
          </p>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link to="/material" class="nav-link">
          <i class="nav-icon">
            <img src="{{ asset('images/icons/icon_download.svg') }}" class="img-fluid inline-icon" alt="Downloads">
          </i>
          <p>
            Material
          </p>
        </router-link>
      </li>

    <hr>

      <li class="nav-item bg-red">
        <a class="nav-link"
           href="{{ route('logout') }}"
           onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-power-off"></i>
          <p>
            {{ __('Logout') }}
          </p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>

  </ul>
</nav>
