<?php
include_once VIEWS . '/partials/_header.php';
?>

<section>
    <div class="bg-gray-500 pb-20">
        <div class="p-8">
            <h2 class="text-4xl font-bold text-center text-gray-800 capitalize">blogs</h2>
        </div>
        <div class="p-8 flex flex-wrap justify-around mx-auto gap-2  ">
            <!-- portfolio -->
            <?php foreach ($blogData as $blog) : ?>
                <div class="w-full md:basis-1/4 lg:basis-1/6 bg-gray-200 shadow ">
                    <div class="p-4 border flex flex-col justify-between  ">
                        <img class="object-cover" src="<?php echo media('blog/') . $blog['blog_photo'] ?>" alt="">
                        <h3 class="capitalize text-2xl font-semibold py-2"><?php echo substr($blog['title'], 0, 20) ?></h3>
                        <div>
                            <?php echo substr($blog['description'], 0, 100) ?>
                        </div>
                        <div class="pt-2 flex items-center gap-3">
                            <div class="bg-blue-500 px-2 text-gray-100 flex items-center capitalize">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </span>
                                <?php echo $blog['author_name'] ?>
                            </div>
                            <div class="bg-blue-500 px-2 text-gray-100 flex items-center">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                </span>
                                PHP
                            </div>
                            <div>
                                <a href="<?php echo url('singleBlog') ?><?php echo $blog['blog_id'] ?>">Read More...</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- portfolio -->
            <!-- portfolio -->
            <!-- <div class="w-full md:basis-1/4 lg:basis-1/6 bg-gray-200 shadow ">
          <div class="p-4 border ">
            <img class="object-cover" src="http://localhost:81/phpmvc/images/portfolio-1.webp" alt="">
            <h3 class="capitalize text-3xl font-semibold py-2">blogs Title</h3>
            <div class="pt-2 flex items-center gap-3">
              <span class="bg-blue-500 rounded-2xl px-4 py-1 text-gray-100">Laravel</span>
              <span class="bg-blue-500 rounded-2xl px-4 py-1 text-gray-100">PHP</span>
            </div>
          </div>
        </div> -->
            <!-- portfolio -->
            <!-- portfolio -->
            <!-- <div class="w-full md:basis-1/4 lg:basis-1/6 bg-gray-200 shadow ">
          <div class="p-4 border ">
            <img class="object-cover" src="http://localhost:81/phpmvc/images/portfolio-1.webp" alt="">
            <h3 class="capitalize text-3xl font-semibold py-2">blogs Title</h3>
            <div class="pt-2 flex items-center gap-3">
              <span class="bg-blue-500 rounded-2xl px-4 py-1 text-gray-100">Laravel</span>
              <span class="bg-blue-500 rounded-2xl px-4 py-1 text-gray-100">PHP</span>
            </div>
          </div>
        </div> -->
            <!-- portfolio -->
            <!-- portfolio -->
            <!-- <div class="w-full md:basis-1/4 lg:basis-1/6 bg-gray-200 shadow ">
          <div class="p-4 border ">
            <img class="object-cover" src="http://localhost:81/phpmvc/images/portfolio-1.webp" alt="">
            <h3 class="capitalize text-3xl font-semibold py-2">blogs Title</h3>
            <div class="pt-2 flex items-center gap-3">
              <span class="bg-blue-500 rounded-2xl px-4 py-1 text-gray-100">Laravel</span>
              <span class="bg-blue-500 rounded-2xl px-4 py-1 text-gray-100">PHP</span>
            </div>
          </div>
        </div> -->
            <!-- portfolio -->
            <!-- portfolio -->
            <!-- <div class="w-full md:basis-1/4 lg:basis-1/6 bg-gray-200 shadow ">
          <div class="p-4 border ">
            <img class="object-cover" src="http://localhost:81/phpmvc/images/portfolio-1.webp" alt="">
            <h3 class="capitalize text-3xl font-semibold py-2">blogs Title</h3>
            <div class="pt-2 flex items-center gap-3">
              <span class="bg-blue-500 rounded-2xl px-4 py-1 text-gray-100">Laravel</span>
              <span class="bg-blue-500 rounded-2xl px-4 py-1 text-gray-100">PHP</span>
            </div>
          </div>
        </div> -->
            <!-- portfolio -->

        </div>
    </div>
</section>

<?php
include_once VIEWS .  '/partials/_footer.php';
?>