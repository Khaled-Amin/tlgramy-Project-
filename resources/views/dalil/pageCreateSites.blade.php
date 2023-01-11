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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
    rel="stylesheet" />
    <!--{{-- <link rel="stylesheet" type="text/css" href="style.css"> --}}-->
    <link rel="stylesheet" href="{{ url('../public/css/dalil_style.css') }}">
    <link rel="stylesheet" href="{{ url('../public/css/asw.css') }}">
    <title>

        @isset($DataSittings)
            {{ $DataSittings->nameWebsite }}
        @endisset

        @isset($ddd)
            {{ $ddd->title }}
        @endisset

        @isset($testt)
            {{ '-' }}
            {{ $testt->title }}
        @endisset

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
                            <ul class="list" id="drop_list">
                                @foreach ($country_names as $get_country)
                                    <li id="">
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

                    {{-- <div class="icon-barr">
                        <span class="icon-home">
                            @isset($get_about_waslat)
                                <a
                                    href="{{ route('about-dalil', [$get_about_waslat->href, $get_about_waslat->id]) }}">
                                    <i class="fa-solid fa-house"></i>
                                    اجعلنا صفحتك الرئيسية
                                </a>
                            @endisset
                        </span>
                    </div> --}}
                    <div class="icon-barr">
                        <span class="icon-home">
                                <a href="{{ route('create-sites.user') }}" style="font-size: 12px;">
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

   	
    <div class="container mt-3 mb-2 family-font">
        <div class="row backgroundW p-4 m-3 edit-create-user">
            <form action="{{ route('store-sites.user') }}" class="p-4 form-create-user" method="POST">
                @csrf
                @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li class="text-danger">
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                @endif
                <h4>الدولة:</h4>
                <select class="form-cdontrol select_create_by_user" id="countries" name="countries_id">
                    <option value="">اختر الدولة</option>
                    @foreach ($countries as $get_countries)
                        <option value="{{$get_countries->id}}">{{$get_countries->country_name}}</option>
                    @endforeach

                </select>
                <h4>التصنيفات:</h4>
                <select class="form-cdontrol" id="category" name="category">
                    <option value="0">اختر التصنيف</option>
                    {{-- @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                    @endforeach --}}
                </select>
                <!--<h4>التصنيفات الفرعية:</h4>-->
                <!--<select class="form-cdontrol" name="subcategory" id="subcategory">-->
                <!--    <option value="0">--بدون الاب--</option>-->
                <!--</select>-->





                <div class="form-row mb-2">
                    <div class="col">
                        <label for="exampleFormControlInput1">اسم القناة</label>
                        <input type="text" class="form-controll" name="site_name" placeholder="اسم قناة">
                    </div>
                    {{-- <div class="col">
                        <label for="">Tags:</label>
                        @foreach ($tags as $tag )
                            <input type="checkbox" name="name[]"
                                value="{{$tag->id}}"
                            >
                            <label for="">{{$tag->name}}</label>
                        @endforeach

                    </div> --}}
                    <div class="col">
                        <label for="exampleFormControlInput1">رابط القناة</label>

                        <input type="text" class="form-controll" name="href" placeholder="https://example.com">
                    </div>
                    <!--<div class="col">-->
                    <!--    <label for="exampleFormControlInput1">عنوان</label>-->
                    <!--    <input type="text" class="form-controll" name="title" placeholder="عنوان">-->
                    <!--</div>-->

                    <div class="col-md-12 mb-3">
                        <label><strong>نبذة :</strong></label>
                        <textarea class="form-controll" name="description" placeholder="وصف"></textarea>
                    </div>
                </div>

                <div class="form-row mb-2">
                    <div class="col">
                        <label for="exampleFormControlInput1">الكلمات المفتاحية</label>
                        <input type="text" class="form-controll" name="keyword" placeholder="مثل:رياضة,ترفيه,اخبار">
                    </div>
                    <div class="col">
                        <label for="tags">تاغات (يجب فصل بفاصلة عن كل تاغ)</label>
                        <input type="text" id="tags" class="form-controll" name="tags" placeholder="تاغات" data-role="tagsinput">

                    </div>
                </div>

                <!--{{-- <div class="form-row mb-2">-->
                <!--    <div class="col">-->
                <!--        <label for="exampleFormControlInput1">facebook</label>-->
                <!--        <input type="text" class="form-controll" name="facebook" placeholder="https://facebook.com">-->
                <!--    </div>-->
                <!--    <div class="col">-->
                <!--        <label for="exampleFormControlInput1">twitter</label>-->
                <!--        <input type="text" class="form-controll" name="twitter" placeholder="https://twitter.com">-->
                <!--    </div>-->
                <!--    <div class="col">-->
                <!--        <label for="exampleFormControlInput1">instagram</label>-->
                <!--        <input type="text" class="form-controll" name="instagram" name="instagram" placeholder="https://instagram.com">-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="form-row mb-2">-->
                <!--    <div class="col">-->
                <!--        <label for="exampleFormControlInput1">snapchat</label>-->
                <!--        <input type="text" class="form-controll" name="snapchat" placeholder="https://snapchat.com">-->
                <!--    </div>-->
                <!--    <div class="col">-->
                <!--        <label for="exampleFormControlInput1">youtube</label>-->
                <!--        <input type="text" class="form-controll" name="youtube" placeholder="https://youtube.com">-->
                <!--    </div>-->
                <!--    <div class="col">-->
                <!--        <label for="exampleFormControlInput1">telegram</label>-->
                <!--        <input type="text" class="form-controll" name="telegram" placeholder="https://telegram.com">-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="form-row mb-2">-->
                <!--    <div class="col">-->
                <!--        <label for="exampleFormControlInput1">android_link</label>-->
                <!--        <input type="text" class="form-controll" name="android" placeholder="https://playstore.example..">-->
                <!--    </div>-->
                <!--    <div class="col">-->
                <!--        <label for="exampleFormControlInput1">ios_link</label>-->
                <!--        <input type="text" class="form-controll" name="ios" placeholder="https://appstore.example..">-->
                <!--    </div>-->
                <!--    <div class="col">-->
                <!--        <label for="exampleFormControlInput1">غير مفعلة</label>-->
                <!--        <input type="checkbox" class="form-controll" name="confir" placeholder="enter 0">-->
                <!--    </div>-->
                <!--</div> --}}-->

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">أضف</button>
                </div>
            </form>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script>
        // let theBtn = document.querySelector("#bbb"),
        //         countries = document.querySelectorAll("#eee a");

        //         countries.forEach(country =>
        //             country.addEventListener("click", (targetCountry) =>
        //                 theBtn.innerHTML = country.innerHTML))
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).ready(function() {
                $('#countries').on('change', function() {
                    var country_id = this.value;
                    console.log(country_id);
                    $.ajax({
                        url: "{{ route('getcate') }}",
                        type: "POST",
                        data: {
                            country_id: country_id
                        },
                        dataType : 'json',
                        success: function(data) {
                            $('#category').empty();
                            $('#category').append('<option disabled> أختر التصنيف  </option>');
                            $('#category').append('<option value = "0"> -- لا شيئ --</option>');
                            $.each(data, function(key , value) {
                                console.log(data[0].category_name);
                                $('#category').append('<option value="' + value.id + '">' + value.category_name + '</option>');
                            });
                            console.log(data[0].category_name);
                        }
                    })
                });
                $('#category').on('change', function(e) {
                    var cat_id = e.target.value;
                    console.log(cat_id);
                    $.ajax({
                        url: "{{ route('supcate') }}",
                        type: "POST",
                        data: {
                            cat_id: cat_id
                        },
                        dataType : 'json',
                        success: function(data) {
                            $('#subcategory').empty();
                            $('#subcategory').append('<option> أختر التصنيف الفرعي </option>');
                            $('#subcategory').append('<option value = "0"> -- لا شيئ --</option>');
                            $.each(data.supcategories[0].supcategories, function(index,
                            subcategory) {
                                $('#subcategory').append('<option value="' + subcategory
                                    .id + '">' + subcategory.category_name + '</option>');
                                    console.log(subcategory.category_name);
                            });
                            console.log(data);
                        }
                    })
                });
            });
    </script>
</body>

</html>

<style>
    .bootstrap-tagsinput .tag {
        margin-right: 2px;
        color: #ffffff;
        background: #2196f3;
        padding: 3px 7px;
        border-radius: 3px;
    }
    .bootstrap-tagsinput {
        width: 100%;
    }
    .bootstrap-tagsinput input{
        padding: 10px;
    }
</style>
