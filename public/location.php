<?php
    require('../init/init.php');

?><!DOCTYPE html>
<html lang="en">
    <!-- HEAD.PHP -->
    <head>
        <!-- Head Partial-->
        <?php require(get_path('public/partials/head.php')); ?>

        <title>Wanderlust Co&period;</title>
         <!-- Font Awesome & Carousel Scripts -->
        <script src="https://kit.fontawesome.com/7cd27e29fe.js" crossorigin="anonymous"></script>
        <script src="../node_modules/tw-elements/dist/js/index.min.js"></script>
    </head>
    <body>
        <header class="flex items-center bg-[#FFF7F4] h-20">
            <?php include(get_path('public/partials/header.php')); ?>
        </header>
        <section class="img-slider h-[35rem]">
            <!-- Image Slider Container -->
            <div id="carousel" class="w-full h-[26rem] carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-indicators absolute right-0 top-[31rem] left-0 flex justify-center p-0 mt-4">
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
                            src="./images/vancouver-lg.jpg"
                            class="block w-full"
                            alt="Couple traveling together"
                        />
                    </div>
                    <div class="carousel-item float-left w-full">
                        <img
                            src="./images/totems.jpg"
                            class="block w-full"
                            alt="Camera"
                        />
                    </div>
                    <div class="carousel-item float-left w-full">
                        <img
                            src="./images/boat-house.jpg"
                            class="block w-full"
                            alt="Exotic Fruits"
                        />
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Wrapper -->
        <div class="w-full h-full content-wrapper py-12 container mx-auto">
            <!-- LOCATION SUMMARY -->
            <section>
                <div class="heading flex justify-between">
                    <h1 class="font-playfair text-5xl">Stanley Park</h1>
                    <?php include(get_path('public/partials/components/star-rating-lg.php')); ?>
                </div>
                
                <div class="flex font-quicksand text-lg w-full h-fit mt-16 p-4 shadow-lg border-solid border border-[#E3E3E3]">
                    <div class="p-4 basis-1/2 pr-6 border-r border-solid border-[#E3E3E3]">
                        <p class="pb-4">Stanley Park is a huge urban park that is located in the heart of Vancouver.</p>
                        <p>Throughout the 400 hectares of land, you’ll find a variety of beaches, wildlife, and beautiful scenic views. This spot is perfect for all ages and is open from 6am to 10pm.</p>
                    </div>
                    <div class="flex justify-around basis-1/2">
                        <div class="flex">
                            <ul class="icons flex flex-col items-center">
                                <!-- LOCATION -->
                                <li class="flex font-semibold  pt-10">
                                    <i class="text-coral fa-2xl fa-solid fa-location-dot"></i>
                                </li>
                                <!-- Wifi -->
                                <li class="flex font-semibold pt-16">
                                    <i class="text-coral fa-2xl fa-solid fa-wifi"></i>
                                </li>
                                <!-- BIKE LANES -->
                                <li class="flex font-semibold pt-16">
                                    <i class="text-coral fa-2xl fa-solid fa-person-biking"></i>
                                </li>
                            </ul>
                            <ul class="titles">
                                <!-- LOCATION -->
                                <li class="flex font-semibold  p-4">
                                    <p>Vancouver, BC<br> V6G 1Z4</p>
                                </li>
                                <!-- Wifi -->
                                <li class="flex font-semibold p-4">
                                    <p>No Wifi</p>
                                </li>
                                <!-- BIKE LANES -->
                                <li class="flex font-semibold p-4">
                                    <p>Bike Lanes</p>
                                </li>
                            </ul>
                        </div>
                        <div class="flex">
                            <ul class="icons flex flex-col items-center">
                                <!-- TRANSIT ROUTES -->
                                <li class="flex font-semibold pt-10">
                                    <i class="text-coral fa-2xl fa-solid fa-bus"></i>
                                </li>
                                <!-- PRICE -->
                                <li class="flex font-semibold pt-16">
                                    <i class="text-coral fa-2xl fa-solid fa-dollar-sign"></i>
                                </li>
                                <!-- WASHROOMS -->
                                <li class="flex font-semibold pt-16">
                                    <i class="text-coral fa-2xl fa-solid fa-restroom"></i>
                                </li>
                            </ul>
                            <ul class="titles">
                                <!-- TRANSIT ROUTES -->
                                <li class="flex font-semibold p-[1.375rem]">
                                    <p>Transit Routes</p>
                                </li>
                                <!-- PRICE -->
                                <li class="flex font-semibold p-[1.375rem]">
                                    <p>Free</p>
                                </li>
                                <!-- WASHROOMS -->
                                <li class="flex font-semibold p-[1.375rem]">
                                    <p>Public Washrooms</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- RECENT REVIEWS -->
            <section class="reviews mt-16">
                <h2 class="font-quicksand font-semibold text-4xl mb-14">Recent Reviews</h2>
                <div class="review-container container flex w-full">
                    <div class="review-card flex flex-col w-[35rem] h-96 p-12 border-solid border border-[#E3E3E3] shadow-lg">
                        <div class="user-rating flex justify-between mb-4">
                            <div class="user flex items-center">
                                <i class="text-coral fa-xl fa-solid fa-circle-user mr-4"></i>
                                <p class="font-quicksand font-semibold text-lg">Adam H.</p>
                            </div>
                            <?php include(get_path('public/partials/components/star-rating-sm.php')); ?>
                        </div>
                        <div class="review-summary font-quicksand text-lg">
                            <h3 class="font-bold pb-2">Great Park!</h3>
                            <p>Stanley park is a very nice place to visit. It’s quite huge so there’s lots to explore. I would recommend coming here if you’re stopping by in Vancouver.</p>
                        </div>
                    </div>
                </div>
                <div class="write-review w-full h-96 border-solid border border-[#E3E3E3] mt-16 shadow-lg relative">
                    <form action="#">
                        <input class="w-full p-8 font-quicksand text-lg" type="text" placeholder="Write your review here...">
                        <div class="w-full h-20 bg-[#FFF7F4] flex justify-between items-center p-8 absolute bottom-0">
                            <ul class="flex justify-center">
                                <li>
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-8 text-blush mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                                    </svg>
                                </li>
                                <li>
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-8 text-blush mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                                    </svg>
                                </li>
                                <li>
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-8 text-blush mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                                    </svg>
                                </li>
                                <li>
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-8 text-blush mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                                    </svg>
                                </li>
                                <li>
                                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-8 text-blush" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                                    </svg>
                                </li>
                            </ul>
                            <button class="bg-blue w-32 h-14 flex justify-center items-center text-white font-quicksand font-semibold text-xl rounded-2xl" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </body>
</html>