<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Little Foot is a non-profit organization helping individuals reduce their carbon footprint" />
  <meta name="author" content="" />
  <title>Little Foot - Donate</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
    rel="stylesheet" type="text/css" />
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
  <?php include './common/nav.php';?>
  <header class="masthead" style="background-image: url('assets/img/donate-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <div class="page-heading">
            <h1>Make a Donation</h1>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main class="mb-4">
    <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <div class="my-5">
            <form class="post-form" method="POST" action="php/add-donation.php">
              <div class="form-floating">
                <input class="form-control" id='name' type="text" name="name" placeholder="Name" required />
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input class="form-control" name="card" class="card" type="tel" inputmode="numeric"
                  pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx"
                  required />
                <label for="card">Card Number</label>
              </div>
              <div class="form-floating">
                <input class="form-control" type="text" name="cvv" class="cvv" placeholder="CVV" required minlength="3"
                  maxlength="3" />
                <label for="cvv">CVV</label>
              </div>
              <div class="form-floating">
                <input class="form-control" type="text" name="date" class="date" placeholder="mmyy" required
                  minlength="4" maxlength="4" />
                <label for="date">Expiry Date</label>
              </div>
              <div class="form-floating">
                <input class="form-control" type="text" name="amount" class="amount" placeholder="0.00" required />
                <label for="amount">Donation Amount</label>
              </div>
              <br />
              <input class="btn btn-success text-uppercase " type="submit" name="submit" value="Donate"
                class="btn-publish">
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include './common/footer.php';?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>