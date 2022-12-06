<?php
    require('../init/init.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $search_results = $_POST['search'];
        $search_db = Location::find_by_search($search_results, '');
    }
?><!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Head Partial-->
        <?php require(get_path('public/partials/global/head.php')); ?>

        <title>Wanderlust Co&period;</title>
         <!-- Font Awesome & Carousel Scripts -->
        <script src="https://kit.fontawesome.com/7cd27e29fe.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Header Partial -->
        <?php include(get_path('public/partials/global/header.php')); ?>
        <!-- Content Wrapper -->
        <div class="w-full h-full content-wrapper py-12 container mx-auto">
            <main>
                <!-- SEARCH BAR -->
                <div class="search-container mt-12 mb-14">
                    <?php include(get_path('public/partials/components/searchbar.php')); ?>
                </div>
                
                <!-- SEARCH RESULTS NEED TO GO HERE -->
                <h1 class="font-quicksand font-bold text-5xl mb-12">Found Results For "<?php echo h($search_results); ?>"</h1>
                <div class="container flex flex-wrap justify-evenly">
                    <?php while($location = $search_db->fetch_assoc()): ?>
                        <!-- <div class="flex-wrap"> -->
                        <?php include('partials/components/card.php'); ?>
                        <!-- </div> -->
                    <?php endwhile; ?>
                </div>
            </main>
        </div>
        <!-- Footer Partial -->
        <?php include(get_path('public/partials/global/footer.php')); ?>
    </body>
</html>