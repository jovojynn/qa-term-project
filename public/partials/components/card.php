<a href="location.php" title="Universal Studios Japan">
    <div class="card bg-white drop-shadow-lg h-[27rem] mr-4">
        <img src="./images/<?php echo h($location['image_url']); ?>" alt="<?php echo h($location['name']); ?>">
        <div class="card-info p-4">
            <h3 class="font-quicksand font-bold text-xl"><?php echo h($location['name']); ?></h3>
            <h5 class="location font-quicksand text-lg text-[#838383]"><?php echo h($location['city']); ?></h5>
            <?php include(get_path('public/partials/components/star-rating-md.php')); ?>
        </div>
    </div>
</a>