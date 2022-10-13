<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse"  style="background-color: #fff;">
      <div class="position-sticky pt-3 sidebar-sticky">
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Menu</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
        </ul>

        @if (auth('dinas')->check())
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Master Data</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dinas/wisata*') ? 'active' : '' }}" href="/dinas/wisata">
              <i class="fa-solid fa-location-dot me-2"></i>
              Wisata
              </a>
            </li>
            @if (auth('dinas')->user()->role == 'admin')
            <li class="nav-item">
              <a class="nav-link {{ Request::is('data-petugas*') ? 'active' : '' }}" href="/data-petugas">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Data Petugas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('data-user*') ? 'active' : '' }}" href="/data-user">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Data User
              </a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link {{ Request::is('data-ticket*') ? 'active' : '' }}" href="/data-ticket/{{ auth('dinas')->user()->username }}">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Data Ticket Masuk
              </a>
            </li>
            @endif
          </ul>  
        @else
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Transaki</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="/ticket">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Pemesanan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/riwayat-ticket/{{ auth()->user()->username }}">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Riwayat Ticket
              </a>
            </li>
          </ul>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Laporan</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Laporan Pemasukan
              </a>
            </li>
          </ul>
        @endif

      </div>
    </nav>