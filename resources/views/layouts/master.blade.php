<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('/public/admin')}}/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{url('/public/admin')}}/assets/css/style.css"> 
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    @yield('stylesheet')
    <style>
        .nav.navbar-nav {
            border: 1px solid cyan;
        }
      .nav.navbar-nav.navbar-right li a {
          color: #e5ec0e;
      }
      .navbar .navbar-nav li > a .menu-icon {
        color: #e5ec0e;
      }
      .navbar .navbar-nav li > a {
            color: #fff;
    }
      .navbar .menu-title {
        color: #749715;
      }
    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm  navbar-danger bg-danger">{{-- navbar-default --}}
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{url('/home')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
@if(Auth::user()->admin==1)
                    <li class="menu-title">Admin</li><!-- /.menu-title -->
                    <li>
                        <a href="{{url('/admin-panel')}}"><i class="menu-icon fa fa-laptop"></i>Admin Dashboard </a>
                    </li>
                    <li>
                        <a href="{{url('/sendMoney')}}"><i class="menu-icon fa fa-money"></i>Send Money </a>
                    </li>
                    <li>
                        <a href="{{url('/withdrawWetting')}}"><i class="menu-icon fa fa-money"></i>Withdraw Money </a>
                    </li>
                    <li>
                        <a href="{{url('/allMemberList')}}"><i class="menu-icon fa fa-user"></i>Member List </a>
                    </li> 
                    <li>
                        <a href="{{url('/youtubeLinks')}}"><i class="menu-icon fa fa-youtube"></i>Youtube </a>
                    </li>                    
                    <li class="menu-title">Member</li>
                    @endif

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Wallet</a>
                        <ul class="sub-menu children dropdown-menu bg-dark border">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ url('/myWallet/withdrawWallet')}}">Withdraw wallet</a></li>
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ url('/myWallet/registerWallet')}}">Register wallet</a></li>
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ url('/myWallet/sponsorWallet')}}">Sponsor wallet</a></li>
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ url('/myWallet/selfWallet')}}">Generation income wallet</a></li>
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ url('/youtubeWallet')}}">Youtube wallet</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/youtubeClick') }}"> <i class="menu-icon ti-youtube"></i>Youtube Click</a>
                    </li>
                    <li>
                        <a href="{{ url('/newMember') }}"> <i class="menu-icon ti-user"></i>New Member </a>
                    </li>
                    <li>
                        <a href="{{ url('/memberList') }}"> <i class="menu-icon ti-email"></i>Referral List </a>
                    </li>
                    <li>
                        <a href="{{ url('/levelTree') }}"> <i class="menu-icon ti-email"></i>Level Tree </a>
                    </li>
                    <li>
                        <a href="{{ url('/rankList') }}"> <i class="menu-icon ti-email"></i>Rank List </a>
                    </li>
                    <li>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="menu-icon ti-power-off"></i>Log out </a>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel bg-info">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('/home')}}">{{ config('app.name') }}</a>
                    <a class="navbar-brand hidden" href="{{url('/home')}}">{{ config('app.name') }}</a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(Auth::user()->photo != null )
                              <img src="{{ url('/')}}/public/upload/member/{{ Auth::user()->photo }}" class="user-avatar rounded-circle" alt="">
                            @else
                              <img class="user-avatar rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            @endif
                            &nbsp; {{Auth::user()->name}}
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{ url('/profile')}}"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>ID {{Auth::user()->id}}</a>

                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" ><i class="fa fa-power -off"></i>Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Breadcrumbs-->
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>@yield('title')</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="{{url('/home')}}">Home</a></li>
                                    <li class="active">@yield('title')</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.breadcrumbs-->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                @yield('content')
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2020 {{ config('app.name', 'Laravel') }}
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{url('/public/admin')}}/assets/js/main.js"></script>
    @yield('scripts')
</body>
</html>
