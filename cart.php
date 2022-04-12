<?php
session_start();

include "connection.php";

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

    <section class="container px-5 py-8 mx-auto mb-40 font-cabin text-black">
        <div class="flex flex-wrap justify-center -mx-4 -mb-10 text-center">
            <div class="flex flex-col md:flex-row mb-20 mx-10 px-8 py-6 bg-white shadow-lg rounded-lg">
                <div class="flex flex-col md:mr-12">

                    <div class="flex border-b-2 border-rosewood py-6">
                        <div class="rounded-lg h-20 w-20 overflow-hidden my-auto">
                            <img alt="content" class="object-cover object-center h-full w-full" src="./img/candles-blueberry-pie.png">
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="my-auto px-4 md:px-12 w-36">
                                <h2 class="font-medium">Blueberry Pie</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-medium">Quantity: 1</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-bold">$24.00</h2>
                            </div>
                        </div>
                        <div class="my-auto px-4 md:px-12 ml-auto">
                            <i class="fa fa-trash text-xl cursor-pointer"></i>
                        </div>
                    </div>

                    <div class="flex border-b-2 border-rosewood py-6">
                        <div class="rounded-lg h-20 w-20 overflow-hidden my-auto">
                            <img alt="content" class="object-cover object-center h-full w-full" src="./img/candles-chocolate-sugar-cookie.png">
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="my-auto px-4 md:px-12 w-36">
                                <h2 class="font-medium">Chocolate Sugar Cookie</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-medium">Quantity: 1</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-bold">$24.00</h2>
                            </div>
                        </div>
                        <div class="my-auto px-4 md:px-12 ml-auto">
                            <i class="fa fa-trash text-xl cursor-pointer"></i>
                        </div>
                    </div>

                    <div class="flex border-b-2 border-rosewood py-6">
                        <div class="rounded-lg h-20 w-20 overflow-hidden my-auto">
                            <img alt="content" class="object-cover object-center h-full w-full" src="./img/candles-gingerbread.png">
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="my-auto px-4 md:px-12 w-36">
                                <h2 class="font-medium">Gingerbread</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-medium">Quantity: 1</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-bold">$24.00</h2>
                            </div>
                        </div>
                        <div class="my-auto px-4 md:px-12 ml-auto">
                            <i class="fa fa-trash text-xl cursor-pointer"></i>
                        </div>
                    </div>
                    
                    <div class="flex border-b-2 border-rosewood py-6">
                        <div class="rounded-lg h-20 w-20 overflow-hidden my-auto">
                            <img alt="content" class="object-cover object-center h-full w-full" src="./img/candles-peanut-chocolate-cheesecake.png">
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="my-auto px-4 md:px-12 w-36">
                                <h2 class="font-medium">Peanut Chocolate Cheesecake</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-medium">Quantity: 1</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-bold">$24.00</h2>
                            </div>
                        </div>
                        <div class="my-auto px-4 md:px-12 ml-auto">
                            <i class="fa fa-trash text-xl cursor-pointer"></i>
                        </div>
                    </div>

                    <div class="flex py-6 border-b-2 border-rosewood md:border-0">
                        <div class="rounded-lg h-20 w-20 overflow-hidden my-auto">
                            <img alt="content" class="object-cover object-center h-full w-full" src="./img/candles-smores-donut.png">
                        </div>
                        <div class="flex flex-col md:flex-row">
                            <div class="my-auto px-4 md:px-12 w-36">
                                <h2 class="font-medium">S'mores Donut</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-medium">Quantity: 1</h2>
                            </div>
                            <div class="my-auto px-4 md:px-12">
                                <h2 class="font-bold">$24.00</h2>
                            </div>
                        </div>
                        <div class="my-auto px-4 md:px-12 ml-auto">
                            <i class="fa fa-trash text-xl cursor-pointer"></i>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col border-rosewood mx-auto md:ml-auto rounded-r-lg px-8">
                    <div class="my-auto mx-auto">
                        <div class="pb-4">
                            <h2 class="text-3xl font-bold mt-6">Order details</h2>
                        </div>
                        <div class="py-4">
                            <p class="text-xl font-medium">Subtotal</p>
                            <p class="text-xl font-bold">$250.00</p>
                        </div>
                        <div class="py-4 mb-4 border-b-2 border-rosewood">
                            <p class="text-xl font-medium">Shipping</p>
                            <p class="text-xl font-bold">$12.00</p>
                        </div>
                        <div class="py-4">
                            <p class="text-xl font-medium">Total cost</p>
                            <p class="text-xl font-bold">$262.00</p>
                        </div>
                        <button class="flex mx-auto mt-6 font-cabin bg-babypink text-black border-0 py-2 px-5 focus:outline-none rounded">
                        Place order
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-gray-600 body-font w-full min-h-full">
        <div class="w-full bg-rosewood absolute right-0 left-0 px-8 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <p class="text-md font-cabin text-princeton-orange sm:ml-4 sm:pl-4 sm:py-2 sm:mt-0 mt-4">© 2000-2021 Candles By Victoria</p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a href="" class="px-2">
              <img src="./img/social-icon-facebook.png" alt="Facebook social media icon" class="w-7 h-10">
            </a>
            <a href="" class="px-2">
              <img src="./img/social-icon-instagram.png" alt="Instagram social media icon" class="w-7 h-11">
            </a>
            <a href="" class="px-2">
              <img src="./img/social-icon-youtube.png" alt="YouTube social media icon" class="w-7 h-11">
            </a>
            <a href="" class="px-2">
              <img src="./img/social-icon-tiktok.png" alt="TikTok social media icon" class="w-7 h-10">
            </a>
          </span>
        </div>
      </footer>
</body>
</html>