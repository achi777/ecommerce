<style>
    a:link
{
    color:#FFFFFF;
}

a:visited
{
    color:#FFFFFF;
}

a:hover 
{
    color:#FFFFFF;
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
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-4">
                    <div class="top-left">
                        <ul class="menu-top-link">
                            <li>
                                <div class="select-position">
                                    <select id="lang">
                                        <@if($_SESSION['lang']=="eng" ):@>
                                            <option value="eng" selected>English</option>
                                            <option value="geo">Georgian</option>
                                            <option value="rus">Russian</option>
                                            <@elseif($_SESSION['lang']=="rus" ):@>
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
                <div class="col-lg-4 col-md-4 col-4">
                    <div class="top-middle">
                        <!--TOP Center-->
                        <div class="main-menu-search">
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
                <div class="col-lg-4 col-md-4 col-12">
                    <!--profile-->
                    <@if($_SESSION['userID']> 0):@>
                        <div class="top-end">
                            <div class="user">
                                <a href="{{baseurl}}/profile"><i class="lni lni-user"></i> Profile </a>
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
                                        <a href="{{baseurl}}/login">{{login}}</a>
                                    </li>
                                    <li>
                                        <a href="{{baseurl}}/register">{{registration}}</a>
                                    </li>
                                </ul>
                            </div>
                            <@endif@>

                                <!--/profile-->
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
                    <div class="middle-right-area">
                        <div class="navbar-cart">
                            <div class="wishlist">
                                <a href="{{baseurl}}/wishlist">
                                    <i class="lni lni-heart"></i>
                                    <span class="total-items" id="wishlist_count">0</span>
                                </a>
                            </div>
                            <div class="cart-items">
                                <a href="javascript:void(0)" class="main-btn">
                                    <i class="lni lni-cart"></i>
                                    <span class="total-items" id="cart_count">0</span>
                                </a>
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span id="cart_count_in">0 Items</span>
                                        <a href="{{baseurl}}/cart">View Cart</a>
                                    </div>
                                    <ul class="shopping-list" id="cart_items">

                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount" id="total_amount">00</span>
                                        </div>
                                        <div class="button">
                                            <a href="{{baseurl}}/cart" class="btn animate">View Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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