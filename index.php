<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Securaji</title>
</head>

<?php
    $page = "home";
?>

<body>

    <?php include "includes/navbar.php" ?>
    
    <div id="particles-js">
        <div class="container text-center">
            <div class="info mt-5">
                <h1 class="animate__animated animate__pulse">Welcome to my website!</h1>
                <p class="animate__animated animate__fadeIn">I am Aji, an 18 year old security enthusiast from The
                    Netherlands.</p>
                <button type="button" onclick="window.location.href='./projects.php'"
                    class="btn btn-primary my-5 animate__animated animate__zoomInUp">View my projects!</button>
                <div class="social-buttons d-flex justify-content-center flex-wrap mt-5">
                    <a href="https://twitter.com/securaji" target="blank">
                        <div class="button-icon twitter animate__animated animate__fadeInLeft"><i
                                class="fab fa-twitter"></i></div>
                    </a>
                    <a href="https://github.com/securaji" target="blank">
                        <div class="button-icon github animate__animated animate__fadeInRight"><i
                                class="fab fa-github"></i></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="./js/particles.min.js"></script>
    <script src="./js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>