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
            <div class="panel panel-primary">
               <div class="panel-heading">Create a Conference Alerts organizer account and Add an Event</div>
               <div class="panel-body">
                  <p class="text-danger"><strong>Note: If you already have an organizer account, please <a href="#" data-toggle="modal" data-target="#login">login here</a> to add your events.</strong></p>
                  <p>
                     With an organizer account you will be able to add events to the Conference Alerts listings and manage the events you add. 
                  </p>
                  <div class="page-header">
                     Organizer details
                     <div class="help-block">(Please note, admin email address, physical address and username are for administration 
                        purposes only and will not be displayed on the Conference Alerts website.)</div>
                  </div>
                  <form method="post" class="form-horizontal">
                     <div class="form-group">
                        <label class="col-xs-3 control-label">Contact person <sup>*</sup></label>
                        <div class="col-xs-5">
                           <input type="text" class="form-control" name="" />
                        </div>
                     </div>

                     <div class="form-group">
                        <label class="col-xs-3 control-label">Name of organization <sup>*</sup></label>
                        <div class="col-xs-5">
                           <input type="text" class="form-control" name="" />
                        </div>
                     </div>

                     <div class="form-group">
                        <label class="col-xs-3 control-label">Organizer's physical address<sup>*</sup></label>
                        <div class="col-xs-5">
                           <input type="text" class="form-control" name="" />
                        </div>
                     </div>

                     <div class="form-group">
                        <label class="col-xs-3 control-label">Admin email address <sup>*</sup></label>
                        <div class="col-xs-5">
                           <input type="text" class="form-control" name="" />
                        </div>
                     </div>

                     <div class="form-group">
                        <label class="col-xs-3 control-label">User Name <sup>*</sup></label>
                        <div class="col-xs-5">
                           <input type="text" class="form-control" name="" />
                        </div>
                     </div>

                     <div class="form-group">
                        <label class="col-xs-3 control-label">Password <sup>*</sup></label>
                        <div class="col-xs-5">
                           <input type="password" class="form-control" name="password" />
                        </div>
                     </div>

                     <div class="form-group">
                        <label class="col-xs-3 control-label">Re-Type Password <sup>*</sup></label>
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