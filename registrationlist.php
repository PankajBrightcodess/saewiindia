<?php
        session_start();
        if(!(isset($_SESSION['email']))){
            header('location:login.php');
        }
        include 'database.php';
        $result = mysqli_query($conn,"SELECT * FROM sa_registration where payment_status='1'");


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
                  <h4>Registration List</h4><hr>
                  <div class="table-responsive-lg">
                  <?php
                        if (mysqli_num_rows($result) > 0) {
                    ?>
                            <table class="table">
                               <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Name</th>
                                       <th>Father Name</th>
                                       <th>Mother Name</th>
                                       <th>DOB</th>
                                       <th>Occupation</th>
                                       <th>Addreess</th>
                                       <th>Contact No</th>
                                       <th>Email</th>
                                       <th>payment</th>
                                   </tr>
                                   </tr>
                               </thead>
                               <tbody>
                               <?php
                                 $i=1;
                                   while($row = mysqli_fetch_array($result)) {                                      ?>
                                      <tr>
                                          <td><?php echo $i;?></td>
                                            <td><?php echo $row["firstname"].$row["middlename"].$row["lastname"]; ?></td>
                                            <td><?php echo $row["fathername"]; ?></td>
                                            <td><?php echo $row["mothername"]; ?></td>
                                            <td><?php echo $row["dob"]; ?></td>
                                            <td><?php echo $row["occupation"]; ?></td>
                                            <td><?php echo $row["address1"]; ?></td>
                                            <td><?php echo $row["contactno"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                          <td><a class="btn btn-sm btn-success">Paid</a>&nbsp;&nbsp;<a href="admitcard.php<?php echo '/?id='.$row["id"];?>" class="btn btn-sm btn-warning">Admit Card</a></td> 
                                      </tr>
                                      <?php
                                            $i++;
                                            }?>
                               </tbody>
                            </table>
                            <?php
                                }
                                else{
                                    echo "No result found";
                                }
                                ?>
                  </div>
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