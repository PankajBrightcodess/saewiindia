<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include_once 'headlink.php' ?>
    <title>Welcome to Finance Portal</title>

</head>

<body>
    <section class="login">
    <div class="container content-justify-center">
                    <div class="row ">
                        <div clas="col-md-6">
                            <form action="loginProcess.php" method="post">
                                <div class="form-group">
                                    <h2>Login</h2>
                                    <p>Enter Login Details</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="User Name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
                                    </div>
                                    <div class="text-center">Don't have an account? <a href="register.php">Register Here</a></div>
                                </div>
                            </form>
                        </div>
                        <div clas="col-md-6">
                            <img class="svg11 " src="images/download.jfif" alt="ssss">
                        </div>


                    </div>


                </div>
    </section>

</body>

</html>