<style>
.header .topbar .top-end .user-login li a {
  color: #081828;
  font-weight: 500;
  font-size: 14px;
  white-space: nowrap;
}
@media (min-width: 1200px){
  .container, .container-lg, .container-md, .container-sm, .container-xl {
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
    color: #081828!important;
    font-weight: 500;
    font-size: 14px;
    background-color: #f9f9f9!important;
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
                    <@if($_SESSION['lang'] == "eng"):@>
                    <option value="eng" selected>English</option>
                    <option value="geo">Georgian</option>
                    <option value="rus">Russian</option>
                    <@elseif($_SESSION['lang'] == "rus"):@>
                    <option value="rus" selected>Russian</option>
                    <option value="eng">English</option>
                    <option value="geo">Georgian</option>
                    <@else:@>
                    <option value="geo" selected>Georgian</option>
                    <option value="eng">English</option>
                    <option value="rus">Russian</option>
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
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12" style="background-color: #f9f9f9!important;">
          <!--profile-->
          <@if($_SESSION['userID']> 0):@>
            <div class="top-end">
              <div class="user">
                <a href="{{baseurl}}/profile"> <i class="fa fa-user-circle-o" aria-hidden="true"></i> Profile </a>
              </div>
              <ul class="user-login">
                <li>
                  <a href="{{baseurl}}/logout">Logout</a>
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
        <div class="col-lg-3 col-md-3 col-7">
          <a class="navbar-brand" href="{{baseurl}}/">
            <img src="{{baseurl}}/assets/images/logo/logo.png" alt="Logo">
          </a>
        </div>
        <div class="col-lg-5 col-md-7 d-xs-none">
          <!--center-->
          
        </div>
        <div class="col-lg-4 col-md-2 col-5">
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
      <div class="col-lg-8 col-md-6 col-12">
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
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="nav-social">

        </div>
      </div>
    </div>
  </div>
</header>
<@if($controller !="main"):@>
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