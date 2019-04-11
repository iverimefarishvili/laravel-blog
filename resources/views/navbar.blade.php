   
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./"><h4>{{config('app.name', 'BLOG')}}</h4></a>
        </div>
            
        
        <div id="navbar" class="collapse navbar-collapse">
          
                    <ul class="nav navbar-nav">
                        <li><a href="/blog/public/home"><h4>Home</h4></a></li>
                        <li><a href="/blog/public/about"><h4>About</h4></a></li>
                        <li><a href="/blog/public/contact"><h4>Contact</h4></a></li>
                         
                    </ul>
                    
                    

                   @if (Auth::guest())
                    
                    <ul class="nav navbar-nav">
                        
                         <li><a href="{{ route('login') }}"><h4>Login</h4></a></li>
                         <li><a href="{{ route('register') }}"><h4>Registration</h4></a></li>
                    </ul>
                    
                    @else
                    <ul class="nav navbar-nav">
                    <li class="dropdown">
                        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <h4>{{ Auth::user()->name }} <span class="caret"></span></h4> 
                        </a>
                      
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/dashboard">Dashboard</a></li>
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
                    </ul>
                    
                @endif
                    
        </div>
      </div>
    </nav>
    
        