<!DOCTYPE html>
<html lang="en">

  <head>
  <title>Life's secret</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap core CSS 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
<!--
I DELETE this row #AYOUB
    <link href="css/agency.min.css" rel="stylesheet">
-->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/CSS.css" rel="stylesheet">

  </head>

  <body id="page-top" style="background-image: url('img/Background/b1.jpg');  ">

     <header class="masthead">
      <div class="" >
        <img class="mySlides" src="img/pic_test1.png" style="width:100%">
        <img class="mySlides" src="img/pic_test2.png" style="width:100%">
        <img class="mySlides" src="img/pic_test3.png" style="width:100%">
        <img class="mySlides" src="img/pic_test4.png" style="width:100%">
      </div>
    </header> 
                    <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                      var i;
                      var x = document.getElementsByClassName("mySlides");
                      for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";  
                      }
                      myIndex++;
                      if (myIndex > x.length) {myIndex = 1}    
                      x[myIndex-1].style.display = "block";  
                      setTimeout(carousel, 2500);    
                    }
                    </script>

      <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <!--
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>  
          -->
          <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img src="./img/logos/Lifes_Secret.jpg" class="rounded-circle" alt="Cinque Terre" height="60px" width="60px">
          </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li>
          <div class="login-container">
  <button type="button" class="btn btn-default btn-lg" id="myBtn"> تسجيل الدخول  </button>

          </div>
