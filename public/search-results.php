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
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    </head>
    <body>
        <!-- HEADER.PHP -->
        <header class="flex items-center bg-[#FFF7F4] h-20">
            <!-- Header Partial -->
            <?php include(get_path('public/partials/header.php')); ?>
        </header>
        <!-- Content Wrapper -->
        <div class="w-full h-full content-wrapper py-12 container mx-auto">
            <main>
                <!-- SEARCH BAR -->
                <div class="search-container mt-12 mb-14">
                    <?php include(get_path('public/partials/components/searchbar.php')); ?>
                </div>
                
                <!-- SEARCH RESULTS NEED TO GO HERE -->
                <h1 class="font-quicksand font-bold text-5xl">Found 4 Resutls For "BC"</h1>
                <div class="container flex flex-wrap justify-evenly">
                    <div class="mt-10">
                        <?php include(get_path('public/partials/components/card.php')); ?>
                    </div>
                    <div class="mt-10">
                        <?php include(get_path('public/partials/components/card.php')); ?>
                    </div>
                    <div class="mt-16">
                        <?php include(get_path('public/partials/components/card.php')); ?>
                    </div>
                    <div class="mt-16">
                        <?php include(get_path('public/partials/components/card.php')); ?>
                    </div>
                </div>
            </main>
        </div>
        <footer class="flex items-center justify-center py-12 container mx-auto">
            <?php include(get_path('public/partials/footer.php')); ?>
        </footer>
    </body>
</html>