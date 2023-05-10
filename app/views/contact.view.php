<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT ?>/assets/css/contact.css">
    <title>ContactPage</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <section class="mycontact" >
        <div class="container">
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Contact us</h1>
                <p class="lead">Our users are very satisfied about our excellent support.</p>
            </div>
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <img src="https://cdn-icons-png.flaticon.com/512/1177/1177437.png" width="70" height="70">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title pricing-card-title">Email</h2>
                        <p>Send your question via our email address, we usually respond within a day.</p>
                        <p class="myinfo">cvblog@gmail.com</p>
                    </div>
                </div>
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                    <img src="https://cdn-icons-png.flaticon.com/512/3178/3178284.png" width="70" height="70">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title pricing-card-title">Phone</h2>
                        <p>Call us for questions about cancellations, billing or other support.</p>
                        <p class="myinfo">098.765.4321</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>