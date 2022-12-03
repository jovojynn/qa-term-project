<div class="review-card flex flex-col w-[35rem] h-96 p-12 border-solid border border-[#E3E3E3] shadow-lg">
    <div class="user-rating flex justify-between mb-4">
        <div class="flex items-center">
            <i class="text-coral fa-xl fa-solid fa-circle-user mr-4"></i>
            <p class="font-quicksand font-semibold text-lg"><?php echo h($review['name']); ?></p>
        </div>
        <?php include(get_path('public/partials/components/star-rating-sm.php')); ?>
    </div>
    <div class="review-summary font-quicksand text-lg">
        <h3 class="font-bold pb-2"><?php echo h($review['title']); ?></h3>
        <p><?php echo h($review['body']); ?></p>
    </div>
</div>