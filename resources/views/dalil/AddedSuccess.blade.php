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
    @if(isset($testt->description))
    <meta property="og:description" content="{{$testt->description}}">
    @else
    <meta property="og:description" content="@isset($DataSittings->Description){{$DataSittings->Description}}@endisset">
    @endif
    @if(isset($testt->description))
    <meta name="description" content="{{$testt->description}}" />
    @else
    <meta name="description" content="@isset($DataSittings->Description){{$DataSittings->Description}}@endisset" />
    @endif
    <meta property="og:url" content="https://tlgramy.com/" />
    @if(isset($testt->keyword))
    <meta name="keywords" content="{{$testt->keyword}}" />
    @else
    <meta name="keywords" content="@isset($DataSittings->Keywords){{$DataSittings->Keywords}}@endisset" />
    @endif
    @isset($DataSittings->socialMidialinkden)
    <meta property="og:url" content="{{ $DataSittings->socialMidialinkden }}" />
    @endisset
    @isset($DataSittings->socialMidiaYoutube)
    <meta property="og:url" content="{{ $DataSittings->socialMidiaYoutube }}" />
    @endisset
    @isset($DataSittings->socialMidiaInstagram)
    <meta property="og:url" content="{{ $DataSittings->socialMidiaInstagram }}" />
    @endisset
    @isset($DataSittings->socialMidiaFacebook)
    <meta property="og:url" content="{{ $DataSittings->socialMidiaFacebook }}" />
    @endisset
    @isset($DataSittings->socialMidiaTelegram)
    <meta property="og:url" content="{{ $DataSittings->socialMidiaTelegram }}" />
    @endisset
    <link rel="icon" type="image/x-icon" href="{{ url('../public/uploading/logozooozaaa.png') }}">
    <meta property="og:image" content="{{ url('../public/uploading/logozooozaaa.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <!--{{-- <link rel="stylesheet" type="text/css" href="style.css"> --}}-->
    <link rel="stylesheet" href="{{ url('../public/css/dalil_style.css') }}">
    <title>@isset($DataSittings){{$DataSittings->nameWebsite}}@endisset @isset($ddd){{$ddd->title}}@endisset @isset($testt){{$testt->title}}@endisset</title>
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

                        <button class="btn btn-sm dropdown-toggle" id="bbb" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{-- @foreach ($country_names as $get_country)
                                {{$get_country->country_name}}
                            @endforeach --}}
                            @isset($country_namess)
                                <img src="{{ url('../public/uploading/' . $country_namess->country_flag) }}" alt=""
                                    style="margin-left:5px;">
                                {{ $country_namess->country_name }}
                            @endisset


                        </button>

                        <div class="dropdown-menu">
                            <ul class="list" id="drop_list">
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
                        <span class="text-white" style="font-size: 13px">دليل تلغرام للسهولة والامان </span>
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
                                    أضف قناتك
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
        <div class="alert alert-info" role="alert" style="text-align:center;">
            @if (Session::has('success'))
                {!! session('success') !!}
            @endif
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
                <br>



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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        // let theBtn = document.querySelector("#bbb"),
        //         countries = document.querySelectorAll("#eee a");

        //         countries.forEach(country =>
        //             country.addEventListener("click", (targetCountry) =>
        //                 theBtn.innerHTML = country.innerHTML))
    </script>
</body>

</html>
