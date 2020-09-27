<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <!-- Branding Image -->
    <a href="{{ url('/') }}" class="navbar-brand">
      LaraBBS
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#narbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
      
      </ul>
      
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">登录</a></li>
        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">注册</a></li>
        @else
        <li class="nav-item dropdown">
          <a href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
            <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px" alt="头像" title="头像">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="{{ route('users.show', Auth::id()) }}" class="dropdown-item">个人中心</a>
            <a href="{{ route('users.edit', Auth::id()) }}" class="dropdown-item">编辑资料</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" id="logout">
              <form action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
              </form>
            </a>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
