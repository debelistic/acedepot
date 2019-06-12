

<header class="stick-top forsticky">
  <div class="navbar navbar-expand-md navbar-light shadow-sm menu-sec">
    <div class="logo">
      <a href=" ./"><img class="hidesticky" src="images/newlogo.png" alt="acedepot" /><img class="showsticky" src="images/newlogobalck.png" alt="" /></a>    </div><!-- Logo -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <nav class="collapse navbar-collapse mobile_navs" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto navbar_nav_ul">
                <li class="">
                    <a class="" href="/" class=" ">Home</a>
                </li>
                <li class="">
                    <a class="" href="current-openings"> Current Openings</a>
                </li>
                <li class="n">
                    <a class=" " href="available-contracts"> Available Contracts</a>
                </li>
                <li class="  menu-item-has-children">
                    <a class=" " href="#">Employers</a>
                    <ul>
                        <li><a class=" " href="employer-contractor-search"> Search/Request a Contractor</a></li>
                        <li><a class=" " href="employer-candidate-search"> Candidate Search/Post a Job</a></li>
                    </ul>
                </li>
                <li class=" ">
                    <a class=" " href="services"> Services</a>
                </li>
                <li class="  menu-item-has-children">
                    <a class=" " href="about"> About Us</a>
                    <ul>
                        <li><a class=" " href="contact">Contact</a></li>
                        <li><a class=" " href="faq">FAQ</a></li>
                    </ul>
                </li>
                @guest
                  <li class=" ">
                      <a class=" " href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class=" ">
                          <a class=" " href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
                @else
                  <li class="  dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  </li>
              @endguest
            </ul>
    </nav><!-- Menus -->
  </div>
</header>