<?php
//session
session_start();
//database connection
include "connection.php";
$email = "";
$password = "";
$confirmpassword = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candles By Victoria</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/fresh-roomettes-personal-use" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/d80f87dcf4.js"></script>
</head>
<body class="bg-banana">
    <header class="mb-10 font-cabin bg-rosewood">
        <div class="mx-auto px-8 py-5 flex flex-wrap flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <a href="./home.php" class="mr-5 text-princeton-orange-links font-bold hover:text-vermilion">HOME</a>
                <a href="./about.php" class="mr-5 text-princeton-orange-links font-bold hover:text-vermilion">ABOUT</a>
                <a href="./candles.php" class="mr-5 text-princeton-orange-links font-bold hover:text-vermilion">CANDLES</a>
            </nav>
            <div class="flex flex-col md:flex-row order-first lg:order-none lg:w-1/5 items-center lg:items-center lg:justify-center mb-4 md:mb-0">
            <div class="relative rounded-full bg-princeton-orange w-20 h-20 px-10 mx-auto">
                <img class="absolute -top-1 right-1 w-20 h-20 mx-auto mt-2" src="./img/icon-logo.png" alt="" />
            </div>
            <div class="mx-auto md:ml-8">
                <h1 class="font-flattery font-bold text-4xl text-rufous whitespace-nowrap">Candles by Victoria</h1>
            </div>
            </div>
            <div class="lg:w-2/5 mr-8 inline-flex lg:justify-end ml-5 lg:mx-auto">
            <?php if(isset($_SESSION["loggedin"])){?>
            <a href="./logout.php" class="text-princeton-orange-links font-bold hover:text-vermilion inline-flex items-center rounded mr-7 py-1 px-2 md:mt-0 mt-4 border-princeton-orange border hover:border-vermilion">LOGOUT</a>    
            <?php }
            else{?> 
            <a href="./login.php" class="text-princeton-orange-links font-bold hover:text-vermilion inline-flex items-center rounded mr-7 py-1 px-2 md:mt-0 mt-4 border-princeton-orange border hover:border-vermilion">LOGIN</a>
            <?php }?>
                <a href="./register.php" class="text-princeton-orange-links font-bold hover:text-vermilion inline-flex items-center rounded mr-7 py-1 px-2 md:mt-0 mt-4 border-princeton-orange border hover:border-vermilion">SIGN UP</a>
                <button onclick="window.location.href='./cart.php';" class="inline-flex items-center">
                    <div class="text-3xl">
                        <i class="fa fa-shopping-cart font-medium border-0 text-princeton-orange-links cursor-pointer focus:outline-none hover:text-vermilion rounded mt-4 md:mt-0"></i>
                    </div>
                </button>
            </div>
        </div>
    </header>

    <?php
        $emailfail = "";
        $passwordfail = "";
        $confirmfail = "";
        $successmessage = "";
        $errormessage = "";


        //input validation
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //testing email
            if(empty($_POST["email"])){
                $emailfail = "Please enter a valid email address.";
            }

            //testing password
            if(empty($_POST["password"])){
                $passwordfail = "Please enter a created password.";
            }

            //testing confirm password
            if(empty($_POST["password-confirm"])){
                $confirmfail = "Please confirm your password.";
            }

            if($_POST["password"] !== $_POST["password-confirm"]){
                $confirmfail = "Please make sure your passwords match.";
            }

            //if all fields are filled
            if($_POST["password"] && $_POST["password-confirm"]){
            if($_POST["password"] == $_POST["password-confirm"]){
                $successmessage = "You have successfully created an account!";
            }
            }

        }

    ?>

    <div class="flex flex-col mb-72 mt-20">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center px-2">
            <div class="flex flex-col bg-rosewood px-6 py-8 rounded shadow-lg w-full border border-rosewood">
                <h1 class="mb-8 text-3xl text-center text-rosewood font-cabin">Sign Up</h1>
            
            
            <form name="account-signup" id="signup" method="post">
                <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-6 focus:outline-none font-cabin"
                    name="email"
                    placeholder="Email" />
                    <span style = "color:red"><?php echo $emailfail ?></span>
                <input 
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-6 focus:outline-none font-cabin"
                    name="password"
                    placeholder="Password" />
                    <span style = "color:red"><?php echo $passwordfail ?></span>
                <input 
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-10 focus:outline-none font-cabin"
                    name="password-confirm"
                    placeholder="Confirm password" />
                    <span style = "color:red"><?php echo $confirmfail ?></span>
                <input
                    type="submit"
                    class="w-1/2 mx-auto text-center py-3 rounded bg-babypink hover:bg-vermilion focus:outline-none font-cabin"
                    name="signup"
                    value="Sign Up"
                ></input>
                <br>
                <span style="color:red"><?php echo $errormessage ?></span>
                <span style="color:green"><?php echo $successmessage ?></span>
            </form>
            </div>
            <div class="flex mt-6">
                <p class="font-cabin">Already have an account?</p>
                <a class="text-rufous hover:text-vermilion ml-2 underline" href="./login.php">Sign in</a>.
            </div>
        </div>
    </div>

    <footer class="text-gray-600 body-font w-full min-h-full">
        <div class="w-full bg-rosewood absolute right-0 left-0 px-8 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <p class="text-md font-cabin text-princeton-orange sm:ml-4 sm:pl-4 sm:py-2 sm:mt-0 mt-4">© 2000-2021 Candles By Victoria</p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a href="https://www.facebook.com/candlesbyvictoria/" class="px-2">
              <img src="./img/social-icon-facebook.png" alt="Facebook social media icon" class="w-7 h-10">
            </a>
            <a href="https://www.instagram.com/candlesbyvictoria/" class="px-2">
              <img src="./img/social-icon-instagram.png" alt="Instagram social media icon" class="w-7 h-11">
            </a>
            <a href="https://www.youtube.com/c/candlesbyvictoria" class="px-2">
              <img src="./img/social-icon-youtube.png" alt="YouTube social media icon" class="w-7 h-11">
            </a>
            <a href="https://www.tiktok.com/@candlesbyvictoria?is_from_webapp=1&sender_device=pc" class="px-2">
              <img src="./img/social-icon-tiktok.png" alt="TikTok social media icon" class="w-7 h-10">
            </a>
          </span>
        </div>
      </footer>
</body>
</html>