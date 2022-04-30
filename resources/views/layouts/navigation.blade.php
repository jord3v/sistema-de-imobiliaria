<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1 class="navbar-brand navbar-brand-autodark">
        <a href="/">
            <x-application-logo />
        </a>
      </h1>
      <div class="navbar-nav flex-row d-lg-none">
        <div class="nav-item d-none d-md-flex me-3">
          
        </div>
        <div class="nav-item dropdown d-none d-md-flex me-3">
          <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
            <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
            <span class="badge bg-red"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
            <div class="card">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
              </div>
            </div>
          </div>
        </div>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
            <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a href="#" class="dropdown-item">Profile & account</a>
            <div class="dropdown-divider"></div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')" class="dropdown-item"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
          </div>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="navbar-nav pt-lg-3">
          <li class="nav-item">
            <a class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}" href="{{route('dashboard')}}" :active="request()->routeIs('dashboard')">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dashboard" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <desc></desc>
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <circle cx="12" cy="13" r="2"></circle>
                  <line x1="13.45" y1="11.55" x2="15.5" y2="9.5"></line>
                  <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                Página inicial
              </span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-warehouse" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <desc></desc>
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M3 21v-13l9 -4l9 4v13"></path>
                  <path d="M13 13h4v8h-10v-6h6"></path>
                  <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                Extra
              </span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-columns">
                <div class="dropdown-menu-column">
                  <a class="dropdown-item" href="./activity.html">
                    Activity
                  </a>
                  <a class="dropdown-item" href="./gallery.html">
                    Gallery
                  </a>
                  <a class="dropdown-item" href="./invoice.html">
                    Invoice
                  </a>
                  <a class="dropdown-item" href="./search-results.html">
                    Search results
                  </a>
                  <a class="dropdown-item" href="./pricing.html">
                    Pricing cards
                  </a>
                  <a class="dropdown-item" href="./faq.html">
                    FAQ
                    <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                  </a>
                  <a class="dropdown-item" href="./users.html">
                    Users
                  </a>
                </div>
                <div class="dropdown-menu-column">
                  <a class="dropdown-item" href="./license.html">
                    License
                  </a>
                  <a class="dropdown-item" href="./music.html">
                    Music
                  </a>
                  <a class="dropdown-item" href="./tasks.html">
                    Tasks
                    <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                  </a>
                  <a class="dropdown-item" href="./uptime.html">
                    Uptime monitor
                  </a>
                  <a class="dropdown-item" href="./widgets.html">
                    Widgets
                  </a>
                  <a class="dropdown-item" href="./wizard.html">
                    Wizard
                  </a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </aside>