</li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services"> خدماتنا </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Recipes"> الوصفات  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Healthy_meals_are_available"> أماكن توفر الوجبات الصحية </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#How_to_subscribe"> كيفية الاشتراك  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team"> الفريق  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"> تواصل معنا  </a>
            </li>
            
          </ul>

        </div>
      </div>
    </nav> 


    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"> خدماتنا </h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
             <!-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>  -->
            </span>
            <h4 class="service-heading"> أخصائي تغذية صحية  </h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <!--   <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>  -->
            </span>
            <h4 class="service-heading"> وصفات صحية  </h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <!--   <i class="fas fa-lock fa-stack-1x fa-inverse"></i>  -->
            </span>
            <h4 class="service-heading"> متابعة دورية  </h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Recipes -->
    <section class="bg-light" id="Recipes">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"> الوصفات   </h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 Recipes-item">
            <a class="Recipes-link" data-toggle="modal" href="#RecipesModal1">
              <div class="Recipes-hover">
                <div class="Recipes-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Recipes/Grilled_chicken_with_lemon_and_oregano.jpg" alt="">
            </a>
            <div class="Recipes-caption">
              <h4>  دجاج مشوي بالليمون والأريغانو للرجيم       </h4>
              <p class="text-muted"> دجاج مشوي بالليمون والأريغانو للرجيم .. يعتبر الدجاج المشوي من الأكلات المفضل تناولها أثناء اتباعك للحمية، نقدم لك من مطبخ سيدتي صدور الدجاج بتتبيلة الليمون والأوريغانو الشهية </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Recipes-item">
            <a class="Recipes-link" data-toggle="modal" href="#RecipesModal2">
              <div class="Recipes-hover">
                <div class="Recipes-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Recipes/Grilled_chicken_tray_with_broccoli.JPG" alt="">
            </a>
            <div class="Recipes-caption">
              <h4> صينية الدجاج المشوي مع البروكلي للرجيم </h4>
              <p class="text-muted"> صينية الدجاج المشوي مع البروكلي للرجيم .. نقدم لك من مطبخ سيدتي طبق صحي جداً، وغني بالفوائد، كما أنه قليل الدسم، ومناسب جداً لرجيمك المثالي </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Recipes-item">
            <a class="Recipes-link" data-toggle="modal" href="#RecipesModal3">
              <div class="Recipes-hover">
                <div class="Recipes-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Recipes/Sauteed_vegetables.jpg" alt="">
            </a>
            <div class="Recipes-caption">
              <h4> خضار سوتيه للرجيم </h4>
              <p class="text-muted"> خضار سوتيه للرجيم .. بالتأكيد تحضرين طبق من السلطة يومياً على سفرة الرجيم، بإمكانك استبدال هذا الطبق بتشكيلة من خضار سوتيه القليلة السعرات الحرارية والمناسبة لرجيمك المثالي </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Recipes-item">
            <a class="Recipes-link" data-toggle="modal" href="#RecipesModal4">
              <div class="Recipes-hover">
                <div class="Recipes-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Recipes/Hot_chocolate_with_less_calories.jpg" alt="">
            </a>
            <div class="Recipes-caption">
              <h4> هوت شوكليت بسعرات حرارية أقل </h4>
              <p class="text-muted"> هوت شوكليت بسعرات حرارية أقل .. يعرفك مطبخ سيدتي على أشهى وصفات المشروبات الساخنة المناسبة للرجيم، حضريه بخطوات ولا أسهل وطعم ولا أشهى </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Recipes-item">
            <a class="Recipes-link" data-toggle="modal" href="#RecipesModal5">
              <div class="Recipes-hover">
                <div class="Recipes-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Recipes/Black_pepper_steak.jpg" alt="">
            </a>
            <div class="Recipes-caption">
              <h4> ستيك بصوص الفلفل الأسود للرجيم </h4>
              <p class="text-muted"> ستيك بصوص الفلفل الأسود للرجيم.. لحم الستيك من المكونات التي ينصح بها خبراء التغذية تناولها أثناء اتباع الرجيم، تعلمي مع مطبخ سيدتي تحضير وجبة شهية ولذيذة لرجيمك المثالي </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Recipes-item">
            <a class="Recipes-link" data-toggle="modal" href="#RecipesModal6">
              <div class="Recipes-hover">
                <div class="Recipes-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Recipes/Pasta_with_avocado_sauce.jpg" alt="">
            </a>
            <div class="Recipes-caption">  <!--  portfolio  -->
              <h4> المعكرونة بصلصة الأفوكادو </h4>
              <p class="text-muted"> المعكرونة بصلصة الأفوكادو.. حضري على السفرة وصفة خفيفة وشهية بنفس الوقت من المكرونة، بمذاق صلصة الأفوكادو التي تعطي للمكرونة طعم مختلف جداً وساحر </p>
            </div>
          </div>
        </div>
        <a  class="btn btn-primary btn-block" href="Recipes.html"> المزيد من الوصفات  </a>
      </div>
    </section>

        <!-- Healthy_meals_are_available -->
    <section class="bg-light" id="Healthy_meals_are_available">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"> أماكن توفر الوجبات الصحية   </h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 Healthy_meals_are_available-item">
            <a class="Healthy_meals_are_available-link" data-toggle="modal" href="#Healthy_meals_are_availableModal1">
              <div class="Healthy_meals_are_available-hover">
                <div class="Healthy_meals_are_available-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Healthy_meals_are_available/Diet_shop.jpg" alt="">
            </a>
            <div class="Healthy_meals_are_available-caption">
              <h4>  The Diet Shop     </h4>
              <p class="text-muted"> Test_maps </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 Healthy_meals_are_available-item">
            <a class="Healthy_meals_are_available-link" data-toggle="modal" href="#Healthy_meals_are_availableModal2">
              <div class="Healthy_meals_are_available-hover">
                <div class="Healthy_meals_are_available-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Healthy_meals_are_available/Get_Fit.jpg" alt="">
            </a>
            <div class="Healthy_meals_are_available-caption">
              <h4> Get Fit  </h4>
              <p class="text-muted"> Test_maps  </p>
            </div>
          </div>
          
        
         
          
        </div>
        <a class="btn btn-primary btn-block" href="Healthy_meals_are_available.php"> المزيد من أماكن توفير الوجبات الصحية  </a>
      </div>
    </section>



    <!-- How_to_subscribe -->
    <section id="How_to_subscribe">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"> كيفية الاشتراك   </h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/How_to_subscribe/soon.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2009-2011</h4>
                    <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/How_to_subscribe/soon.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>March 2011</h4>
                    <h4 class="subheading">An Agency is Born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/How_to_subscribe/soon.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>December 2012</h4>
                    <h4 class="subheading">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/How_to_subscribe/soon.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 2014</h4>
                    <h4 class="subheading">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                   <a href="signUP.php"><img class="rounded-circle img-fluid" src="img/How_to_subscribe/sign_up.png" alt=""></a>
                 <!--
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                 -->
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"> فريقنا المدهش </h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.1.jpg" alt="">
              <h4>Kay Garland</h4>
             <!--
              <p class="text-muted">Lead Designer</p>
            -->
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/2.1.jpg" alt="">
              <h4>Larry Parker</h4>
              <!--
              <p class="text-muted">Lead Marketer</p>
            -->
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
              <h4>Diana Pertersen</h4>
            <!--
              <p class="text-muted">Lead Developer</p>
            -->
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">تواصل معنا  </h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required"data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Growth Tech 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/growthtech10/?notif_id=1544282390823075&notif_t=page_fan" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        <!--  <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div> -->
        </div>
      </div>
    </footer>

    <!-- Recipes Modals -->   

    <!-- Modal 1 -->
    <div class="Recipes-modal modal fade" id="RecipesModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"> دجاج مشوي بالليمون والاوريجانو للرجيم </h2>
                  <p class="item-intro text-muted" dir="rtl"> دجاج مشوي بالليمون والأريغانو للرجيم .. يعتبر الدجاج المشوي من الأكلات المفضل تناولها أثناء اتباعك للحمية، نقدم لك من مطبخ سيدتي صدور الدجاج بتتبيلة الليمون والأوريغانو الشهية .</p>
                  <img class="img-fluid d-block mx-auto" src="img/Recipes/Grilled_chicken_with_lemon_and_oregano_2.PNG" alt="">
                  <p>
                    <div dir="rtl">
                      

                       <span class="Titles_of_recipes"> المقادير   </span><br>
                      - صدر الدجاج : 2 صدر (فيليه / مدقوق قليلاً) <br>
                      - البصل : 1 حبة (مفروم شرائح رفيعة جداً) <br>
                      - الثوم : فصّان (مفروم) <br>
                      - أوريغانو : ملعقة صغيرة (مجفف) <br>
                      - ملح : ربع ملعقة صغيرة  <br>
                      - فلفل أسود : ربع ملعقة صغيرة <br>
                      - عصير الليمون : 2 ملعقة كبيرة <br>
                      - بشر الليمون : 1 حبة <br>
                      - زيت الزيتون : 2 ملعقة كبيرة <br>
                      - مرق خضار : ثلث كوب <br>

                 <br>  <span class="Titles_of_recipes"> طريقة التحضير   </span><br>
                      1. اخلطي عصير الليمون مع بشر الليمون والزيت والملح والفلفل الأسود والأرويغانو والثوم والبصل في وعاء جيداً حتى تمتزج المكونات.
                      <br>
                      2. أضيفي الدجاج وغطي الطبق واتركي الدجاج منقوع لمدة ساعة على الأقل.
                      <br>
                      3. ضعي الدجاج مع التتبيلة في طبق الفرن وأضيفي المرق وغطي الطبق بورق القصدير وأدخليه للفرن على درجة حرارة 300 لمدة 30 دقيقة.
                      <br>
                      4. ازيلي ورق القصدير وحمري الوجه.
                      <br>
                      5. قدمي الدجاج ساخناً إلى جانب الخضار السوتيه أو السلطة حسب الرغبة.
                      <br>



                    </div>

                  </p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                     أغلق </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="Recipes-modal modal fade" id="RecipesModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"> صينية الدجاج المشوي مع البروكلي للرجيم </h2>
                  <p class="item-intro text-muted">صينية الدجاج المشوي مع البروكلي للرجيم .. نقدم لك من مطبخ سيدتي طبق صحي جداً، وغني بالفوائد، كما أنه قليل الدسم، ومناسب جداً لرجيمك المثالي  </p>
                  <img class="img-fluid d-block mx-auto" src="img/Recipes/Grilled_chicken_tray_with_broccoli_2.jpg" alt="">
                  <p>

                     <div dir="rtl">
                      

                       <span class="Titles_of_recipes"> المقادير   </span><br>


                          - صدر الدجاج : 2 صدر (فيليه / مسلوق ومقطع مكعبات) <br>
                          - البصل : 1 حبة (مفروم) <br>
                          - البروكولي : كوب (مسلوق ومصفى) <br>
                          - القشطة : علبة (قليلة الدسم) <br>
                          - حساء البروكلي الجاهز : كيس (بودرة) <br>
                          - جبن الشيدر : كوب (قليل الدسم / مبشور) <br>
                          - المايونيز : 2 ملعقة كبيرة (لايت) <br>


                 <br>  <span class="Titles_of_recipes"> طريقة التحضير   </span><br>


                          1. اخلطي شوربة البروكلي والقشطة والمايونيز والجبن الشيدر والماء في الخلاط الكهربائي حتى تتجانس المكونات.
                          <br>
                          2. وزعي الدجاج في طبق الفرن ثم وزعي البروكلي.
                          <br>
                          3. صبي خليط الشوربة والجبن فوقه.
                          <br>
                          4. أدخلي الطبق للفرن على حرارة 160 درجة لمدة 25 دقيقة حتى تتحمر و يذوب الجبن.
                          <br>
                          5. قدميها ساخنة إلى جانب طبق من السلطة.
