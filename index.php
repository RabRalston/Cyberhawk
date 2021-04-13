<?php
    require 'includes/cyberhawk.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wind Turbine Status Checker</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-min.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/ed82d169c2.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light  static-top">
        <div class="container">
            <a class="navbar-brand" target="_blank" href="https://thecyberhawk.com/">
                <img src="/assets/img/header-logo.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link nav_button" target="_blank" href="https://thecyberhawk.com/">Home</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main>
        <section>
            <div class="container ">
                <div>
                    <h1 class="text-center pt-5">Wind Turbine Status Checker</h1>
                </div>
                <div class="row text-center mt-5 mb-5 pb-5">
                        <?php echo $turbines->getTurbines(); ?>
                    </div>
            </div>
        </section>
    </main>
</body>
</html>


