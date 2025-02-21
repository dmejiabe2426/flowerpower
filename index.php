<?php
session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" crossorigin="anonymous">
    <style>
        body {
            padding-top: 80px; /* Ensure nav doesn't overlap content */
        }

        .navbar {
            background-color: #f8f9fa; /* Light grey background */
            border-bottom: 2px solid #dee2e6; /* Slight contrast on the bottom */
        }

        .navbar-brand img {
            max-height: 58px;
            width: auto; /* Restrict logo size */
        }

        .nav-item .nav-link {
            color: #007bff; /* Bootstrap primary blue for links */
            margin-right: 10px; /* Space between navbar items */
        }

        .nav-item .btn-primary {
            background-color: #007bff; /* Bootstrap primary blue */
            border-color: #007bff; /* Consistent border */
        }

        .nav-item .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
        }

        .nav-item.active .nav-link {
            color: #fff; /* White text for active item */
            background-color: #007bff; /* Highlight active item with blue background */
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .navbar-toggler {
                border-color: #007bff; /* Blue border for the toggle button */
            }

            .navbar-toggler-icon {
                background-image: url('data:image/svg+xml;charset=UTF8,%3csvg viewBox=\'0 0 30 30\' xmlns=\'http://www.w3.org/2000/svg\'%3e%3cpath stroke=\'rgba(0, 123, 255, 0.5)\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' d=\'M4 7h22M4 15h22M4 23h22\'/%3e%3c/svg%3e');
                /* Custom SVG for the toggler icon with a blue tint */
            }

            .navbar-collapse {
                border-top: 1px solid #dee2e6; /* Border top when collapsed */
            }
        }

        /* Additional Styles */
        .stage {
            background: url('img/background.jpg') no-repeat center center;
            background-size: cover;
            padding: 100px 0;
            text-align: center;
        }

        .stage-caption {
            color: #fff;
            margin-bottom: 20px;
        }

        .feature-one, .feature-three {
            padding: 50px 0;
        }

        .feature-two {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .feature-content h2 {
            color: #333;
        }

        .feature-content p {
            color: #666;
        }

        .feature-dark {
            background-color: #333;
            color: #fff;
        }

        .feature-dark h2, .feature-dark h6 {
            color: #fff;
        }

        .feature-dark p {
            color: #bbb;
        }

        .feature-caption {
            padding-right: 15px;
        }

        .main-footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        .main-footer h6 {
            color: #fff;
        }

        .main-footer a {
            color: #999;
        }

        .main-footer a:hover {
            color: #fff;
        }

        .img-responsive {
            max-width: 100%;
            height: auto;
        }

        .btn-outline-secondary, .btn-outline-primary {
            border-width: 2px;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .feature-caption, .feature-content {
                text-align: center;
            }
            
            .ml-lg-auto, .d-none {
                margin-left: 0;
                display: block;
            }

            .navbar {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#"><img src="assets/images/flower.webp" alt="startup.logo" height="58" width="200"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#startupNavbar" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="startupNavbar">
        <ul class="navbar-nav ml-sm-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
                <li class="nav-item">
                    <a class="btn btn-primary" href="scripts/logout.php">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="btn btn-primary" href="pages/login.php">Sign in</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>




    <div class="stage">
      <div class="stage-caption">
        <h1 class="display-3">The Ultimate Floral Indulgene</h1>
        <a href="#" class="btn btn-lg btn-success">Call Us Now</a>
      </div>
    </div>

    <section class="feature-one">
      <div class="container">
        <div class="feature-content">
          <div class="row">
            <div class="col-lg-6">
              <iframe width="500" height="315" src="https://www.youtube.com/embed/LjCzPp-MK48" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-5 ml-lg-auto">
              <h6>Watch this</h6>
              <h2>The joy of flowers</h2>
              <p>Watch flowers unfurling in this amazing time-lapse video from filmmaker David de los Santos Gil.</p>
              
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="feature-two feature-dark" id="pickup">
      <div class="container">
        <div class="feature-content">
          <div class="row">
            <div class="col-lg-6 feature-caption">
              <h6>Flowers especially for you</h6>
              <h2>SAME DAY FLOWER DELIVERY</h2>
              <p class="lead">You will love our flowers and we guarantee quality and same day delivery.  If you want to receive your order on the same day, make sure you place it before 11 am.  </p>
                <p> Give us a call for any enquiries.</p>
                <H2>Pick up Points</H2><br>
                   <h6> 000 Church Street, Parramatta</h6>
                   <h6> 000 George Street, Sydney CBD</h6>
                   <h6> 000 Pitts Street, Blacktown</h6>
                <a href="#" class="btn btn-outline-secondary btn-lg" role="button">Contact US now</a>
            </div>
            <div class="col-lg-6 text-sm-center d-none d-lg-block">
              <img src="img/flowerd.jpg" alt="iphone" height="500" width="500">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="feature-three" id="about">
      <div class="container">
        <div class="feature-content">
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block">
              <img src="img/image2.jpg" alt="macbook">
            </div>
            <div class="col-lg-5 ml-lg-auto">
              <h6>The wow factor</h6>
              <h2>Flowers especially for you</h2>
              <p class="lead">Flower Power is a boutique Sydney Florist with a wide range of flowers that can be purchased for any occasion and are sure to give joy and happiness to the recipient.</p>
               <p> We thank you for your business in advance and am thrilled to have the opportunity to send flowers across Sydney for every one of our customers.</p>
              <P>We use nothing but the best flowers and they are premium-grade, as you will see when you receive them. We are open for contactless flower delivery across Sydney from Monday to Saturday and you can also pick up your delivery from our store. </p>
              <a href="" class="btn btn-outline-primary btn-lg" role="button">View our range</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            &copy; Flower Power<br />
            
          </div>
          <div class="col-md-2">
            <h6>Our product</h6>
            <ul class="list-unstyled">
              <li><a href="#">Our Services</a></li>
              <li><a href="backend/index.php">Sign in</a></li>
            </ul>
          </div>
          <div class="col-md-2">
              <h6>Our team</h6>
              <ul class="list-unstyled">
                <li><a href="#about">About Us</a></li>
                <li><a href="#about">Our Partners</a></li>
                <li><a href="#pickup">Pickup Locations</a></li>
              </ul>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>