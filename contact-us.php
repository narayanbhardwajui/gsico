<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="description" content="Get in touch with us to get quality technical products and services, while meeting high moral and ethical standards in the performance.
">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="assets/scss/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="assets/scss/main.css" rel="stylesheet">
  <title>GSISD | Contact us</title>
</head>

<body>

  <?php include 'header.php';?>

  <?php
  if(isset($_POST['submitbutton']))
    {
      $from=$_POST['userName'];
      $email=$_POST['userEmail'];
      $message=$_POST['userMsg'];
      $phone=$_POST['userPhone'];
      $message=$message  . " \r\n Phone no: " .$phone ;
      $from="From: $name<$email>\r\nReturn-path: $email";
      $subject="Enquiry for Company";
      mail("mail id here", $subject, $message, $from);
      echo
      "<script type=\"text/javascript\">".
      "window.alert('Thanks for posting query we will get back to you very soon');".
      "</script>";
      exit;
    }
?>

  <main class="content">

    <section class="sdwan spacer">
      <div class="container">
        <div class="row">
          <div class="col">
            <form class="contact-form h-100">
              <h3 class="h3 mb-3 text-danger">Have Us Contact You</h3>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Enter your name" name="userName">
              </div>
              <div class="mb-3">
                <input type="number" class="form-control" placeholder="Enter your phone number" name="userPhone">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Enter your email" name="userEmail">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Enter your company name" name="userMsg">
              </div>
              <button type="submit" class="btn btn-danger w-100 rounded-pill">Submit</button>
              <p class="mt-5"><i class="fa fa-info-circle me-1"></i>I agree to be contacted by GSISD and GSISD partners.
              </p>
            </form>
          </div>
          <div class="col">
            <h3 class="h3">Contact Details:</h3>
            <address class="lead text-secondary lh-lg mb-3">
              Telephone: +1 866-818-6006
              <br>
              Fax: +1 415-616-5101 <br>
              E-mail:&nbsp;<a href="mailto:info@gsisd.net">info@gsisd.net</a>
            </address>
            <hr>

            <address>
              <h3 class="h3">Office Locations:</h3>
              <p class="text-secondary"><strong>Global Solutions Integration</strong><br>
                1510 El Paseo Foothill Ranch,<br>
                California USA 92610</p>

              <p class="text-secondary"><strong>Global Solutions Integration</strong>,<br> USA
                7715 Crittenden Street, Suite 396
                Philadelphia, PA 19118</p>

              <p class="text-secondary"><strong>Global Solutions Integration</strong>,<br> Philippines
                5/F Gateway Tower
                Gen. Roxas Avenue cor. Gen. Aguinaldo Avenue<br>
                Araneta Center Cubao, Quezon City</p>

              <p class="text-secondary"><strong>Global Solutions Integration</strong>,<br> India
                D66GF, RPS Palms, Sector 88
                Faridabad,<br> Haryana , India 121002
              </p>
            </address>
          </div>

        </div>
      </div>
    </section>

  </main>

  <?php include 'footer.php';?>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>