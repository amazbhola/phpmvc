<?php
include_once VIEWS . '/partials/_header.php';
?>
<section class="">
    <?php foreach ($blogByID as $blog) : ?>
        <div class="p-8 bg-gray-300 shadow-md w-5/6">
            <div class="pb-8">
                <h3 class=" text-gray-900 text-4xl font-semibold capitalize"><?php echo $blog['title'] ?></h3>
            </div>
            <div class="flex gap-2 py-2">
                <div class="bg-gray-800 text-gray-100 px-2 py-1 shadow capitalize">Author : <?php echo $blog['author_name'] ?></div>
                <div class="bg-gray-800 text-gray-100 px-2 py-1 shadow">Post Date : <?php echo $blog['created_at'] ?></div>
            </div>
            <div class="pt-8 flex items-center justify-center">
                <img style="height:400px ;" src="<?php echo media('blog/' . $blog['blog_photo'])  ?>" alt="image">
            </div>
            <div class="pt-8">
                <div class="text-xl"><?php echo $blog['description'] ?></div>
            </div>
        </div>
    <?php endforeach; ?>
</section>


<?php
include_once VIEWS .  '/partials/_footer.php';
?>