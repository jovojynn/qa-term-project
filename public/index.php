<?php
    require('../init/init.php');

?><!DOCTYPE html>
<html lang="en">
    <head>
        <?php require(get_path('public/partials/head.php')); ?>
        <title>Wanderlust Co&period;</title>
        <script src="https://kit.fontawesome.com/7cd27e29fe.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    </head>
    <body>
        <header class="flex items-center bg-[#FFF7F4] h-20">
            <?php include(get_path('public/partials/header.php')); ?>
        </header>
        <div class="w-full h-full content-wrapper py-12 container mx-auto">
            <main>
                <!-- SEARCH BAR -->
                <div class="search-container">
                    <form class="flex justify-center" action="#">
                        <input class="font-quicksand p-4 mr-4 w-full rounded-full border-2 border-[#DADADA]" type="text" placeholder="Where to?" name="search">
                        <button class="icon bg-pink rounded-full p-4" type="submit"><i class="fa text-white fa-search fa-xl"></i></button>
                    </form>
                </div>
                <div></div>
                <!-- <div class="bg-blue w-full h-[26rem] mt-12"></div>  -->
                <!-- Image Slider -->
                <div id="carousel" class="w-full h-[26rem] mt-16 carousel slide relative" data-bs-ride="carousel">
                    <div class="carousel-indicators absolute right-0 top-[30rem] left-0 flex justify-center p-0 mt-4">
                        <button
                        type="button"
                        data-bs-target="#carousel"
                        data-bs-slide-to="0"
                        class="active bg-black"
                        aria-current="true"
                        aria-label="Slide 1"
                        ></button>
                        <button
                        type="button"
                        data-bs-target="#carousel"
                        data-bs-slide-to="1"
                        aria-label="Slide 2"
                        ></button>
                        <button
                        type="button"
                        data-bs-target="#carousel"
                        data-bs-slide-to="2"
                        aria-label="Slide 3"
                        ></button>
                    </div>
                    <div class="carousel-inner relative w-full overflow-hidden">
                        <div class="carousel-item active float-left w-full">
                            <img
                                src="./images/3.jpg"
                                class="block w-full"
                                alt="Couple traveling together"
                            />
                            <div class="carousel-caption hidden md:block absolute text-center">
                                <h5 class="text-xl">First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item float-left w-full">
                            <img
                                src="./images/2.jpg"
                                class="block w-full"
                                alt="Camera"
                            />
                        </div>
                        <div class="carousel-item float-left w-full">
                            <img
                                src="./images/1.jpg"
                                class="block w-full"
                                alt="Exotic Fruits"
                            />
                        </div>
                    </div>
                </div>

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