<?php
        session_start();
        if(!(isset($_SESSION['email']))){
            header('location:login.php');
        }
        include 'database.php';


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'headlink.php';?> 
    <link rel="stylesheet" href="css/style.css">
    <title>Contact</title>
  </head>
  <body>
    <?php include 'admin-menu.php';?>
    <section class="pages" id="contact">
        <div class="container-fluid">
              <div class="jo">
            <div class="row">
              <div class="col-md-12">
                <div class="registration-form">
                  <h4>DASHBOARD</h4><hr>
                
                </div>
              </div>
            </div>
          </div>
            </div>
           </div>
        </div>
      </section>
      
  </body>
</html>