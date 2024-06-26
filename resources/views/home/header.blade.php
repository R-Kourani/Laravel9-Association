<!-- Top Bar Start -->
<div class="top-bar d-none d-md-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="top-bar-left">
                    <div class="text">
                        @auth()
                            <div>
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><strong class="text-uppercase"><p>{{Auth::user()->name}}</p></strong></a>
                                <div class="dropdown-menu">
                                    <br>
                                    <br>
                                    <br>
                                        <li><a href="{{route('userpanel.index')}}"><i class="fa fa-user"></i> My Account</a></li>
                                        <li><a href="{{route('userpanel.payments')}}"><i class="fa fa-heart"></i> My Donations</a></li>
                                        <li><a href="{{route('userpanel.reviews')}}"><i class="fa fa-heart"></i> My Reviews</a></li>
                                        <li><a href="/logoutuser"><i class="fa fa-unlock-alt"></i> Logout</a></li>
                                </div>
                            </div>
                        @endauth
                    </div>
                    @guest()
                        <div class="text">
                            <i class="fa fa-user"></i>
                            <a href="/loginuser" class="text-uppercase"><p>Login</p></a> <p> / </p>  <a href="/registeruser" class="text-uppercase"><p>Join</p></a>
                        </div>
                    @endguest
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-bar-right">
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->

<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="{{route('home')}}" class="navbar-brand">CHARITY</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                <a href="{{route('references')}}" class="nav-item nav-link">References</a>
                <div class="nav-item dropdown">
                    @php
                      $mainMenu = \App\Http\Controllers\homecontroller::maincontentlist()
                    @endphp
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
                    <div class="dropdown-menu">
                        @foreach($mainMenu as $rs)
                        <a href="{{route('menucontent',['id' => $rs->id , 'slug' => $rs->Title] )}}" class="dropdown-item">{{$rs->Title}}</a>
                         <div class="custom-menu">
                             <div class="row">
                                 @if(count($rs->children))
                                     @include('home.MenuTree',['children' => $rs->children])
                                 @endif
                             </div>
                         </div>
                        @endforeach
                    </div>
                </div>
                <a href="{{route('faq')}}" class="nav-item nav-link">FAQ</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                <a href="{{route('payment')}}" class="nav-item nav-link">Donate</a>

            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->
