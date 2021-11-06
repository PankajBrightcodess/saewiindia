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
    <?php include 'menu.php';?>
    <section class="pages" id="contact">
        <div class="container-fluid">
              <div class="jo">
            <div class="row">
              <div class="col-md-4">
                <div class="registration-form">
                  <h4>Certificate Form</h4><hr>
                  <form method="post" action="certificate.php">
                      <span>Enter Roll No<label>*</label> :</span>
                      <div class="row" style="text-align: center;">
                          
                          <div class="col-md-12"><input type="text" name="id" class="form-control my-2 py-2" required="" placeholder="Enter Roll No"></div>

                          
                      </div>
                      <div class="row" style="text-align: center;">
                        <div class="col-md-12">
                          <button class="btn btn-block btn-success btn-sm" name="save" type="submit">Submit</button> 
                        </div>
                      </div>

                     
                  <!-- <span style="margin-bottom: 0;">Upload Photo <label>*</label>:</span>
                  <input type="file" name="photo" class="form-control mb-2" required=""> -->
                </form>
                </div>
              </div>
            </div>
          </div>
            </div>
            <div class="clearfix"></div>
           </div>
        </div>
      </section>
       <section  class="map">
      <div class="row">
        <div class="col-lg-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.9013727560646!2d85.35866531426711!3d23.355587484785442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e3349fc4d7a9%3A0x99d0c7ee497006fd!2sBrightcode%20Software%20Services%20Pvt.%20Ltd.%20-%20Software%20Company%20in%20Ranchi!5e0!3m2!1sen!2sin!4v1619588311103!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <?php include'footer.php';?>
    <?php include'footerlink.php';?>
  </body>
</html>