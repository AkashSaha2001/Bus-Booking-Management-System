<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>front body</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/slideshow.css">
    <link rel="stylesheet" type="text/css" href="css/Font-icon Tab.css">
    <link rel="stylesheet" type="text/css" href="javascript/index.js">
</head>

<body>
    <header>
        <div class="title">
            <h1>Easy Journey</h1>
        </div>
        <div class="title1">
            <h1>STOP LOOKING</h1>
        </div>
        <div class="title2">
            <h1>START TRACKING!</h1>
        </div>
        <div class="title3">
            <h1>India's largest online bus ticketing platform.</h1>
        </div>
        <div class="title4">
            <h1>trusted by over 1 million indians.</h1>
        </div>

        <!--sidebar part-->

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
            <script scr="js/jquery.min.js" charset="utf-8"></script>
        </head>

        <body>

            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
            <div class="side-bar">
                <div class="close-btn">
                    <i class="fas fa-times"></i>
                </div>
                <div class="menu">
                    <div class="item"><a href="user dashboard.php"><i class="fas fa-desktop"></i>Dashboard</a></div>
                    <div class="item">
                        <a class="sub-btn"><i class="fas fa-table"></i>Bus List<i
                                class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="#" class="sub-item">Daily</a>
                            <a href="#" class="sub-item">Weekly</a>
                            <a href="#" class="sub-item">Monthly</a>
                        </div>
                    </div>
                    <div class="item"><a href="login.php"><i class="fas fa-th"></i>Login</a></div>
                    <div class="item">
                        <a class="sub-btn"><i class="fas fa-cogs"></i>Settings<i
                                class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="#" class="sub-item">Profile</a>
                            <a href="#" class="sub-item">My Booking</a>
                        </div>
                    </div>
                    <div class="item"><a href="aboutus.php"><i class="fas fa-info-circle"></i>About</a></div>
                </div>
            </div>
 
            <script type="text/javascript">
            $(document).ready(function() {
                //jquery for toggle sub menus
                $('.sub-btn').click(function() {
                    $(this).next('.sub-menu').slideToggle();
                    $(this).find('.dropdown').toggleClass('rotate');
                });

                //jquery for expand and collapse the sidebar
                $('.menu-btn').click(function() {
                    $('.side-bar').addClass('active');
                    $('.menu-btn').css("visibility", "hidden");
                });

                $('.close-btn').click(function() {
                    $('.side-bar').removeClass('active');
                    $('.menu-btn').css("visibility", "visible");
                });
            });
            </script>


            <!--sidebar part-->
            <div class="main">
                <div class="logo">
                    <img src="/bus booking/logo/logo.png">
                </div>
                <ul>
                    <li> <a href="#"><i class="fas fa-house-user"></i> Home</a></li>
                    <li> <a href="services.php"><i class="fab fa-servicestack"></i> Services</a></li>
                    <li> <a href="aboutus.php"><i class="far fa-address-card"></i> About Us</a></li>
                    <li> <a href="contactus.php"><i class="far fa-address-book"></i> Contact</a></li>
                    <li> <a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                </ul>

                <form method='post'>
                    <div class="search">
                        <div class="from">
                            <li><input type="text" name="from" placeholder="From"></li>
                        </div>

                        <div class="to">
                            <li><input type="text" name="to" placeholder="To"></li>
                        </div>
                       <section>
                       <input type="submit" name="submit" value="SEARCH"/>
                       </section>
                        <a href="all bus.php"><i class="fas fa-bus"></i> All Buses</a>
                    </div>
                </form>
                <center>
                    <div class="table">
                        <table border="1">

                            <tr>
                                <td>Bus Name</td>
                                <td>From</td>
                                <td>To</td>
                                <td>Date</td>
                                <td>Time</td>
                                <td>Meridiem</td>
                                <td>Type</td>
                                <td>Period</td>
                                <td>Prize</td>
                            </tr> <br>

                            <?php
$connection = mysqli_connect("localhost","root","","bus booking");
$db = mysqli_select_db($connection, 'bus');
if(isset($_POST['submit']) && ($_POST['submit']=='SEARCH'))
{
    $source = $_POST['from'];
    $destination=$_POST['to'];
    $query = "select * from bus where source='$source' and destination='$destination'";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run))
     {
        ?>
                            <tr>
                                <td> <?php echo $row['BusName']; ?></td>
                                <td> <?php echo $row['source']; ?></td>
                                <td> <?php echo $row['destination']; ?></td>
                                <td> <?php echo $row['date1']; ?></td>
                                <td> <?php echo $row['time1']; ?></td>
                                <td> <?php echo $row['meridiem']; ?></td>
                                <td> <?php echo $row['type']; ?></td>
                                <td> <?php echo $row['period']; ?></td>
                                <td> <?php echo $row['Prize']; ?></td>
                                <td><a href="booking.php?p_id=<?php echo $row['id'] ;?>">Book</a></td>
                            </tr>
                            <?php
    }
}
?>
                        </table>
                    </div>
                </center>
                <!--PHP end -->


                <!--slideshow -->

                <!-- <link rel="stylesheet" type="text/css" href="css/slideshow.css">
  <div class="slideshow">

    <div class="img-slider">
      <div class="slide active">
        <img src="1.jpg" alt="">
        <div class="info">
          <h2>Slide 01</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="slide">
        <img src="2.jpg" alt="">
        <div class="info">
          <h2>Slide 02</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="slide">
        <img src="3.jpg" alt="">
        <div class="info">
          <h2>Slide 03</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="slide">
        <img src="4.jpg" alt="">
        <div class="info">
          <h2>Slide 04</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="slide">
        <img src="5.jpg" alt="">
        <div class="info">
          <h2>Slide 05</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>
    </div>

    <script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 10000);
      }
      repeater();
    }
    repeat();
    </script>

  </div>  
      -->

                <!--slideshow -->


                <!--Footer part-->
                <footer>
                    <div class="main-content">
                        <div class="left box">
                            <h2>About us</h2>
                            <div class="content">
                                <p style="color:black">This is our Bus booking website</p>
                                <div class="social">
                                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                    <a href="#"><span class="fab fa-youtube"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="center box">
                            <h2>Address</h2>
                            <div class="content">
                                <div class="place">
                                    <span class="fas fa-map-marker-alt"></span>
                                    <span class="text" style="color:black">Barasat, North 24 Pgs</span>
                                </div>
                                <div class="phone">
                                    <span class="fas fa-phone-alt"></span>
                                    <span class="text" style="color:black">+91-6289061862</span>
                                </div>
                                <div class="email">
                                    <span class="fas fa-envelope"></span>
                                    <span class="text" style="color:black">TeamWork@gmail.com</span>
                                </div>
                            </div>
                        </div>

                        <div class="right box">
                            <h2>Contact us</h2>
                            <div class="content">
                                <form action="#">
                                    <div class="email">
                                        <div class="text" style="color:black">Email *</div>
                                        <input type="email" required>
                                    </div>
                                    <div class="msg">
                                        <div class="text" style="color:black">Message *</div>
                                        <textarea rows="2" cols="25" required></textarea>
                                    </div>
                                    <div class="btn">
                                        <button type="submit" style="color:black">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <center>
                            <span class="credit">Created By <a href="#">Kingston Polytechnic College</a> | </span>
                            <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
                        </center>
                    </div>
                </footer>


                <!--End footer-->
                </table>
    </header>
</body>

</html>