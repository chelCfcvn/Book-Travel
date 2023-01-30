    <header class="header" id="header">
      <nav class="nav container">
        <a href="{{ route('home') }}" class="nav__logo"
          ><img
            width="150"
            style="height: 70px; object-fit: cover"
            src="{{ asset('https://static.wixstatic.com/media/a27d24_098fdfd37b514082997bfe0c192554b0~mv2.png/v1/fill/w_560,h_350,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/a27d24_098fdfd37b514082997bfe0c192554b0~mv2.png') }}"
            
            alt=""
        /></a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="{{ route('home') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}"">
                <i class="bx bx-home-alt nav__icon"></i>
                <span class="nav__name">Home</span>
              </a>
            </li>

            <!-- <li class="nav__item">
              <a href="#about" class="nav__link">
                <i class="bx bx-user nav__icon"></i>
                <span class="nav__name">About</span>
              </a>
            </li> -->

            <li class="nav__item">
              <a href="{{ route('posts') }}" class="nav__link {{ request()->is('posts') ? ' active-link' : '' }}"">
                <i class="bx bx-book-alt nav__icon"></i>
                <span class="nav__name">Blog</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="{{ route('package') }}" class="nav__link {{ request()->is('paket-travel') ? ' active-link' : '' }}">
                <i class="bx bx-briefcase-alt nav__icon"></i>
                <span class="nav__name">Package Travel</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}"">
                <i class="bx bx-message-square-detail nav__icon"></i>
                <span class="nav__name">Contact</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>