<br>

                    </div>




                  </p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                     أغلق </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="Recipes-modal modal fade" id="RecipesModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"> خضار سوتيه للرجيم </h2>
                  <p class="item-intro text-muted"> خضار سوتيه للرجيم .. بالتأكيد تحضرين طبق من السلطة يومياً على سفرة الرجيم، بإمكانك استبدال هذا الطبق بتشكيلة من خضار سوتيه القليلة السعرات الحرارية والمناسبة لرجيمك المثالي </p>
                  <img class="img-fluid d-block mx-auto" src="img/Recipes/Sauteed_vegetables_2.JPG" alt="">
                  <p>


                   <div dir="rtl">
                      


                      <span class="Titles_of_recipes"> المقادير   </span><br>

                      - زيت الزيتون : ملعقة كبيرة <br>
                      - الزبدة : ملعقة كبيرة <br>
                      - الثوم : فصّان (مهروس) <br>
                      - الفاصوليا الخضراء : كوب (مقطعة) <br>
                      - البروكولي : كوب (مقطع زهرات صغيرة) <br>
                      - الفلفل الأصفر : 1 حبة (مفروم مكعبات) <br>
                      - الفلفل الأخضر : 1 حبة (مفروم مكعبات) <br>
                      - البصل الأخضر : عود <br>
                      - الجزر : 1 حبة (كبير الحجم / مقشر ومفروم دوائر) <br>
                      - ملح : نصف ملعقة صغيرة <br>
                      - فلفل أسود : ربع ملعقة صغيرة <br>


                      <span class="Titles_of_recipes"> طريقة التحضير   </span><br>

                      1. سخني زيت الزيتون والزبدة في قدر على نار متوسطة وأضيفي الثوم وقلبي لمدة 5 دقائق حتى يصبح طري.
