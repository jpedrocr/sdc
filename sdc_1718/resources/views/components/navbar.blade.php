        <nav class="navbar navbar-default navbar-static-top navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ url('/') }}" class="v-link-active">Início</a>
                        </li>
                        <li class="">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">O Sangalhos <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/historia') }}">História</a>
                                </li>
                                <li>
                                    <a href="{{ url('/orgaos') }}">Orgãos do Clube</a>
                                </li>
                                <li>
                                    <a href="{{ url('/datas') }}">Datas Importantes/Palmarés</a>
                                </li>
                                <li>
                                    <a href="{{ url('/estatutos') }}">Estatutos, Regulamento e Legislação</a>
                                </li>
                                <li>
                                    <a href="{{ url('/ligacoes') }}">Ligações Úteis</a>
                                </li>
                                <li>
                                    <a href="{{ url('/socios') }}">Sócios</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/equipas') }}">Equipas</a>
                        </li>
                        <li>
                            <a href="{{ url('/parcerias') }}">Parcerias</a>
                        </li>
                        <li>
                            <a href="{{ url('/produtos') }}">Produtos SDC</a>
                        </li>
                        <li>
                            <a href="{{ url('/galeria') }}">Galeria</a>
                        </li>
                        <li>
                            <a href="{{ url('/contactos') }}">Contactos</a>
                        </li>
						<!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
									<li>
			                            <a href="{{ url('/home') }}">Home</a>
			                        </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
