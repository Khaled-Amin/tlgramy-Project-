<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('./public/dashboard/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ url('./public/dashboard/img/favicon.png') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>
        لوحة التحكم

    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ url('./public/dashboard/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ url('./public/dashboard/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ url('./public/dashboard/css/material-dashboard.css?v=3.0.2') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('./public/css/asw.css') }}">
</head>

<body class="g-sidenav-show rtl bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="{{route('home')}}">
                <img src="{{ url('./public/dashboard/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="me-1 font-weight-bold text-white">لوحة التحكم</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div dir="rtl" class="collapse navbar-collapse px-0 w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">format_textdirection_r_to_l</i>
                        </div>
                        <span class="nav-link-text me-1">الرئيسية</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('sittings') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">view_in_ar</i>
                        </div>
                        <span class="nav-link-text me-1">الاعدادات العامة</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="{{ route('AddControl') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">person</i>
                        </div>
                        <span class="nav-link-text me-1">منطقة الاعلانات </span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link " href="#">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text me-1">الجداول</span>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('main.pages') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text me-1">الصفحات الثابتة</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('categories.main') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text me-1">التصنيفات</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('countries.main') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text me-1">الدول</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link " href="{{ route('pages.main') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text me-1">الصفحات</span>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('sites.main') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text me-1">المواقع</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('fixedsites.main') }}">
                        <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text me-1">المواقع المثبتة</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">

                    <h6 class="font-weight-bolder mb-0">التصنيفات</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">

                    <ul class="navbar-nav me-auto ms-0 justify-content-end">

                        <li class="nav-item d-xl-none pe-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown ps-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="container">
            @if ($message = Session::get('success'))
                <div class="alert alert-white" role="alert">
                    {{ $message }}
                </div>
            @endif
        </div>

        @if (count($errors) > 0)

            <ul>
                @foreach ($errors->all() as $item)
                    <li class="text-danger">
                        {{ $item }}
                    </li>
                @endforeach
            </ul>

        @endif

        <div class="row backgroundW p-4 m-3">
            <div class="container">
                <div class="form-group btn-create">
                    <h4>التصنيفات</h4>
                    <a href="{{ route('categories.create') }}" class="btn btn-success">انشاء تصنيف</a>
                </div><br><br>

                <div class="btn-group">
                    <label for="">تصفية:</label>
                    <button class="dropdown-toggle tgle" id="bbb" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">

                        @isset($country_namess)
                        {{$country_namess->country_name}}
                        @endisset
                    </button>

                    <div class="dropdown-menu">
                        <ul class="listt" id ="drop_list">
                            <a class="text-decoration-none text-dark mb-1"
                                href="{{ route('categories.main') }}">
                                <li id="eee" style="text-align: right; background-color: #fff;"> --- رئيسية ---</li>
                            </a>
                            @foreach ($country_names as $get_country)
                            <a class="text-decoration-none text-dark mb-1"
                                    href="{{route('getCateCount' , [$get_country->id])}}" >
                            <li id="eee" style="text-align: right">
                                    {{$get_country->country_name}}

                                </li></a>
                            @endforeach

                        </ul>

                    </div>

                </div>
            </div>


            <div class="table-responsive">

                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center">id</th>
                            <th scope="col">اسم التصنيف</th>
                            <th scope="col">رابط الصفحة</th>
                            <th scope="col">العنوان</th>
                            <th scope="col">الاب</th>
                            {{-- <th scope="col">حالة الظهور</th> --}}
                            <th scope="col">الدولة</th>
                            {{-- <th scope="col">أولوية الظهور</th> --}}
                            <th scope="col">عمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @isset($showCategory)
                        @foreach ($showCategory as $item)
                            <tr>
                                <th scope="row " style="text-align: center">{{ $item->id }}</th>
                                {{-- <td>{{$item->user->name}}</td> --}}
                                <td>{{ $item->category_name }}</td>
                                <td>{{ $item->href }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    @if ($item->parent)
                                        {{ $item->parent->category_name }}
                                    @endif
                                </td>
                                {{-- <td>{{ $item->visible_status }}</td> --}}
                                <td>{{ $item->country->country_name ?? Null}}</td>
                                {{-- <td>{{ $item->show_status }}</td> --}}

                                <td>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a href="{{ route('categories.edit', $item->id) }}"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                        </div>
                                        <div class="col-sm">
                                            <a href="{{ route('categories.destroy', ['id' => $item->id]) }}"><i
                                                    class="fa-solid fa-trash-can"></i></a>


                                        </div>
                                    </div>


                                </td>
                            </tr>
                        @endforeach
                        @endisset
                        @isset($category_show)
                            @foreach ($category_show as $item)
                                <tr>
                                    <th scope="row " style="text-align: center">{{ $item->id }}</th>
                                    {{-- <td>{{$item->user->name}}</td> --}}
                                    <td>{{ $item->category_name }}</td>
                                    <td>{{ $item->href }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        @if ($item->parent)
                                            {{ $item->parent->category_name }}
                                        @endif
                                    </td>
                                    {{-- <td>{{ $item->visible_status }}</td> --}}
                                    <td>{{ $item->country->country_name ?? Null}}</td>
                                    {{-- <td>{{ $item->show_status }}</td> --}}

                                    <td>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <a href="{{ route('categories.edit', $item->id) }}"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                            </div>
                                            <div class="col-sm">
                                                <a href="{{ route('categories.destroy', ['id' => $item->id]) }}"><i
                                                        class="fa-solid fa-trash-can"></i></a>


                                            </div>
                                        </div>


                                    </td>
                                </tr>
                            @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    {{-- sittings --}}
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2" style="background-color:#42424a">
            <i class="material-icons py-2" style="color:#fff">settings</i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-end">
                    <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-start mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-end">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                        onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 me-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch me-auto my-auto">
                        <input class="form-check-input mt-1 float-end me-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-3">
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch me-auto my-auto">
                        <input class="form-check-input mt-1 float-end me-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <a class="btn bg-gradient-info w-100"
                    href="https://www.creative-tim.com/product/material-dashboard">Free Download</a>
                <a class="btn btn-outline-dark w-100"
                    href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View
                    documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ url('./public/dashboard/js/core/popper.min.js') }}"></script>
    <script src="{{ url('./public/dashboard/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ url('./public/dashboard/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('./public/dashboard/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ url('./public/dashboard/js/plugins/chartjs.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ url('./public/dashboard/js/material-dashboard.min.js?v=3.0.2') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>

</html>
<style>
    @font-face {
        font-family: NotoKufiArabic;
        src: url("../public/fonts/NotoKufiArabic-VariableFont_wght.ttf");
    }
</style>