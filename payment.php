<?php 
session_start();

include'database.php';

 $sql = "select * from sa_registration where id = '$_SESSION[last_inst_id]'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
include 'payment_constant.php';
$someprice = $row['amount'];
$paisaprice = $someprice*100;
$orderno = $row['order_no'];
$custname = $row['firstname'];
$productinfo = 'Payment for Admission';
$txnid = time();
$surl = "payment-success.php";
$furl ="payment-success.php" ;
$key_id = API_KEY;
$currency_code = 'INR';
$total = $paisaprice; 
$amount = $someprice;
$merchant_order_id = strtoupper(random_string(8)).random_number(8).random_string(4);
$card_holder_name = $custname;
$email =  $row['email'];
$phone = $row['contactno'];
$name = "Customer of $custname - $orderno";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>S I</title>
    <?php  include 'headlink.php'; ?>
  </head>
  <body style="background: #009740;">
<section class="payment-page">  
    <div class="container">
    <div class="row" style='background-color:#009740;'>
        <div class="col-md-1"></div>
        <div class="col-md-10 p-3">   
            <h3 style="color:#fff;">Make Payment</h3><hr/>   
            <div class="row">
                <div class="col-md-12 card p-3">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <h3><?php echo ucwords($row['firstname']);?></h3>
                            <p class='mb-0' style='font-size:14px'><?php echo $row['email'];?></p>
                            <p class='mb-0' style='font-size:14px'>+91 <?php echo $row['contactno'];?></p>
                        </div>
                        
                    </div><hr/>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <u><h5>Order Details</h5></u>
                                <div class="form-row">
                                    <label for="" class="col-6 col-md-6">Order No :</label>
                                    <p class='col-6 col-md-6'><?php echo $row['order_no'];?></p>
                                </div>
                                <div class="form-row">
                                    <label for="" class="col-6 col-md-6">Order Total Amount:</label>
                                    <p class='col-6 col-md-6 text-danger' style='font-size:20px;font-weight:600'>Rs.<?php echo $row['amount'];?></p>
                                </div>
                                <div class="form-row p-2">
                                    <div class="col-1 col-md-2"></div>
                                    <div class="col-10 col-md-8 text-center">
                                        <form action='payment-success.php' id="razorpay-form" method="post">
                                        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
                                        <input type="hidden" name="merchant_order_id" id="merchant_order_id" value="<?php echo $merchant_order_id; ?>"/>
                                        <input type="hidden" name="merchant_trans_id" id="merchant_trans_id" value="<?php echo $txnid; ?>"/>
                                        <input type="hidden" name="merchant_product_info_id" id="merchant_product_info_id" value="<?php echo $productinfo; ?>"/>
                                        <input type="hidden" name="merchant_surl_id" id="merchant_surl_id" value="<?php echo $surl; ?>"/>
                                        <input type="hidden" name="merchant_furl_id" id="merchant_furl_id" value="<?php echo $furl; ?>"/>
                                        <input type="hidden" name="card_holder_name_id" id="card_holder_name_id" value="<?php echo $card_holder_name; ?>"/>
                                        <input type="hidden" name="merchant_total" id="merchant_total" value="<?php echo $total; ?>"/>
                                        <input type="hidden" name="merchant_amount" id="merchant_amount" value="<?php echo $amount; ?>"/>
                                        <input type="hidden" name="order_id" id="order_id" value="<?php echo $merchant_order_id; ?>">
                                        <input  id="submit-pay" type="button" onclick="razorpaySubmit(this);" value="PAY NOW" class="btn btn-sm btn-success" />
                                        </form>
                                    </div>
                                    <div class="col-1 col-md-2"></div>
                                </div>                            
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    
                </div>
            </div>                 
        </div>
        <div class="col-md-1"></div>
    </div>
    
    </div>
</section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>   
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<?php
function random_number($l){
	$num=range(0,9);
	   shuffle($num);
	   $res="";
	   for ($i=0; $i<$l; $i++) {      
		  $res.=$num[$i];    
	   }    
	   return ($res);
	}
	function random_string($length){
		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randstring = '';
		for ($i = 0; $i < $length; $i++) {
			$randstring .= $characters[rand(0, strlen($characters)-1)];
		}
		return $randstring;
	}


?>
     <script>
    var razorpay_options = {
        key: "<?php echo $key_id; ?>",
        amount: "<?php echo $total; ?>",
        name: "<?php echo $name; ?>",
        description: "Order # <?php echo $merchant_order_id; ?>",
        netbanking: true,
        currency: "<?php echo $currency_code; ?>",
        prefill: {
        name:"<?php echo $card_holder_name; ?>",
        email: "<?php echo $email; ?>",
        contact: "<?php echo $phone; ?>"
        },
        notes: {
        soolegal_order_id: "<?php echo $merchant_order_id; ?>",
        },
        handler: function (transaction) {
            document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
            document.getElementById('razorpay-form').submit();
        },
        "modal": {
            "ondismiss": function(){
                location.reload()
            }
        }
    };
    var razorpay_submit_btn, razorpay_instance;

    function razorpaySubmit(el){
        if(typeof Razorpay == 'undefined'){
        setTimeout(razorpaySubmit, 200);
        if(!razorpay_submit_btn && el){
            razorpay_submit_btn = el;
            el.disabled = true;
            el.value = 'Please wait...';  
        }
        } else {
        if(!razorpay_instance){
            razorpay_instance = new Razorpay(razorpay_options);
            if(razorpay_submit_btn){
            razorpay_submit_btn.disabled = false;
            razorpay_submit_btn.value = "Pay Now";
            }
        }
        razorpay_instance.open();
        }
    }  

    </script>
  </body>
</html>