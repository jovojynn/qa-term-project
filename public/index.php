<?php
    require('../init/init.php');

?><!DOCTYPE html>
<html lang="en">
    <head>
        <?php require(get_path('public/partials/head.php')); ?>
        <title>Wanderlust Co&period;</title>
        <script src="https://kit.fontawesome.com/7cd27e29fe.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <header class="flex items-center bg-gray-600 h-20">
            <?php include(get_path('public/partials/header.php')); ?>
        </header>
        <div class="w-full h-full content-wrapper py-12 container mx-auto">
            <main>
                <!-- SEARCH BAR -->
                <div class="search-container">
                    <form class="flex justify-center" action="#">
                        <input class="p-4 mr-4 w-full rounded-full border-2 border-black" type="text" placeholder="Search..." name="search">
                        <button class="icon bg-gray-500 rounded-full p-4" type="submit"><i class="fa fa-search fa-xl"></i></button>
                    </form>
                </div>
                <div class="bg-gray-500 w-full h-[26rem] mt-12"></div> <!-- Image Slider -->
                <div class="user-recs flex mt-16">

                    <div id="1" class="card mr-4 border-2 border-black">
                        <img src="images/banner.jpg" alt="banner">
                        <div class="info py-6 text-center">
                            <h3>DESTINATION 01</h3>
                            <p>$$$</p>
                        </div>
                        <div class="flex justify-center rounded w-full h-10 bg-red-200 items-center"><a class="text-lg" href="#">SEE MORE</a></div>
                    </div>

                    <div id="2" class="card mr-4 border-2 border-black">
                        <img src="images/banner.jpg" alt="banner">
                        <div class="info py-6 text-center">
                            <h3>DESTINATION 02</h3>
                            <p>$$$</p>
                        </div>
                        <div class="flex justify-center rounded w-full h-10 bg-red-200 items-center"><a class="text-lg" href="#">SEE MORE</a></div>
                    </div>

                    <div id="3" class="card border-2 border-black">
                        <img src="images/banner.jpg" alt="banner">
                        <div class="info py-6 text-center">
                            <h3>DESTINATION 03</h3>
                            <p>$$$</p>
                        </div>
                        <div class="flex justify-center rounded w-full h-10 bg-red-200 items-center"><a class="text-lg" href="#">SEE MORE</a></div>
                    </div>

                </div>
            </main>
        </div>
        <footer class="flex items-center py-12 container mx-auto">
            <?php include(get_path('public/partials/footer.php')); ?>
        </footer>
    </body>
</html>