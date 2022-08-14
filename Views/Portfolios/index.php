<?php include_once VIEWS . '/partials/_header.php';  ?>


<section>
    <div class="bg-gray-300 pb-20">
        <div class="p-8">
            <h2 class="text-4xl font-bold text-center text-gray-800">Portfolios</h2>
        </div>
        <div class="p-8 flex flex-wrap justify-around mx-auto gap-2  ">
            <!-- portfolio -->
            <?php foreach ($portfolios as $portfolio) : ?>

                <a href="<?php echo $portfolio['portfolio_link'] ?>">
                    <div class="w-full md:basis-1/4 lg:basis-1/6 bg-gray-200 shadow ">
                        <div class="p-4 border">
                            <img style="height:200px;" class="object-cover" src="<?php echo media('Portfolio/') . $portfolio['portfolio_image'] ?>" alt="">
                            <h3 class="capitalize text-3xl font-semibold py-2"><?php echo $portfolio['title'] ?></h3>

                        </div>
                    </div>
                </a>
                <!-- portfolio -->
            <?php endforeach; ?>

        </div>
    </div>
</section>
<?php include_once VIEWS .  '/partials/_footer.php'; ?>