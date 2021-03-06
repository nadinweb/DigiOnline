@extends('website.layouts.main')

@section('title','پروفایل کاربری')

@section('content')

    <div class="container-main">
        <div class="col-12">
            <div class="breadcrumb-container">
                <ul class="js-breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#" class="breadcrumb-link">خانه</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#" class="breadcrumb-link">حساب کاربری من</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#" class="breadcrumb-link active-breadcrumb">پروفایل</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12 pull-right">
            <section class="page-aside">
                <div class="sidebar-wrapper">
                    <div class="box-sidebar">
                        <div class="profile-box">
                            <div class="profile-box-avator">
                                <a href="#">
                                    <img src="assets/images/profile/user-profile.svg">
                                </a>
                            </div>
                            <div class="profile-box-content">
                                <span class="profile-box-nameuser">
                                    {{auth()->user()->name}}
                                </span>
                                <span class="profile-box-phone">شماره همراه : {{auth()->user()->mobile ? auth()->user()->mobile : 'شما شماره موبایل وارد نکرده اید'}}</span>
                                <a href="#"><span class="profile-box-row-arrow">کیف پول : 0 تومان </span></a>
                                <a href="#"><span class="profile-box-row-arrow">دیجی کلاب : 0 امتیاز</span></a>
                            </div>
                            <div class="profile-box-tabs">
                                <a href="{{route('password.request')}}" class="profile-box-tab">تغییر رمز</a>
                                <a href="/test" class="profile-box-tab-sign-out">خروج از حساب</a>
                            </div>
                        </div>
                    </div>



                    <div class="box-sidebar">
                        <span class="box-header-sidebar">حساب کاربری شما</span>
                        <ul class="profile-menu-items">
                            <li>
                                <a href="{{route('profile.index')}}" class="profile-menu-url {{request()->path() === 'profile' ? 'active-profile' : ''}}">
                                    <span class="mdi mdi-account-outline"></span>
                                    پروفایل</a>
                            </li>
                            <li>
                                <a href="#" class="profile-menu-url">
                                    <span class="fa fa-shopping-basket"></span>
                                    همه سفارش ها</a>
                            </li>
                            <li>
                                <a href="#" class="profile-menu-url">
                                    <span class="fa fa-file-text-o"></span>
                                    در خواست مرجوعی</a>
                            </li>
                            <li>
                                <a href="#" class="profile-menu-url">
                                    <span class="fa fa-star-o"></span>
                                    لیست علاقه مندی ها</a>
                            </li>
                            <li>
                                <a href="#" class="profile-menu-url">
                                    <span class="fa fa-file-text-o"></span>
                                    نقد و نظرات</a>
                            </li>
                            <li>
                                <a href="#" class="profile-menu-url">
                                    <span class="mdi mdi-map"></span>
                                    آدرس ها</a>
                            </li>
                            <li>
                                <a href="#" class="profile-menu-url">
                                    <span class="fa fa-clock-o"></span>
                                    بازدید های اخیر</a>
                            </li>
                            <li>
                                <a href="#" class="profile-menu-url">
                                    <span class="mdi mdi-account-outline"></span>
                                    اطلاعات شخصی</a>
                            </li>

                            <li>
                                <a href="{{route('management.2fa.view')}}" class="profile-menu-url {{request()->path() === 'profile/twofactorauth' ? 'active-profile' : ''}}">
                                    <span class="mdi mdi-account-settings"></span>
                                    تنظیمات اکانت کاربری</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-9 col-md-9 col-xs-12 pull-left">
            <section class="page-contents">
                <div class="profile-content">
                    <div class="headline-profile">
                        <span>اطلاعات شخصی</span>
                    </div>
                    <div class="profile-stats">
                        <div class="profile-stats-row">
                            <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
                                <div class="profile-stats-col">
                                    <div class="profile-stats-content">
                                        <span class="profile-first-title"> نام و نام خانوادگی :</span>
                                        <span class="profile-second-title">حسن شجاعی</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
                                <div class="profile-stats-col">
                                    <div class="profile-stats-content">
                                        <span class="profile-first-title"> پست الکترونیک :</span>
                                        <span class="profile-second-title">info@digismart.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
                                <div class="profile-stats-col">
                                    <div class="profile-stats-content">
                                        <span class="profile-first-title"> شماره تلفن همراه :</span>
                                        <span class="profile-second-title">*******0991</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
                                <div class="profile-stats-col">
                                    <div class="profile-stats-content">
                                        <span class="profile-first-title"> کد ملی :</span>
                                        <span class="profile-second-title">-</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
                                <div class="profile-stats-col">
                                    <div class="profile-stats-content">
                                        <span class="profile-first-title"> دریافت خبرنامه :</span>
                                        <span class="profile-second-title">بله</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
                                <div class="profile-stats-col">
                                    <div class="profile-stats-content">
                                        <span class="profile-first-title"> احراز هویت دو مرحله ایی  :</span>
                                        <span class="profile-second-title">بله</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
                                <div class="profile-stats-col">
                                    <div class="profile-stats-content">
                                        <span class="profile-first-title"> شماره کارت :</span>
                                        <span class="profile-second-title">-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-stats-action">
                            <a href="#" class="link-spoiler-edit"><i class="fa fa-pencil"></i>ویرایش اطلاعات شخصی</a>
                        </div>
                    </div>
                </div>
                <div class="profile-content">
                    <div class="headline-profile">
                        <span>لیست علاقه مندی</span>
                    </div>
                    <div class="profile-stats">
                        <div class="profile-recent-fav">
                            <a href="#" class="profile-recent-fav-col">
                                <img src="assets/images/cart/111460776.jpg">
                            </a>
                            <div class="profile-recent-fav-col-title">
                                <a href="#">
                                    <h3 class="profile-recent-fav-name">گوشی موبایل سامسونگ مدل Galaxy A50 SM-A505F/DS دو سیم کارت ظرفیت 128گیگابایت</h3>
                                </a>
                            </div>
                            <div class="profile-recent-fav-price">
                                ۳,۲۶۳,۰۰۰
                                <span>تومان</span>
                            </div>
                            <div class="profile-recent-fav-col-actions">
                                <button class="js-remove-favorite-product"><i class="fa fa-trash"></i></button>
                            </div>
                        </div>
                        <div class="profile-recent-fav">
                            <a href="#" class="profile-recent-fav-col">
                                <img src="assets/images/cart/111460776.jpg">
                            </a>
                            <div class="profile-recent-fav-col-title">
                                <a href="#">
                                    <h3 class="profile-recent-fav-name">گوشی موبایل سامسونگ مدل Galaxy A50 SM-A505F/DS دو سیم کارت ظرفیت 128گیگابایت</h3>
                                </a>
                            </div>
                            <div class="profile-recent-fav-price">
                                ۳,۲۶۳,۰۰۰
                                <span>تومان</span>
                            </div>
                            <div class="profile-recent-fav-col-actions">
                                <button class="js-remove-favorite-product"><i class="fa fa-trash"></i></button>
                            </div>
                        </div>
                        <div class="profile-stats-action">
                            <a href="#" class="link-spoiler-edit"><i class="fa fa-pencil"></i>مشاهده و ویرایش لیست علاقه مندی</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--    adplacemen-container----------------------------->
        @include('website.profile.adplacement')
        <!--    adplacemen-container----------------------------->
    </div>

@endsection
