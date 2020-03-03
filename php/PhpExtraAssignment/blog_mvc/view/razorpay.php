<?php require 'controller/credential.php';
?>

    <form  class='donate' action="https://www.example.com/payment/success/" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key=<?php echo $key_id; ?> // Enter the Key ID generated from the Dashboard
    data-amount="1000" // Amount is in currency subunits. Default currency is INR. Hence, 50000 means 50000 paise or INR 500.
    data-currency="INR"
  data-theme.color="#F97254"
    data-prefill.name=<?php echo $_SESSION['fname']; ?>
    data-prefill.email=<?php echo $_SESSION['email']; ?>
    <?php if (isset($_SESSION['phone_no'])){?>
    data-prefill.contact=<?php echo $_SESSION['phone_no'];}
    else {?>
      data-prefill.contact=""
  <?php  }
     ?>
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
