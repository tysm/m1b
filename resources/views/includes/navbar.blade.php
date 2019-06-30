<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/') }}"><img class="small w-50" src="{{ asset('imgs/icon.png')}}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Sobre<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('psicologos') }}" tabindex="-1" aria-disabled="true">Disponibilidade</a>
      </li>
    </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="btn btn-warning mx-1 text-white" href="{{ route('login') }}">Login</a></li>
                            <li><a class="btn btn-primary mx-1" href="{{ route('register') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Registre-se</a></li>
                        @else
                            <!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
  <div class="logo" style="background-color: #4272d7">
    <a href="index.php">
      <img src="{{asset('imgs/icon.png')}}" class="w-50" alt="Cool Admin" />
    </a>
  </div>
  <div class="menu-sidebar2__content js-scrollbar1">
    <div class="account2">
      <div class="image img-cir img-120">
        <img src="{{asset('imgs/avatar.jpg')}}" alt="John Doe" />
      </div>
      <h4 class="name">Guilherme Luiz</h4>
      <h5>Gui</h5>
      <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>
    </div>
    <nav class="navbar-sidebar2">
      <ul class="list-unstyled navbar__list">
        <li>
          <a href="{{ url('/') }}"><i class="fa fa-home"></i>Início</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-envelope"></i>Mensagens</a>
          <span class="inbox-num"></span>
        </li>
        <li>
          <a href="#"><i class="fa fa-handshake-o"></i>Consultas</a>
        </li>
        <li>
          <a href="#"><i class="zmdi zmdi-account"></i>Perfil</a>
        </li>
        <li>
          <a href="#"><i class="zmdi zmdi-settings"></i>Configurações</a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
<!-- END MENU SIDEBAR-->
                            <li><a href="{{ route('home') }}"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Olá, 
                                    {{Auth::user()->name }} <span></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
  </div>
</nav>