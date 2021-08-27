<style>
.navbar {
    background-color: #2E2E2E;
}
</style>

<main>
  <br><br>
  <section class="section pt-3 pb-4">
    <h1 class="text-center text-uppercase font-weight-bold  mt-5 mb-3 mt-4 wow fadeIn" data-wow-delay="0.2s">THANK YOU!</h1>
    <p class="text-center  text-uppercase font-weight-bold  wow fadeIn" data-wow-delay="0.2s">Your Order has been sucessfully submitted</p>
    <div class="line wow fadeIn container" data-wow-delay="0.2s"><hr></div>
    <br><br>
    <div class="container">
    <h4>What's next?</h4>
    <p>You should receive an email from our payment provider confirming the order.</p>
    <p>We will let you know once your order has been shipped via email.</p>
    <br>
    <br>
    Aggie, YourCoach.ie<br>
  </section>
  <br><br><br><br>
  <div class="text-center">
  <img src="https://yourcoach.ie/resources/img/logos/logo1.png" width="10%">
  </div>
  
</main>
<br><br><br><br><br><br>
<script type="text/javascript" src="./resources/mdb482/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./resources/mdb482/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./resources/mdb482/js/popper.min.js"></script>
<script type="text/javascript" src="./resources/mdb482/js/mdb.js"></script>

<?php
$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From: admin@yourcoach.ie" . "\r\n" .
	"Reply-To: admin@yourcoach.ie" . "\r\n" .
	"X-Mailer: PHP/" . phpversion();
	
	$to = "patrick.pulfer1@gmail.com, info@yourcoach.ie, patrick@pweb.solutions";
	$subject = "TIM Sale Ordered";
	
	$message = '<html><body>';
	$message = '<img src="https://yourcoach.ie/resources/img/logos/logo1.png" width="20%" />';	
	$message .= '<h2 style="color: #008551";>Tim Deck Ordered</h2>';
	$message .= '</body></html>';
		
  mail($to,$subject,$message,$headers);
  ?>
  