<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Shifu">

    <title>{{ 'AI世代職涯探索' }}</title>

    <link rel="shortcut icon" href="/assets/dist/img/icon.png">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    <style>
        .pic1 {
            background-image: url('img/bg-showcase-1-min.jpg'); 
        }
        .pic2 {
            background-image: url('img/bg-showcase-2-min.jpg'); 
        }
        .pic3 {
            background-image: url('img/bg-showcase-3-min.jpg'); 
        }
        
        /* For width 400px and larger: */
        @media only screen and (min-width: 415px) {
            .pic1 { 
                background-image: url('img/bg-showcase-1.jpg'); 
            }
            .pic2 { 
                background-image: url('img/bg-showcase-2.jpg'); 
            }
            .pic3 { 
                background-image: url('img/bg-showcase-3.jpg'); 
            }
        }
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        
        <a class="navbar-brand" href="/"><img src="/assets/dist/img/icon.png" height="38" width="38"></img> {{ 'AI世代職涯探索' }}</a>
        @if (Auth::guest())
            <a href="{{ url('auth/facebook') }}" class="btn btn-primary">
                <strong>FB 登入</strong>
            </a> 
        @else
            <a class="btn btn-primary" href="{{ url('/logout') }}">登出</a>
        @endif
      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">從今天開始探索你的AI世代職涯規劃</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <a href="{{ url('/test') }}" class="btn btn-block btn-lg btn-primary">開始測驗</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">

          <div class="col-lg-3">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div><a href="/articleA"> <h3>How Robot Change the World</h3></a>             
              <p class="lead mb-0">牛津大學對於AI、機器人世界的預測</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-layers m-auto text-primary"></i>
              </div><a href="/articleB"> <h3>JP Morgan robo-adviser </h3></a>
              <p class="lead mb-0">理財機器人的AI</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div><a href="/articleC"> <h3>Walwart using robot</h3></a>
              <p class="lead mb-0">零售業的AI</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div><a href="articleD"> <h3>AI相關應用</h3></a>
              <p class="lead mb-0">我國使用AI的案例</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <iframe width="951" height="550" src="https://www.youtube.com/embed/P02fLk2wb1Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Jack Tan（Kronos Research-Founding Partner & Co-CEO）</h2>
            <p class="lead mb-0">ＡＩ的目的應該是為了幫助更多的人！人類員工設計、監控ＡＩ，人機合作為社會創造更多價值！建議學習相關程式設計技能，並多方了解相關趨勢與對社會的影響，選擇自己具有熱情的領域投入。</p>
          </div>
        </div>
        <div class="row no-gutters">
          <iframe width="951" height="550" src="https://www.youtube.com/embed/YO22zpokJBQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Wilson Huang（秘銀科技Mithril HQ - VP of Product & Engineering、Steaker創辦人）</h2>
            <p class="lead mb-0">ＡＩ只是輔助工具，人類員工還是主體！盡量學習ＡＩ相關科普知識，反應能力與邏輯能力、態度與團隊溝通能力、職位專業能力仍是重點！</p>
          </div>
        </div>
         <div class="row no-gutters">
        <iframe width="951" height="550" src="https://www.youtube.com/embed/YJ4L_OsUMbs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h2>立法委員高虹安</h2>
            <p class="lead mb-0">兩個面向職涯選擇，達成人機互相成就的社會：(1)成為人工智慧專家、數據科學家，深入研發ＡＩ開創新世界！
(2)在傳統專業領域超前部署、超前學習ＡＩ相關應用，取得領先競爭力！</p>
          </div>      
          </div> 
      </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row" style="overflow:auto">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">AI世代職涯探索開發小組</h2>
            <h2 class="mb-4">歡迎聯絡我們:</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <h2 class="mb-4">wqqmatt@gmail.com</h2>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <p class="text-muted small mb-4 mb-lg-0">&copy; whiteCAT 2020. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="/privacy">
                  <i class="fa fa-shield fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="https://www.facebook.com/" target="_blank">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
