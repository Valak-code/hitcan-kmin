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
    <title>Hit Challenge | Chi tiết bài tập</title>
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/detail.css" />
    <link rel="stylesheet" href="css/init.css" />
  </head>
  <!-- code này được viết bới Khanh đẹp trai, Tốt xấu trai và lên kế hoạch bởi Vũ Đình Bảo -->
  <!-- this code was coding by Khanh handsome, Tot ugly and planned by Vu Dinh Bao -->
  <body class="background-body">
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

    <section class="row mt-5">
      <div class="col m2 l2 hide-on-small-only"></div>
      <div class="col s12 m8 l8" style="min-height: 60px;">
        <div class="search-dev">
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
      <div class="col m2 l2 hide-on-small-only"></div>
    </section>

    <section class="row mt-5">
      <div class="col l12 m12 s12 center">
        <h4 class="header" id="top">Khởi Động</h4>
      </div>

      <div class="col m2 hide-on-small-only opacity">
        <img src="img/course-phone.png" class="w-100" alt="kmin" />
      </div>

      <div class="col l8 m8 s12">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col l4 m4 s4">
                <h4 class="card-title">Độ khó:</h4>
              </div>
              <div class="col l8 m8 s8">
                <h4 class="card-title cyan-text text-accent-4">Dễ</h4>
              </div>
            </div>
            <h4 class="card-title">Vấn đề cần giải quyết</h4>
            <p>
              Một chương trình cần in ra màn hình các thông tin và thông báo
            </p>
            <h4 class="card-title">Mô tả chức năng</h4>
            <p>In ra màn hình "hello word!"</p>
            <h4 class="card-title">Định dạng đầu vào</h4>
            <p>Không cần đầu vào</p>
            <h4 class="card-title">Những ràng buộc</h4>
            <p>Không cần ràng buộc</p>
            <h4 class="card-title">Định dạng đầu ra</h4>
            <p>In ra màn hình "hello word!"</p>
            <h4 class="card-title">Đầu vào mẫu</h4>
            <pre class="w-100 code-screen grey lighten-3"></pre>
            <h4 class="card-title">Đầu ra mẫu</h4>
            <pre class="w-100 code-screen grey lighten-3">
                <code class="left">hello word!</code>
            </pre>
          </div>
          <div class="card-content center">
            <button class="btn btn-large btn-detail-challenge" id="need-help">
              Cần Chi Viện?
            </button>
          </div>
        </div>
        <div class="card">
          <div class="card-content center">
            <a
              href="detail.html"
              class="btn btn-large waves-effect waves-dark deep-purple accent-1 m-3 hoverable"
              ><i class="material-icons left">chevron_left</i>Bài tập trước
              đó</a
            ><a
              href="detail.html"
              class="btn btn-large waves-effect waves-dark deep-purple accent-1 m-3 hoverable"
              >Bài tập kế tiếp
              <i class="material-icons right">chevron_right</i></a
            >
          </div>
        </div>
      </div>

      <div class="col l2 m2 hide-on-small-only opacity">
        <img src="img/course-goal.png" class="w-100" alt="kmin" />
      </div>

      <div id="modal1" class="modal video-popup">
        <div class="modal-footer p-5">
          <h5 class="left">Cách giải quyết vấn đề</h5>
          <button class="modal-close btn-floating btn-small red btn-flat">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-content">
          <div class="row">
            <div class="col l8 m8 s12">
              <div class="owl-carousel">
                <div class="video-container">
                  <iframe
                    width="853"
                    height="480"
                    src="https://www.youtube.com/embed/p5qt2BZ9otc"
                    frameborder="0"
                    allowfullscreen
                  ></iframe>
                </div>
                <div class="video-container">
                  <iframe
                    width="853"
                    height="480"
                    src="https://www.youtube.com/embed/cuV8eq-AtJU"
                    frameborder="0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
            </div>
            <div class="col l4 m4 s12">
              <h5 class="card-title">Vấn đề cần giải quyết</h5>
              <p>
                Một chương trình cần in ra màn hình các thông tin và thông báo
              </p>
              <h5 class="card-title">Mô tả chức năng</h5>
              <p>In ra màn hình "hello word!"</p>
            </div>
          </div>
        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/loadingpage.js"></script>
    <script src="js/detail.js"></script>
  </body>
</html>
