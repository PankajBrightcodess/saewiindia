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
              <div class="col-md-12">
                <div class="registration-form">
                  <h4>Registration Form</h4><hr>
                  <form method="post" action="process.php">
                      <span>Full Name<label>*</label> :</span>
                      <div class="row">
                          
                          <div class="col-md-4"><input type="text" name="firstname" class="form-control my-2 py-2" required="" placeholder="First Name"></div>
                          <div class="col-md-4"><input type="text" name="middlename" class="form-control my-2 py-2" placeholder=" Middle Name"></div>
                          <div class="col-md-4"><input type="text" name="lastname" class="form-control my-2 py-2" placeholder="Last Name"></div>
                      </div>
                      <div class="row">
                          <div class="col-md-6"><span>Father Name<label>*</label> :</span><input type="text" uppercase name="fathername" class="form-control my-2 py-2" required="" placeholder="Father Name"></div>
                          <div class="col-md-6"><span>Mother Name<label>*</label> :</span><input type="text" name="mothername" class="form-control my-2 py-2" required="" placeholder=" Mother Name"></div>
                      </div>
                      <div class="row">
                          <div class="col-md-6"><span>DOB<label>*</label> :</span><input type="date" name="dob" class="form-control my-2 py-2" required="" placeholder="Date Of Birth"></div>
                          <div class="col-md-6"><span>Occupation<label>*</label> :</span><input type="text" name="occupation" class="form-control my-2 py-2" required="" placeholder="Occupation"></div>
                      </div>
                      <div class="row">
                           <div class="col-md-4"><span>Address Line 1<label>*</label> :</span><input type="text" name="address1" class="form-control my-2 py-2" required="" placeholder="Address Line 1"></div>
                          <div class="col-md-4"><span>Address Line 2 :</span><input type="text" name="address2" class="form-control my-2 py-2"  placeholder="Address Line 2"></div>
                          <div class="col-md-4"><span>Address Line 3 :</span><input type="text" name="address3" class="form-control my-2 py-2"  placeholder="Address Line 3"></div>
                      </div>
                      <div class="row">
                          <div class="col-md-4"><span>Town/City<label>*</label> :</span><input type="text" name="town" class="form-control my-2 py-2" required="" placeholder="Town/City"></div>
                          <div class="col-md-4"><span>State<label>*</label> :</span><input type="text" name="state" class="form-control my-2 py-2" required="" placeholder="State"></div>
                          <div class="col-md-4"><span>Pincode<label>*</label> :</span><input type="number" name="pincode" class="form-control my-2 py-2" required="" placeholder="Occupation"></div>
                      </div>
                      <div class="row">
                          <div class="col-md-4"><span>Contact Number<label>*</label> :</span> <input type="tel" name="contactno" class="form-control my-2 py-2" required="" placeholder="Contact No.:"></div>
                          <div class="col-md-4"><span>Email<label>*</label> :</span>   <input type="email" name="email" class="form-control my-2 py-2" required="" placeholder="Email"></div>
                          <div class="col-md-4"><span>Amount<label>*</label> :</span><input type="number" name="amount" class="form-control my-2 py-2" required="" placeholder="amount"></div>
                      </div>
                  <!-- <span style="margin-bottom: 0;">Upload Photo <label>*</label>:</span>
                  <input type="file" name="photo" class="form-control mb-2" required=""> -->
                  <button class="btn btn-block btn-success btn-sm" name="save" type="submit">Submit</button>
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