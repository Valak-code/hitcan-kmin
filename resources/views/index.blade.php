<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Vũ Đình Bảo, Nguyễn Phi Khanh, Phạm Văn Tốt" />
    <meta
      name="keywords"
      content="find solution for problems, hitcan, hit challenge, kmin hitcan, kmin, Kmin, kmin.edu.vn, Cao Thang, Cao Thắng, code, lập trình, bài tập lập trình"
    />
    <meta name="description" content="Find Solution for Problems" />
    <!-- I love cat! Meow Meow #Nguyen Phi Khanh -->
    <title>Hit Challenge</title>
    <base href="{{asset('')}}">
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/init.css" />
  </head>
  <!-- code này được viết bới Khanh đẹp trai, Tốt xấu trai và lên kế hoạch bởi Vũ Đình Bảo -->
  <!-- this code was coding by Khanh handsome, Tot ugly and planned by Vu Dinh Bao -->
  <body class="background-body overflow-hidden">
    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <header class="navbar-fixed fixed">
      <nav>
        <div class="nav-wrapper white z-depth-3">
          <a href="https://www.kmin.edu.vn/" class="brand-logo logo-dev">
            <img
              src="img/logo_kmin.png"
              class="logo-navbar-dev"
              alt="kmin-edu-vn"
            />
          </a>
          <a href="#" data-target="mobile-site" class="sidenav-trigger"
            ><i class="material-icons black-text">menu</i></a
          >
          <ul class="right hide-on-med-and-down">
            <li id="home">
              <a href="index.html" class="black-text"
                ><i class="fas fa-home"></i> Trang chủ</a
              >
            </li>
            <li id="info">
              <a href="about.html" class="black-text"
                ><i class="fas fa-info"></i>Giới thiệu</a
              >
            </li>
            <li id="registration">
              <a href="signup.html" class="black-text">
                <i class="fas fa-file-signature"></i>Đăng ký</a
              >
            </li>
            <li id="showroom">
              <a href="login.html" class="black-text">
                <i class="fas fa-play"></i>Đăng nhập</a
              >
            </li>
            <li id="write">
              <a href="https://www.kmin.edu.vn/news" class="black-text"
                ><i class="far fa-newspaper"></i>Bài viết</a
              >
            </li>
            <li id="book">
              <a href="https://www.kmin.edu.vn/doc" class="black-text"
                ><i class="fas fa-book"></i>Tài liệu</a
              >
            </li>
            <li id="even">
              <a
                href="https://www.kmin.edu.vn/news/category?category=Mg%3d%3d&page=1"
                class="black-text"
                ><i class="fas fa-calendar-alt"></i>Sự kiện</a
              >
            </li>
          </ul>
        </div>
      </nav>
      <ul class="sidenav" id="mobile-site">
        <li>
          <a href="index.html" class="black-text"
            ><i class="fas fa-home text-color-one-dev"></i> Trang chủ</a
          >
        </li>
        <li>
          <a href="about.html" class="black-text"
            ><i class="fas fa-info text-color-two-dev"></i> Giới thiệu</a
          >
        </li>
        <li>
          <a href="https://www.kmin.edu.vn/register-info" class="black-text"
            ><i class="fas fa-file-signature text-color-three-dev"></i> Đăng
            ký</a
          >
        </li>
        <li>
          <a href="https://www.kmin.edu.vn/showroom" class="black-text text"
            ><i class="fas fa-play text-color-four-dev"></i> Showroom</a
          >
        </li>
        <li>
          <a href="https://www.kmin.edu.vn/news" class="black-text"
            ><i class="far fa-newspaper text-color-five-dev"></i> Bài viết</a
          >
        </li>
        <li>
          <a href="https://www.kmin.edu.vn/doc" class="black-text"
            ><i class="fas fa-book text-color-six-dev"></i> Tài liệu</a
          >
        </li>
        <li>
          <a
            href="https://www.kmin.edu.vn/news/category?category=Mg%3d%3d&page=1"
            class="black-text"
            ><i class="fas fa-calendar-alt text-color-seven-dev"></i>Sự kiện</a
          >
        </li>
      </ul>
    </header>
    <!-- Meow Meow :3 -->

    <div class="row">
      <div class="col s12 p-0 banner-dev">
        <img
          src="img/sb-blog-programming.jpeg"
          class="banner-dev-image"
          alt="kmin banner image"
        />
        <div class="banner-dev-search">
          <button
            class="btn btn-small waves-effect waves-light red button-search-dev"
          >
            <i class="material-icons">search</i>
          </button>
          <input
            type="text"
            placeholder="Tìm kiếm bài tập"
            class="search-input-dev"
          />
        </div>
      </div>
    </div>
    <!-- code này được viết bới Khanh đẹp trai :)))) -->

    <section class="row">
      <div class="col m12 s12 center">
        <h4 class="header">Các Thử Thách</h4>
      </div>
      <div class="col m2 hide-on-small-only opacity">
        <img src="img/course-phone.png" class="w-100" alt="kmin" />
      </div>

      <div class="col m8 s12 p-5">
        <div class="row">
          @php
          foreach($lst_chu_de as $chu_de){
            @endphp
                <div class="col l4 m6 s12">
                  <div class="card card-height-dev valign-wrapper z-depth-5">
                    <div class="card-content h-100 w-100 center">
                      <h3 class="card-title card-title-dev">{{$chu_de->ten_chu_de}}</h3>
                      <a
                        href="chu_de/{{$chu_de->id}}"
                        class="btn waves-effect waves-light btn-large button-dev"
                      >
                        Xem thử thách
                      </a>
                    </div>
                  </div>
                </div>
            @php
            }
          @endphp
        </div>
      </div>

      
      <div class="col s2 hide-on-small-only opacity">
        <img src="img/course-goal.png" class="w-100" alt="kmin" />
      </div>
    </section>

    <footer class="page-footer black">
      <div class="footer-copyright">
        <div class="container center">
          <span>© 2019 </span>
          <a
            href="https://www.kmin.edu.vn/"
            class="grey-text text-color-one-dev center"
            >Học viện khoa học máy tính Kmin</a
          >
          |
          <a class="grey-text text-color-five-dev center" href="about.html"
            >Nhóm phát triển</a
          >
        </div>
      </div>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/loadingpage.js"></script>
  </body>
</html>