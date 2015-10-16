<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Test</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/mystyle.css">
   <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="owlcarousel/css/owl.carousel.css">
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="owlcarousel/js/owl.carousel.min.js"></script>
</head>
<body>
   <header class="header">
      <div class="topbar">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <div class="menu-top navbar-right">
                     <ul>
                        <li class="divider"><a href="#" data-toggle="modal" data-target="#signUp">signup</a></li>
                        <li class="divider"><a href="#" data-toggle="modal" data-target="#login">login</a></li>
                        <li><a href="faq.php">faq's</a></li>
                     </ul>
                  </div>                     
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6">
               <h4>
                  <a href="index.php"><img src="http://placehold.it/300x100" alt=""></a>
               </h4>
            </div>
            <div class="col-md-3 pull-right" style="margin-top: 30px;">
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for Journals">
                  <div class="input-group-addon btn btn-default"><strong>SEARCH</strong></div>
               </div>                 
            </div>
         </div>
      </div>
   </header>

   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-header">
               <strong>Frequently Asked Questions</strong>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                     <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#question1" aria-expanded="true" aria-controls="question1">
                         How do I add an event to Conference Alerts? 
                        </a>
                     </h4>
                  </div>
                  <div id="question1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                     <div class="panel-body">
                        To add an event to the Conference Alerts database, please visit the home page and click on Add Event. There is no charge for an ordinary listing, but at the end of the listing process, you will be offered a paid service for additional publicity. Please simply ignore this if it is not needed. 
                     </div>
                  </div>
               </div>
            </div>

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                     <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#question2" aria-expanded="true" aria-controls="question2">
                           Do I have to create an organizer account to add an event to Conference Alerts?
                        </a>
                     </h4>
                  </div>
                  <div id="question2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                     <div class="panel-body">
                        Yes. At the same time as adding an event you will be creating an organizer account. If you would like to add other events to Conference Alerts, and see them all listed together on one dashboard, please always log in to the same organizer account when adding events. 
                     </div>
                  </div>
               </div>
            </div>

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                     <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#question3" aria-expanded="true" aria-controls="question3">
                           How do I subscribe to Conference Alerts? 
                        </a>
                     </h4>
                  </div>
                  <div id="question3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                     <div class="panel-body">
                        To subscribe to receive conference information in your areas of interest, please visit the Conference Alerts home page and click on Subscribe. You will begin receiving conference information after you have confirmed your subscription. 
                     </div>
                  </div>
               </div>
            </div>

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
               <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                     <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#question4" aria-expanded="true" aria-controls="collapseFour">
                           How do I log in to the new system if I subscribed using the old website?  
                        </a>
                     </h4>
                  </div>
                  <div id="question4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                     <div class="panel-body">
                        The first time you log in to the new system, you should use the email address with which you subscribed to Conference Alerts as your username, and your PIN as your password. Once you are logged in to the system, you will be able to change your password if you want to. 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <footer class="footer">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <ul class="list-inline">
                  <li><a href="#">Add Event</a></li>
                  <li><a href="#">Promote Event</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Terms Of Use</a></li>
                  <li><a href="#">Faq's</a></li>
                  <li class="pull-right">Powered by<a href="https://www.sibihost.com/">&nbsp;Sibi Host</a></li>
               </ul>
            </div>
         </div>
      </div>
   </footer>

   <!-- Modal -->
   <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="signUpLabel">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="signUpLabel">Test</h4>
         </div>
         <div class="modal-body">
            <!-- The form is placed inside the body of modal -->
            <form id="loginForm" method="post" class="form-horizontal">
               <div class="form-group">
                  <label class="col-xs-3 control-label">First Name</label>
                  <div class="col-xs-5">
                     <input type="text" class="form-control" name="" />
                  </div>
               </div>

               <div class="form-group">
                  <label class="col-xs-3 control-label">Last Name</label>
                  <div class="col-xs-5">
                     <input type="text" class="form-control" name="" />
                  </div>
               </div>

               <div class="form-group">
                  <label class="col-xs-3 control-label">User Name</label>
                  <div class="col-xs-5">
                     <input type="text" class="form-control" name="" />
                  </div>
               </div>

               <div class="form-group">
                  <label class="col-xs-3 control-label">Email Address</label>
                  <div class="col-xs-5">
                     <input type="text" class="form-control" name="" />
                  </div>
               </div>

               <div class="form-group">
                  <label class="col-xs-3 control-label">Password</label>
                  <div class="col-xs-5">
                     <input type="password" class="form-control" name="password" />
                  </div>
               </div>

               <div class="form-group">
                  <label class="col-xs-3 control-label">Re-Type Password</label>
                  <div class="col-xs-5">
                     <input type="password" class="form-control" name="password" />
                  </div>
               </div>

               <div class="form-group">
                  <div class="col-xs-5 col-xs-offset-3">
                     <div class="checkbox">
                        <label>
                           <input type="checkbox" name="" value="" /> Subscribe for news letter
                        </label>
                     </div>
                  </div>
               </div>

               <div class="form-group">
                  <div class="col-xs-5 col-xs-offset-3">
                     <button type="submit" class="btn btn-primary">submit</button>
                  </div>
               </div>
            </form>            
         </div>
         </div>
      </div>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="loginLabel">Login</h4>
         </div>
         <div class="modal-body">
            <!-- The form is placed inside the body of modal -->
            <form id="loginForm" method="post" class="form-horizontal">
               <div class="form-group">
                  <label class="col-xs-3 control-label">User Name</label>
                  <div class="col-xs-5">
                     <input type="text" class="form-control" name="" />
                  </div>
               </div>

               <div class="form-group">
                  <label class="col-xs-3 control-label">Password</label>
                  <div class="col-xs-5">
                     <input type="password" class="form-control" name="password" />
                  </div>
               </div>

               <div class="form-group">
                  <div class="col-xs-5 col-xs-offset-3">
                     <button type="submit" class="btn btn-primary">submit</button>
                  </div>
               </div>
            </form>            
         </div>
         </div>
      </div>
   </div>

   <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      nav:false,
      responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
      }
      })
   </script>

</body>
</html>