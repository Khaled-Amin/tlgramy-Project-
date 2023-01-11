<!doctype html>
<html lang="ar" dir="rtl">

<head>
          <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3C6G5XV3C4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-3C6G5XV3C4');
    </script>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!--<meta http-equiv="refresh" content="5;url="https://tlgramy.com/">-->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @if(isset($meta_tags->description))
    <meta property="og:description" content="{{$meta_tags->description}}">
    @else
    <meta property="og:description" content="@isset($DataSittings->Description){{$DataSittings->Description}}@endisset">
    @endif
    @if(isset($meta_tags->description))
    <meta name="description" content="{{$meta_tags->description}}" />
    @else
    <meta name="description" content="@isset($DataSittings->Description){{$DataSittings->Description}}@endisset" />
    @endif
    
    <meta property="og:url" content="https://tlgramy.com/">
    <meta name="keywords" content="@isset($meta_tags) {{ $meta_tags->keyword }} @endisset">
    <link rel="icon" type="image/x-icon" href="{{ url('../public/uploading/logozooozaaa.png') }}">
    <meta property="og:image" content="{{ url('../public/uploading/logozooozaaa.png') }}" />
    <!--Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    {{-- <link rel="stylesheet" type="text/css" href="style.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('../public/css/dalil_style.css') }}">
    <title>@isset($DataSittings){{ $DataSittings->nameWebsite }}@endisset @isset($title_descr){{ '-' }}{{ $title_descr->site_name }}@endisset</title>
</head>

<body>
    <img class="bar-img" src="{{ url('../public/upload/bgnav.png') }}" alt="">
    <div class="bar-top"><i class="fa-solid fa-house bar-title"></i><span class="bar-title">عزيزي المستخدم </span>
        <span class="bar-text">لجعل تصفح التلغرام أسهل وأكثر أمانا ، اجعل تلغرامي .. التلغرام في صفحة واحدة صفحتك الرئيسية !</span><a hidefocus="true" data-val="close" data-sort="topbar" id="addFavClose" class="bar-addfav_close"
            target="_self" href="javascript:void(0)"></a>
    </div>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('HomePage') }}">
                {{-- <h1 class="logo">دليل</h1> --}}
                <img src="{{ url('../public/upload/logozooozaaa.png') }}" alt="" style="margin-right: 4rem">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse edit" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li> --}}
                </ul>
                <div class="main-nav" style="width: 12rem">
                    <div class="btn-group">

                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @isset($country_namess)
                                <img src="{{ url('../public/uploading/' . $country_namess->country->country_flag) }}" alt=""
                                    style="margin-left:5px">
                                {{ $country_namess->country->country_name }}
                            @endisset

                        </button>

                        <div class="dropdown-menu">
                            <ul class="list">
                                @foreach ($country_names as $get_country)
                                    <li>
                                        <img src="{{ url('../public/uploading/' . $get_country->country_flag) }}" alt=""
                                            style="margin-left:5px">
                                        <a class="text-decoration-none text-dark mb-1"
                                            href="{{ route('reload', [$get_country->href]) }}">{{ $get_country->country_name }}</a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>

                    </div>
                    <div class="span">
                        <span class="text-white" style="font-size: 13px">دليل تلغرام للسهولة والامان  </span>
                    </div>





                </div>
                <div class="container datee">
                    <?php
                        use Alkoumi\LaravelHijriDate\Hijri;
                        $Y = date('Y');
                        $D = date('d');
                        $M = date('m');
                        echo $Y . '/' . $M . '/' . $D . '-';
                        $ss = Hijri::DateIndicDigits('l - j F - Y');
                        echo $ss;
                    ?>
                    <div class="icon-barr">
                        <span class="icon-home">
                                <a href="{{ route('create-sites.user') }}">
                                    <i class="fa-solid fa-house"></i>
                                    اضف قناتك
                                </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>


    </nav>
