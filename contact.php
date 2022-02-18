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
    <title>Securaji &middot; Contact</title>
</head>

<?php
    $page = "contact";
?>

<body>

    <?php include "includes/navbar.php" ?>

    <div class="container">
        <h1 class="my-4 text-center animate__animated animate__pulse">Contact</h1>
        <div class="col-md-8 offset-md-2">

            <form action="" method="post">
            <?php
                if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['message'])){

                    if(empty($_POST['email']) || empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message'])){
                        echo "<div class='alert alert-danger animate__animated animate__shakeX' role='alert'> The fields cannot be empty.</div>";
                    } else {
                        $user = $_POST["name"];
                        $email = $_POST["email"];
                        $subject = $_POST["subject"];
                        $message = $_POST["message"];
                        $secretKey = "";
                        $responseKey = $_POST['token'];
                        $userIP = $_SERVER['REMOTE_ADDR'];

                        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
                        $response = file_get_contents($url);
                        $response = json_decode($response);

                        if($response->success && $response->score > 0.5){
                            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                                $to = "";
                                $body = "";
        
                                $body .= "From: ".$user. "\r\n";
                                $body .= "Email: ".$email. "\r\n";
                                $body .= "Subject: ".$subject. "\r\n";
                                $body .= "Message: ".$message. "\r\n";
        
                                if(mail($to, $subject, $body)){
                                    echo "<div class='alert alert-success animate__animated animate__bounceIn' role='alert'>Thanks for filling out the form! I will get back in touch with you soon.</div>";
                                }
                            } else{
                                echo "<div class='alert alert-danger animate__animated animate__shakeX' role='alert'>Invalid email. Please confirm the fields and submit it again.</div>";
                            }
                        } else{
                            echo "<div class='alert alert-danger animate__animated animate__shakeX' role='alert'>CAPTCHA verification failed.</div>";
                        }

                    }     
                }
            ?>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" rows="5" name="message" placeholder="Message" required></textarea>
                </div>
                <input type="hidden" name="token" id="token">
                <input type="submit" class="btn btn-primary form-btn mb-5" style="font-size: 17px;" value="Submit">
            </form>
        </div>
    </div>


    <?php include "includes/footer.php" ?>

    <script src="https://www.google.com/recaptcha/api.js?render="></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('', {
                action: 'submit'
            }).then(function (token) {
                document.getElementById('token').value = token;
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>