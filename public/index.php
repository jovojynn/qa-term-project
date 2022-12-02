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
        <div class="w-full h-full content-wrapper py-12 container mx-auto">
            <main>
                <!-- SEARCH BAR -->
                <div class="search-container mt-12 mb-14">
                    <?php include(get_path('public/partials/components/searchbar.php')); ?>
                </div>
                <section class="img-slider mt-16 mb-14">
                    <!-- Image Slider Container -->
                    <div id="carousel" class="w-full h-full carousel slide relative" data-bs-ride="carousel">
                        <div class="carousel-indicators absolute right-0 top-[29rem] left-0 flex justify-center p-0 mt-4">
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
                                <div class="absolute w-full h-full opacity-40 bg-black"></div>
                                <img
                                    src="./images/rocky-mountains.jpg"
                                    class="block w-full"
                                    alt="Couple traveling together"
                                />
                                <div class="carousel-caption hidden md:block absolute top-24 text-center items-center">
                                    <h3 class="text-5xl font-playfair pb-14">Rocky Mountain Tours</h5>
                                    <p class="font-quicksand text-xl pb-14">Explore the great outdoors with your friends and family in <br>Banff, Alberta. Find the perfect tour for you below.</p>
                                    <div class="flex justify-center w-full items-center mt-10">
                                        <a class="text-white text-center text-2xl rounded-2xl font-quicksand font-bold w-56 h-14 bg-coral p-3" href="#">View Tours</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item float-left w-full">
                                <div class="absolute w-full h-full opacity-40 bg-black"></div>
                                <img
                                    src="./images/friends.jpg"
                                    class="block w-full"
                                    alt="Camera"
                                />
                                <div class="carousel-caption hidden md:block absolute top-24 text-center items-center">
                                    <h3 class="text-5xl font-playfair pb-14">The PNE at Playland Returns</h5>
                                    <p class="font-quicksand text-xl pb-14">Enjoy a variety of games, food, and late night shows at the<br> Pacific National Exhibition this summer!</p>
                                    <div class="flex justify-center w-full items-center mt-10">
                                        <a class="text-white text-center text-2xl rounded-2xl font-quicksand font-bold w-56 h-14 bg-coral p-3" href="#">View Events</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item float-left w-full">
                                <div class="absolute w-full h-full opacity-40 bg-black"></div>
                                <img
                                    src="./images/cruise.jpg"
                                    class="block w-full"
                                    alt="Exotic Fruits"
                                />
                                <div class="carousel-caption hidden md:block absolute top-24 text-center items-center">
                                    <h3 class="text-5xl font-playfair pb-14">Top cruises in 2022</h5>
                                    <p class="font-quicksand text-xl pb-14">Cruise season is back! Explore over 200 cruises that are <br>currently available this month.</p>
                                    <div class="flex justify-center w-full items-center mt-10">
                                        <a class="text-white text-center text-2xl rounded-2xl font-quicksand font-bold w-56 h-14 bg-coral p-3" href="#">View Cruises</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="user-recs mt-30">
                    <h2 class="font-quicksand font-semibold text-4xl mb-4">User Recommendations</h2>
                    <div class="container flex">
                        
                        <a href="#" title="Universal Studios Japan">
                            <div class="card bg-white drop-shadow-lg h-[27rem] mr-4">
                                <img src="./images/universal-japan.jpg" alt="Universal Studios Japan">
                                <div class="card-info p-4">
                                    <h3 class="font-quicksand font-bold text-xl">Universal Studios Japan</h3>
                                    <h5 class="location font-quicksand text-lg text-[#838383]">Osaka</h5>
                                    <?php include(get_path('public/partials/components/star-rating-md.php')); ?>
                                </div>
                            </div>
                        </a>
                        
                        <a href="#" title="Garden of the Sleeping Giant">
                            <div class="card bg-white drop-shadow-lg h-[27rem] mr-4">
                                <img src="./images/garden-sleep.jpg" alt="Garden of the Sleeping Giant">
                                <div class="card-info p-4">
                                    <h3 class="font-quicksand font-bold text-xl">Garden of the Sleeping Giant</h3>
                                    <h5 class="location font-quicksand text-lg text-[#838383]">Nadi</h5>
                                    <?php include(get_path('public/partials/components/star-rating-md.php')); ?>
                                </div>
                            </div>
                        </a>    
                        
                        <a href="#" title="Hacienda La Laborcilla">
                            <div class="card bg-white drop-shadow-lg h-[27rem]">
                                <img src="./images/hacienda.jpg" alt="Hacienda La Laborcilla">
                                <div class="card-info p-4">
                                    <h3 class="font-quicksand font-bold text-xl">Hacienda La Laborcilla</h3>
                                    <h5 class="location font-quicksand text-lg text-[#838383]">Queretaro City</h5>
                                    <?php include(get_path('public/partials/components/star-rating-md.php')); ?>
                                </div>
                            </div>
                        </a>
                    </div>
                </section>
            </main>
        </div>
        <footer class="flex items-center justify-center py-12 container mx-auto">
            <?php include(get_path('public/partials/footer.php')); ?>
        </footer>
    </body>
</html>