<br>
                      2. أضيفي الجزر والفلفل الملون والبروكلي والفاصوليا والبصل الأخضر وقلبي لمدة عدة دقائق.
<br>
                      3. أضيفي ماء ساخن واتركي المزيج يغلي لمدة 5 دقائق ثم صفي الخضار وأعيديها للقدر.
<br>
                      4. تبلي بالملح والفلفل وقلبي لمدة 5 دقائق أخرى وقدميه إلى جانب اللحم المشوي أو الدجاج. 
<br>

                    </div>




                  </p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                     أغلق </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="Recipes-modal modal fade" id="RecipesModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"> هوت شوكليت بسعرات حرارية أقل </h2>
                  <p class="item-intro text-muted"> هوت شوكليت بسعرات حرارية أقل .. يعرفك مطبخ سيدتي على أشهى وصفات المشروبات الساخنة المناسبة للرجيم، حضريه بخطوات ولا أسهل وطعم ولا أشهى </p>
                  <img class="img-fluid d-block mx-auto" src="img/Recipes/Hot_chocolate_with_less_calories_2.JPG" alt="">
                  <p>

                    <div dir="rtl">
                      

                      <span class="Titles_of_recipes"> المقادير   </span><br>

                  - بودرة الكاكاو : ملعقة كبيرة <br>
                  - العسل : ملعقة كبيرة <br>
                  - حليب : ثلاث أرباع الكوب (خالي الدسم) <br>
                  - ماء ساخن : ربع كوب <br>


                      <span class="Titles_of_recipes"> طريقة التحضير   </span><br>

                  1. اخلطي الكاكاو البودرة مع العسل والماء في فنجان.
