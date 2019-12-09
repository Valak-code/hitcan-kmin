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
    <title>Hit Challenge | Đăng Nhập</title>
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
    <link rel="stylesheet" href="css/challenge.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/init.css" />
  </head>
  <!-- code này được viết bới Khanh đẹp trai, Tốt xấu trai và lên kế hoạch bởi Vũ Đình Bảo -->
  <!-- this code was coding by Khanh handsome, Tot ugly and planned by Vu Dinh Bao -->
  <body class="background-body">
    <!-- login with facebook -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId: "1335335326641302",
          cookie: true,
          xfbml: true,
          version: "v5.0"
        });

        FB.AppEvents.logPageView();
      };

      (function(d, s, id) {
        var js,
          fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
          return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
      })(document, "script", "facebook-jssdk");
    </script>

    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <div class="row m-0">
      <div class="col l7 m7 background-login hide-on-small-only"></div>
      <div class="col l5 m5 s12 valign-wrapper">
        <div class="col l2 m2 s12"></div>

        <div class="col l8 m8 s12 card">
          <div class="card-content center">
            <div class="row">
              <a href="index.html">
                <img
                  src="img/logo_kmin.png"
                  class="responsive-img w-50 mt-3"
                  alt="kmin"
                />
              </a>
              <div class="input-field col s12">
                <input id="email" type="email" class="validate" />
                <label for="email">Email</label>
              </div>
              <div class="input-field col s12">
                <input id="password" type="password" class="validate" />
                <label for="password">Password</label>
              </div>
              <div class="col s12">
                <div class="row">
                  <div class="col s6 m6 l6 center">
                    <a href="signup.html">Chưa đăng ký?</a>
                  </div>
                  <div class="col s6 m6 l6 center">
                    <a href="#!">Quên mật khẩu?</a>
                  </div>
                  <div class="col m12 s12 l12 center mt-3">
                    <button
                      href="#"
                      class="waves-effect waves-light btn btn-large hoverable pink accent-1"
                    >
                      Đăng Nhập
                    </button>
                  </div>
                  <div class="col l12 s12 m12 center mt-3 text-line-center">
                    <hr class="grey-text" />
                    <p class="grey-text text-line-center-title">Hoặc</p>
                  </div>
                  <div class="col s6 m6 l6">
                    <button
                      class="btn btn-floating btn-large waves-effect waves-light mt-1 indigo darken-2 hoverable"
                      id="facebook-login"
                    >
                      <i class="fab fa-facebook-f"></i>
                    </button>
                  </div>
                  <div class="col 6 m6 l6">
                    <button
                      class="btn btn-floating btn-large waves-effect waves-light mt-1 red darken-1 hoverable"
                    >
                      <i class="fab fa-google"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col l2 m2 s12"></div>
      </div>
    </div>

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
    <script src="js/login.js"></script>
  </body>
</html>