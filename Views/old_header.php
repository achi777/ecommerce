<style>
  .header .topbar .top-end .user-login li a {
    color: #081828;
    font-weight: 500;
    font-size: 14px;
    white-space: nowrap;
  }

  @media (min-width: 1200px) {

    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl {
      max-width: 100%;
    }
  }

  .header .topbar .top-left .menu-top-link .select-position select {
    border: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    position: relative;
    border: none;
    padding: 0 10px 0 0;
    color: #081828 !important;
    font-weight: 500;
    font-size: 14px;
    background-color: #f9f9f9 !important;
  }



  .navbar .megamenu {
    padding: 1rem;
  }

  /* ============ desktop view ============ */
  @media all and (min-width: 992px) {

    .navbar .has-megamenu {
      position: static !important;
    }

    .navbar .megamenu {
      left: 0;
      right: 0;
      width: 100%;
      margin-top: 0;
    }

  }

  /* ============ desktop view .end// ============ */


  /* ============ mobile view ============ */
  @media(max-width: 991px) {

    .navbar.fixed-top .navbar-collapse,
    .navbar.sticky-top .navbar-collapse {
      overflow-y: auto;
      max-height: 90vh;
      margin-top: 10px;
    }
  }

  /* ============ mobile view .end// ============ */
  .dropdown:hover .dropdown-menu {
    display: block;
    /* margin-top: 0;  */
  }

  .header .mega-category-menu-o {
    /*position: relative;*/
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-right: 40px;
    padding-right: 112px;
    cursor: pointer
  }

  .header .mega-category-menu .sub-category li a i {
    font-size: 12px;
    float: right;
    position: relative;
    top: 0px;
  }

  .navbar .navbar-collapse {
    text-align: center;
  }

  .bg-light {
    background-color: #ffffff !important;
    -moz-box-shadow: 0 0 0px black;
    -webkit-box-shadow: 0 0 0px black;
    box-shadow: 0 0 0px black;
  }

  .header .mega-category-menu .sub-category {
    position: absolute;
    left: 0;
    top: 0!important;
    width: 241px;
    height: auto;
    /* border: 1px solid #eee; */
    border-right: 1px solid #eee;
    background-color: #fff;
    opacity: 100; 
    visibility: visible;
    border-radius: 0;
    -webkit-transition: all .4s ease;
    transition: all .4s ease;
    padding: 15px 0;
    z-index: 999;
}
</style>
<div class="preloader">
  <div class="preloader-inner">
    <div class="preloader-icon">
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<header class="header navbar-area">
  <div class="topbar" style="background-color: #f9f9f9!important; max-height:40px!important;padding: 5px!important;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="top-left">
            <ul class="menu-top-link">
              <li>
                <div class="select-position">
                  <select id="lang">
                    <@if($_SESSION['lang']=="eng" ):@>
                      <option value="eng" selected>English</option>
                      <option value="geo">ქართული</option>
                      <option value="rus">Русский</option>
                      <@elseif($_SESSION['lang']=="rus" ):@>
                        <option value="rus" selected>Русский</option>
                        <option value="eng">English</option>
                        <option value="geo">ქართული</option>
                        <@else:@>
                          <option value="geo" selected>ქართული</option>
                          <option value="eng">English</option>
                          <option value="rus">Русский</option>
                          <@endif@>
                  </select>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="top-middle">
            <!--TOP Center-->

            <!--/TOP Center-->
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12" style="background-color: #f9f9f9!important;">
          <!--profile-->
          <@if($_SESSION['userID']> 0):@>
            <div class="top-end">
            <ul class="user-login">
                  <li>
                    <a href="{{baseurl}}/profile"> <img src="{{baseurl}}/assets/icons/icons/user.jpg"> {{profile}}</a>
                  </li>
                  <li>
                    <a href="{{baseurl}}/wishlist"> <img src="{{baseurl}}/assets/icons/icons/wishlist.jpg"> Hearts</a>
                  </li>
                  <li>
                    <a href="{{baseurl}}/orders"> <img src="{{baseurl}}/assets/icons/icons/orders.jpg"> {{orders}}</a>
                  </li>
                  <li>
                    <a href="{{baseurl}}/cart"> <img src="{{baseurl}}/assets/icons/icons/cart-empty.jpg"> {{cart}}</a>
                  </li>
                </ul>
            </div>
            <@else:@>
              <div class="top-end">
                <ul class="user-login">
                  <li>
                    <a href="{{baseurl}}/login"> <img src="{{baseurl}}/assets/icons/icons/user.jpg"> {{login}}</a>
                  </li>
                  <li>
                    <a href="{{baseurl}}/wishlist"> <img src="{{baseurl}}/assets/icons/icons/wishlist.jpg"> Hearts</a>
                  </li>
                  <li>
                    <a href="{{baseurl}}/orders"> <img src="{{baseurl}}/assets/icons/icons/orders.jpg"> {{orders}}</a>
                  </li>
                  <li>
                    <a href="{{baseurl}}/cart"> <img src="{{baseurl}}/assets/icons/icons/cart-empty.jpg"> {{cart}}</a>
                  </li>
                </ul>
              </div>
              <@endif@>

                <!--/profile-->
        </div>
      </div>
    </div>
  </div>
  <div class="header-middle">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-2 col-md-2 col-7">
          <a class="navbar-brand" href="{{baseurl}}/">
            <img src="{{baseurl}}/assets/images/logo/logo.png" alt="Logo">
          </a>
        </div>
        <div class="col-lg-7 col-md-7 d-xs-none">
          <!--center-->
          <!-- ============= COMPONENT ============== -->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="main_nav">
                <div class="navbar-nav">
                  <@$j=0;@>
                    <@foreach($catalog AS $item):@>
                      <div class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> {{$item->{cat_name} }} </a>
                        <div class="dropdown-menu megamenu" role="menu">
                          <div class="row g-3">
                            <div class="col-lg-4 col-6">
                              <div class="col-megamenu">
                                <div class="mega-category-menu">
                                  
                                  {{$menus[$j]->menu}}
                                  <@$j++;@>
                                </div>
                              </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <div class="col-lg-5 col-12" style="min-height: 600px;">
                              <div class="col-megamenu">
                                <h6 class="title">{{$item->{cat_name} }} clothes</h6>
                                  <div>test</div>
                              </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <div class="col-lg-3 col-6">
                              <div class="col-megamenu">
                                <h6 class="title">shop by size</h6>
                                <@foreach($sizes AS $itemc):@>
                                <button type="button" onclick="location.href='{{baseurl}}/shop/{{$item->cat_id}}/x/{{$itemc->size_id}}/x/x/1/x/'" class="btn btn-light" style="margin-top: 10px;">{{$itemc->size_name}}</button>
                                <@endforeach@>

                              </div> <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                          </div><!-- end row -->
                        </div> <!-- dropdown-mega-menu.// -->
                      </div>

                      <@endforeach@>

                </div>
              </div> <!-- navbar-collapse.// -->
            </div> <!-- container-fluid.// -->
          </nav>
          <!-- ============= COMPONENT END// ============== -->

        </div>
        <div class="col-lg-3 col-md-3 col-5">
          <div class="middle-right-area">

            <!--rightbar-->
            <div class="main-menu-search" style="min-width:100%!important;">
              <div class="navbar-search search-style-5">
                <div class="search-input">
                  <!--http://192.168.64.2/shop/x/x/x/x/x/x/search/-->
                  <input type="text" name="search" id="search" placeholder="Search">
                </div>
                <div class="search-btn">
                  <button onclick="search();">
                    <i class="lni lni-search-alt"></i>
                  </button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div style="background-color:#f9f9f9; min-height:20px; border-bottom: 2px solid #0267f3;" class="w-100"></div>
      <!--<div class="col-lg-8 col-md-6 col-12">
        <div class="nav-inner">
          <div class="mega-category-menu">
            <span class="cat-button">
              <i class="lni lni-menu"></i>All Categories </span>
            {{$tree}}
          </div>
          <nav class="navbar navbar-expand-lg">

            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
              <ul id="nav" class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a href="{{baseurl}}" aria-label="Toggle navigation">{{home}}</a>
                </li>
                <@foreach($infoCats AS $item):@>
                <li class="nav-item">
                  <a href="{{baseurl}}/info/{{$item->cat_id}}" aria-label="Toggle navigation">{{$item->{cat_name} }}</a>
                </li>
                <@endforeach@>
              </ul>
            </div>
          </nav>
        </div>
      </div> -->
      <!--<div class="col-lg-4 col-md-6 col-12">
        <div class="nav-social">

        </div>
      </div>-->

      <!--menu-->


    </div>
  </div>
</header>
<@if($controller !="main" ):@>
  <div class="breadcrumbs">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="breadcrumbs-content">
            <h1 class="page-title">Dressio</h1>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <ul class="breadcrumb-nav">
            <li>
              <a href="{{$item->url}}">
                <i class="lni lni-home"></i> {{home}} </a>
            </li>
            <@foreach($nav AS $item):@>
              <li>
                <a href="{{$item->url}}">{{$item->name}}</a>
              </li>
              <@endforeach@>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <@endif@>