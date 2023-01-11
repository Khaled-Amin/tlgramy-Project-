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
    <meta property="og:description"
        content="@isset($DataSittings){{ $DataSittings->Description }}@endisset">
    <meta name="description" content="@isset($DataSittings){{ $DataSittings->Description }}@endisset">
    <meta property="og:url" content="https://tlgramy.com/">
    <meta name="keywords" content="@isset($DataSittings){{ $DataSittings->Keywords }}@endisset">
    <link rel="icon" type="image/x-icon" href="{{ url('../public/uploading/logozooozaaa.png') }}">
    <meta property="og:image" content="{{ url('../public/uploading/logozooozaaa.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    {{-- <link rel="stylesheet" type="text/css" href="style.css"> --}}
    <link rel="stylesheet" href="{{ url('../public/css/dalil_style.css') }}">
    <title>@isset($DataSittings){{ $DataSittings->nameWebsite }}@endisset @isset($title_about){{ '-' }}{{ $title_about->title }}@endisset
    </title>
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
                            اختر الدولة
                        </button>

                        <div class="dropdown-menu">
                            <ul class="list">
                                @foreach ($country_names as $get_country)
                                    <li id="eee">
                                        <img src="{{ url('../public/uploading/' . $get_country->country_flag) }}"
                                            alt="" style="margin-left:5px">
                                        <a class="text-decoration-none text-dark mb-1"
                                            href="{{ route('reload', [$get_country->href]) }}">
                                            {{ $get_country->country_name }}</a>

                                    </li>
                                @endforeach

                            </ul>

                        </div>

                    </div>
                    <div class="span">
                        <span class="text-white" style="font-size: 13px">دليل تلغرام للسهولة والامان</span>
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
    <div class="container mt-5 p-3 main-about">
        @isset($get_content)
            @foreach ($get_content as $get_describtion)
                <div class="custom_page_right">
                    @foreach ($all_pinned_page as $get_pinned)
                        <ul>

                            <a class="text-d" href="{{ route('about-dalil', [$get_pinned->href, $get_pinned->id]) }}">
                                <li>{{ $get_pinned->page_name }}</li>
                            </a>
                        </ul>
                    @endforeach
                </div>

                <div class="custom_page_left">
                    <h5>{{ $get_describtion->page_name }}</h5>
                    <div class="description_page">

                        <p>{!! $get_describtion->content !!}</p>

                    </div>
                </div>
            @endforeach
        @endisset

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