<br>
                  2. أحضري مضرب واضربي الحليب، ثم أضيفيه إلى الكاكاو، واضربي مرة أخرى.
<br>
                  3. يمكن إضافة الكاكاو الخام على الوجه للتزيين. 
<br>

                    </div>

                  </p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                   <i class="fas fa-times"></i>
                     أغلق </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="Recipes-modal modal fade" id="RecipesModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"> ستيك بصوص الفلفل الأسود للرجيم </h2>
                  <p class="item-intro text-muted"> ستيك بصوص الفلفل الأسود للرجيم.. لحم الستيك من المكونات التي ينصح بها خبراء التغذية تناولها أثناء اتباع الرجيم، تعلمي مع مطبخ سيدتي تحضير وجبة شهية ولذيذة لرجيمك المثالي </p>
                  <img class="img-fluid d-block mx-auto" src="img/Recipes/Black_pepper_steak_2.JPG" alt="">
                  <p>

                    <div dir="rtl">
                      

                      <span class="Titles_of_recipes"> المقادير   </span><br>

                    - الستيك : 500 غراماً (فيليه) <br>
                    - فلفل أسود : ملعقة كبيرة (حبّ) <br>
                    - كريمة : كوب (سائلة / قليلة الدسم) <br>
                    - طحين : ملعقة كبيرة <br>
                    - ملح : نصف ملعقة صغيرة <br>
                    - الماء : 2 كوب <br>
                    - الزيت النباتي : 2 ملعقة كبيرة <br>
                    - فلفل أسود : ملعقة صغيرة (مطحون) <br>
                    - الزبدة : ملعقة كبيرة<br>


                      <span class="Titles_of_recipes"> طريقة التحضير   </span><br>

                    1. ضعي الماء في قدر على النار مع حبوب الفلفل الأسود واتركيه حتى يغلي وتقل كمية الماء.
<br>
                    2. تبلي اللحم بالملح والفلفل المطحون ثم حمري اللحم في مقلاة مع الزيت على الجهتين حتى تتحمر على نار عالية واتركيه جانباً.
<br>
                    3. في مقلاة على النار حمري الطحين مع الزبدة حتى يصبح ذهبي ثم أضيفي ماء سلق الفلفل بالتدريج مع التحريك حتى يصبح القوام سميكاً ومتماسكاً.
<br>
                    4. أضيفي اللحم المحمر واتركيها تغلي مع الصوص لمدة 10 دقائق.
<br>
                    5. أضيفي الكريمة واتركيها تغلي مع الخليط لمدة 10 دقائق أخرى وقدميه.
<br>

                    </div>


                  </p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                   <i class="fas fa-times"></i>
                     أغلق </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="Recipes-modal modal fade" id="RecipesModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"> المعكرونة بصلصة الأفوكادو </h2>
                  <p class="item-intro text-muted"> المعكرونة بصلصة الأفوكادو.. حضري على السفرة وصفة خفيفة وشهية بنفس الوقت من المكرونة، بمذاق صلصة الأفوكادو التي تعطي للمكرونة طعم مختلف جداً وساحر </p>
                  <img class="img-fluid d-block mx-auto" src="img/Recipes/Pasta_with_avocado_sauce_2.JPG" alt="">
                  <p>

                    <div dir="rtl">
                      

                      <span class="Titles_of_recipes"> المقادير   </span><br>

                    - المعكرونة : 350 غراماً <br>
                    - الأفوكادو : 2 حبة (كبير الحجم / ناضج، ومُقشَّر، ومقسَّم إلى أنصاف، مع نزع الأنوية منها، ومُقطَّع إلى قطع كبيرة) <br>
                    - أوراق الحبق : نصف كوب (الريحان / طازج) <br>
                    - ورق السبانخ : نصف كوب (صغير الحجم / مغسول) <br>
                    - الثوم : فصّان (مهروس) <br>
                    - عصير الليمون : 2 ملعقة كبيرة <br>
                    - ملح : ملعقة صغيرة <br>
                    - زيت الزيتون : 3 ملاعق كبيرة <br>
                    - البندورة الكرزية : 4 حبات (مُقطَّعة إلى أنصاف، للتزيين)<br>


                      <span class="Titles_of_recipes"> طريقة التحضير   </span><br>

                    1. تُضاف المعكرونة إلى قدر كبيرة حاوية الماء المغلي المُضاف إليه القليل من الملح، وتُسلق حسب الوقت المُدوَّن على العبوة.