<div class="container mt-3 mb-2">
        <div class="search">
            <form id="searchthis" action="{{ route('search') }}" style="display:inline;" method="get">
                {{-- @csrf --}}
                <input id="namanyay-search-box" name="q" type="search" placeholder="ابحث عن القناة" />
                <button id="namanyay-search-btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                {{-- <button class="navbar-search_button">
                    <i class="fa fa-search"></i>
                </button> --}}
            </form>
        </div>
    </div>
    <div class="container">
        <div class="mt-4 text-white rounded box-main-discr">
            @isset($get_site_descr)
                @foreach ($get_site_descr as $get_sites_de)
                    <div class="main-box">

                        <h4 class="edit-descr-page"><span>{{ $get_sites_de->site_name }}</span></h4>
                        <div class="box-right">
                            <div class="box-descr">
                                <ul class="mt-3 text-dark edit-ul-descr">
                                    <li><i title="{{ 'اسم الموقع' }}"
                                            class="fas fa-globe"></i>{{ $get_sites_de->site_name }}</li>
                                    <li><i title="{{ 'رابط القناة' }}" class="fas fa-link"></i><a
                                        class="text-decoration-none" href="{{ $get_sites_de->href }}">زيارة
                                        القناة</a>
                                    </li>
                                    <li><i title="{{ 'نبذة' }}" class="fa-solid fa-circle-info"></i>
                                        <div style="margin-right: 2rem;margin-top: -25px;">{!! $get_sites_de->description !!}</div>
                                    </li>
                                    <li><i title="{{ 'الدولة' }}" class="fas fa-flag"></i><a
                                            class="text-decoration-none"
                                            href="{{ route('reload', [$get_sites_de->country->href]) }}">{{ $get_sites_de->country->country_name }}</a>
                                    </li>

                                    {{-- <li class="social">
                                        <i title="{{ 'وسائل التواصل الاجتماعي' }}"
                                            class="fa-solid fa-square-share-nodes"></i>
                                        <a class="text-decoration-none" href="{{ $get_sites_de->facebook }}"
                                            style="color:#1877f2"><i title="{{ 'فيسبوك' }}"
                                                class="fa-brands fa-facebook-square"></i></a>
                                        <a class="text-decoration-none" href="{{ $get_sites_de->twitter }}"
                                            style="color:#1da1f2"><i title="{{ 'تويتر' }}"
                                                class="fa-brands fa-twitter-square"></i></a>
                                        <a class="text-decoration-none" href="{{ $get_sites_de->instagram }}"
                                            style="color:#c32aa3"><i title="{{ 'انستاغرام' }}"
                                                class="fa-brands fa-instagram-square"></i></a>
                                        <a class="text-decoration-none" href="{{ $get_sites_de->telegram }}"
                                            style="color:#0088cc"><i title="{{ 'تلجرام' }}"
                                                class="fa-brands fa-telegram"></i></a>
                                    </li> --}}
                                    <li>

                                        <i title="{{ 'تصنيف رئيسي ' }}" class="fas fa-folder-open"></i>
                                        <a class="text-decoration-none"
                                            href="@isset($get_categoryTo_descr) {{ route('showSubCat', [ $get_categoryTo_descr->country->href,$get_categoryTo_descr->category->href,$get_categoryTo_descr->category->id]) }} @endisset">{{ $get_categoryTo_descr->category->category_name }}</a>



                                    <!--    <i title="{{ 'تصنيف فرعي ' }}" class="fas fa-folder-open i-sub"></i>-->

                                    <!--        <a class="text-decoration-none" href="@isset($get_SupCategory) {{ route('showSubCat', [$get_SupCategory->category->id, $get_SupCategory->country->href, $get_SupCategory->category->href]) }} @endisset">-->
                                    <!--            @foreach ($scategories as $rre)-->
                                    <!--            {{$get_SupCategory->subcategories == $rre->id  ? $rre->category_name : ''}}-->
                                    <!--            @endforeach-->

                                    <!--        </a>-->


                                    </li>
                                    
                                    <li>
                                       @isset($get_tags)
                                       @if(count($get_tags->tags) > 0)
                                        <i title="{{ 'تاغات' }}" class="fas fa-tags"></i>
                                        @foreach ($get_tags->tags as $tags)
                                            <a href="{{route('tags.sites' , $tags->name)}}">{{$tags->name}}</a>
                                        @endforeach
                                        @endif
                                        @endisset
                                    </li>
   
                                    
                                    
                                    {{-- <li>
                                        <i title="{{ 'الموقع في جوجل' }}" class="fas fa-external-link-alt"></i>
                                        <a target="_blank"
                                            href="https://www.google.com/search?q=site:{{ $get_site_descrr->title }}"
                                            class="btn-descr text-decoration-none" role="button" rel="nofollow"> الصفحات</a>
                                        <i title="{{ 'الموقع في جوجل' }}" class="fas fa-sitemap"></i>
                                        <a target="_blank"
                                            href="https://www.google.com/search?q=link:{{ $get_site_descrr->title }}"
                                            class="btn-descr text-decoration-none" role="button" rel="nofollow">
                                            الارتباط</a>
                                        <i title="{{ 'الموقع في جوجل' }}" class="fas fa-file-archive"></i>
                                        <a target="_blank"
                                            href="https://www.google.com/search?q=cach:{{ $get_site_descrr->title }}"
                                            class="btn-descr text-decoration-none" role="button" rel="nofollow">
                                            المحفوظات</a>
                                    </li> --}}



                                </ul>


                            </div>
                            <div class="ads-box-left">
                                <section class="ads">
                                    {{$addss->otherSite}}
                                </section>
                            </div>
                        </div>
                @endforeach



            @endisset


        </div>

    </div>



    <div class="mt-5 p-4 bg text-white text-center footer">
        <div class="container l-wrap t-c d-inline-flex justify-content-center edit-footer">
            @isset($all_pinned_page)

                <ul class="box-fot no-hover">
                    @foreach ($all_pinned_page as $get_pinned)
                        <li><a
                                href="{{ route('about-dalil', [$get_pinned->href, $get_pinned->id]) }}">{{ $get_pinned->page_name }}</a><b
                                class="space"></b></li>
                    @endforeach
                </ul>

            @endisset

        </div>
        <div style="color: #595959">
            {{ 'كل المعلومات المقدمة في موقع تلغرامي من روابط قنوات، صور ، فيديو ، لوجوهات ، وأيقونات الخ ، بانها ملكاً للغير ولا تنتمى بأي شكل من الأشكال لملكية شركة السورية لخدمات الانترنت وموقع تلغرامي بإستثناء لوجو وأيقون تلغرامي .' }}
        </div>

    </div>





    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>
