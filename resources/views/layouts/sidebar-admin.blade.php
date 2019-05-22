<ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                @if(Auth::user()->gambar == '')

                  <img src="{{asset('adminlte/images/user/default.png')}}" alt="profile image">
                @else

                  <img src="{{asset('adminlte/images/user/'. Auth::user()->gambar)}}" alt="profile image">
                @endif
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{Auth::user()->name}}</p>
                  <div>
                    <small class="designation text-muted" style="text-transform: uppercase;letter-spacing: 1px;">{{ Auth::user()->level }}</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item {{ setActive(['/', 'dashboard']) }}"> 
            <a class="nav-link" href="{{url('/admin')}} ">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ setActive(['article*','user*']) }}" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Master Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ setShow(['article*']) }}" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                @if(Auth::user()->role_id == '0')
                <li class="nav-item">
                  <a class="nav-link {{ setActive(['user*']) }}" href="{{route('admin.user.index')}}">Data User</a>
                </li>
                @endif
                <li class="nav-item">
                  <a class="nav-link {{ setActive(['article*']) }}" href="{{route('admin.article.index')}}">Data Article</a>
                </li>
              </ul>
            </div>
          </li>
          
         
        </ul>