<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="assets/scss/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="assets/scss/main.css" rel="stylesheet">
  <title></title>
</head>
<body>
  
<?php include 'header.php';?>

<!--home slider-->
<section class="homeslider">
  <div class="slide-item">
    <figure class="d-flex align-items-center justify-content-center">
      <img class="img-fluid" src="assets\images\GSISD Cloud_Homepage.jpg" alt="">
      <figcaption class="position-absolute top-50 text-white">
        <h2 class="text-white h1 fw-normal slider-title mb-5"><i class="fa fa-star" aria-hidden="true"></i>
        BOOST YOUR NETWORK<i class="fa fa-star" aria-hidden="true"></i>
        </h2>
        <p class="text-white h3 fw-light text-center">Turbocharge your network with Next-Gen SD-WAN Solution.</p>
      </figcaption>
    </figure>
  </div>
</section>
<!--home slider-->

<!--our feature-->
<section class="ourfeature spacer">
  <div class="container">
    <h2 class="display-4 fw-normal text-center mb-5">Our Features</h2>
    <div class="row">
      <div class="col">
        <div class="text-center">
          <img class="mb-2" src="assets/images/boost.png" alt="">
          <h3 class="mb-3">Boost Network <br>Performance</h3>
          <p>Our dynamic multipath optimization technology will ensure consistent and speedy connection to mission
            critical applications.</p>
        </div>
      </div>
      <div class="col">
        <div class="text-center">
          <img class="mb-2" src="assets/images/g2.png" alt="">
          <h3 class="mb-3">Full Network <br>Visibility</h3>
          <p>With our all-in-one dashboard, see everything going on in your network and easily make changes to
            policies with a few clicks of a mouse..</p>
        </div>
      </div>
      <div class="col">
        <div class="text-center">
          <img class="mb-2" src="assets/images/boost03.png" alt="">
          <h3 class="mb-3">Enterprise-level <br>Security</h3>
          <p>With our complete security features, easily detect and stop any threats. Have an easier time becoming
            compliant with SOCII, SIEM, GDPR and more.</p>
        </div>
      </div>
      <div class="col">
        <div class="text-center">
          <img src="assets/images/boost4.png" alt="">
          <h3 class="mb-3">Customizable Secure <br>WAN</h3>
          <p class="mb-2">Easily section your network for application of rules, control traffic, set up security
            preferences and leave the rest to our SD-WAN technology.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--our feature-->

<!--solutions-->
<section class="solution spacer bg-light">
  <div class="container">
    <div class="row">
      <ul class="nav nav-tabs justify-content-center pe-0 mb-3" id="myTab" role="tablist">
        <li class="nav-item w-50" role="presentation">
          <button class="nav-link active bg-dark text-white w-100 py-3 h4" id="home-tab" data-bs-toggle="tab"
            data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Enterprise
            SD-WAN Solution</button>
        </li>
        <li class="nav-item w-50" role="presentation">
          <button class="nav-link bg-dark text-white w-100 py-3 h4" id="profile-tab" data-bs-toggle="tab"
            data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Service
            Provider Partnership Program</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="herobg tab1 d-flex flex-wrap align-items-center justify-content-center">
            <div class="text-center mx-auto" style="max-width: 50rem;">
              <h3 class="h1 text-white">Hermes Network Enterprise<br> SD-WAN Solution</h3>
              <p class="lead fw-bold text-white">From securing and speeding up the connection between your team and
                mission
                critical applications to ensuring that your team stays connected during outages, our SD-WAN has
                everything you need to keep your enterprise ahead of the competition and more. </p>
              <button class="btn btn-primary">Our Solution</button>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="herobg tab2 d-flex flex-wrap align-items-center justify-content-center">
            <div class="text-center mx-auto" style="max-width: 50rem;">
              <h3 class="h1 text-white">Hermes Network Enterprise<br> SD-WAN Solution</h3>
              <p class="lead fw-bold text-white">From securing and speeding up the connection between your team and
                mission
                critical applications to ensuring that your team stays connected during outages, our SD-WAN has
                everything you need to keep your enterprise ahead of the competition and more. </p>
              <button class="btn btn-primary">Our Solution</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--solutions-->

<!--gateways-->
<section class="gateways spacer">
  <div class="container text-center">
    <h2 class="display-4 fw-normal mb-5">Our Global Gateways</h2>
    <div class="text-center">
      <img src="https://i.ibb.co/vZ30PDG/mapIndia.png" alt="mapIndia" border="0">
    </div>

  </div>
</section>
<!--gateways-->

<!--gateways-->
<section class="gateways spacer">
  <div class="container text-center">
    <h2 class="display-4 fw-normal mb-5">Our Ecosystem of Partners</h2>
    <img src="https://www.hermesnetwork.cloud/wp-content/uploads/2020/12/Ecosystem-Of-Partners.png" alt="">
  </div>
</section>
<!--gateways-->

<?php include 'footer.php';?>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
  $('.homeslider').slick();
</script>
</body>

</html>