<br>
                    2. تُعدُّ الصلصة، أثناء سلق المعكرونة، وفق الآتي: يُستخدم شريط الخلَّاط الكهربائي في خفق الأفوكادو، مع الحبق والسبانخ والثوم وعصير الليمون الحامض والملح، لنحو دقيقة، حتَّى الحصول على صلصة ناعمة. ويُصبُّ الزيت، مع الاستمرار في الخفق، حتَّى يتجانس الخليط. ويوضع هذا الأخير، جانبًا.
<br>
                    3. تُصفَّى المعكرونة في مصفاة، ثمَّ تنقل إلى وعاء، وتُضاف الصلصة إليها، مع التقليب.
<br>
                    4. طريقة التقديم: تُقدَّم المعكرونة على الفور. ويُزيَّن الطبق بأنصاف حبَّات البندورة الكرزيَّة.
<br>

                    </div>


                  </p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                     أغلق </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- Healthy_meals_are_available Modals -->   

    <!-- Modal 1 Healthy_meals_are_available -->
    <div class="Healthy_meals_are_available-modal modal fade" id="Healthy_meals_are_availableModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"> Test_maps </h2>
                  <p class="item-intro text-muted" dir="rtl"> Test_maps </p>
                  
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d245.35569795838092!2d13.191563882010703!3d32.88406137846252!2m3!1f309.5022624434379!2f9.572402858538716!3f0!3m2!1i1024!2i768!4f35!5e1!3m2!1sen!2sly!4v1544603006025" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  <p>
                    <div dir="rtl">
                      

                       <span class="Titles_of_recipes"> Test_maps   </span><br>
                    
                 <br>  <span class="Titles_of_recipes">  Test_maps   </span><br>
                  


                    </div>

                  </p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                     أغلق </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 Healthy_meals_are_available -->
    <div class="Healthy_meals_are_available-modal modal fade" id="Healthy_meals_are_availableModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"> Test_maps </h2>
                  <p class="item-intro text-muted">  Test_maps  </p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d700.5841125273146!2d13.209109745516297!3d32.885177337479064!2m3!1f105.88235294117601!2f19.811532792312804!3f0!3m2!1i1024!2i768!4f35!5e1!3m2!1sen!2sly!4v1544603906712" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  <p>

                     <div dir="rtl">
                      

                       <span class="Titles_of_recipes"> Test_maps   </span><br>


                         


                 <br>  <span class="Titles_of_recipes"> Test_maps    </span><br>


                          

                    </div>




                  </p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                     أغلق </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




<!--
LOGIN1
-->

<div class="container" dir="rtl" style="text-align: right;">
  
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="m-h" style="padding:35px 160px;">
          
          <h4> تسجيل الدخول  </h4> 
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" >
            <div class="form-group">
              <label for="usrname"> أسم الدخول  </label>
              <input type="text" class="form-control" id="usrname" placeholder=" أدخل الأسم  ">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>  كلمة المرور  </label>
              <input type="text" class="form-control" id="psw" placeholder=" أدخل كلمة المرور ">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked> تذكرني </label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>  الدخول   </button>
              <span>  نسيت   <a href="#"> كلمة المرور ؟ </a></span>
              <p></p>



          </form>
        </div>
        <div  style="background-color: #f9f9f9; text-align: center; "  >
          
          <p></p>
          
          <p> ليس لدي حساب  <a href="signUP.php">  التسجيل الان   </a></p>

          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal" style="padding: 10px; margin-left: 43% ">
          <span class="glyphicon glyphicon-remove"></span>  إغلاق   </button><br><br><br>
          
        </div>
      </div>
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>



<script src="js/JS.js"></script>



  </body>

</html>

