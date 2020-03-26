<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Shifu">

    <title><?php echo e(config('app.name')); ?></title>

    <link rel="shortcut icon" href="/assets/dist/img/icon.png">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="/"><?php echo e(config('app.name')); ?></a>
        <?php if(Auth::guest()): ?>
            <a href="<?php echo e(url('auth/facebook')); ?>" class="btn btn-primary">
                <strong>FB 登入</strong>
            </a> 
        <?php else: ?>
            <a class="btn btn-primary" href="<?php echo e(url('/logout')); ?>">登出</a>
        <?php endif; ?>
      </div>
    </nav>

    <div class="container">
    <h1>A robo-adviser is JPMorgan Chase’s latest play for online investors</h1>

<p>London (CNN Business) JPMorgan Chase is launching a new robo-adviser as it
makes another play for Millennial online investors. The company said Wednesday
that it will offer digital investment portfolios as part of its You Invest service,
which debuted last year. Robo-advisers, or digital platforms that provide
automated investing services, are becoming more popular, especially as passive
investing catches on.</p>
<p>Customers need at least $2,500 to open a portfolio. After entering their risk
profile, time horizon and investing goals, they'll be matched with a selection of
JPMorgan ETFs. The annual advisory fee is 0.35%.
</p>
<p>You Invest, which offers free stock trading, has allowed JPMorgan Chase to go up
against discount brokerages such as Charles Schwab (SCHW), TD Ameritrade
(AMTD) and E*Trade (ETFC). Its new robo-adviser will compete with products
from companies like Morgan Stanley (MS) and Wealthfront</p>
<p>JPMorgan (JPM), the largest US bank, provides services to about 61 million
American households. It's looking to strengthen its relationships with those
customers, 50 million of whom use mobile or online banking services.</p>
<p>It's also going after Millennials, a potentially lucrative demographic that's in the
process building wealth and could use more of the bank's services down the line.
Some of the bank's online efforts haven't panned out. Finn, its mobile-only
banking app for Millennials, lasted just a year after it was rolled out nationally.
The company is currently moving Finn customers over to its Chase app.</p>
    </div>
    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <p class="text-muted small mb-4 mb-lg-0">&copy; MCSL801 Shifu 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="/privacy">
                  <i class="fa fa-shield fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="https://www.facebook.com/BlockFayjai/" target="_blank">
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
