<?php
include __DIR__ . './partials/_header.php';
?>
<div class="content pl-80 pt-8">
    <div class="bg-gray-700 p-4 w-3/5">
        <div>
            <?php if (isset($_SESSION['errors'])) : ?>
                <?php foreach ($_SESSION['errors'] as $error) : ?>
                    <div class="bg-red-300 w-full text-red-500"><?php echo $error ?></div>
                <?php endforeach; ?>
            <?php endif; ?>
            <?php unset($_SESSION['errors']); ?>
            <?php if (isset($_SESSION['success'])) : ?>
                <div role="alert" class="bg-green-200 text-green-600"><?php echo $_SESSION['success'] ?></div>
            <?php endif; ?>
            <?php unset($_SESSION['success']); ?>

            <h2 class="text-xl text-center text-gray-100 font-semibold capitalize">Add Blog</h2>
        </div>
        <form action="<?php echo url('blog_update') ?>" method="post" class="" enctype="multipart/form-data">
            <?php foreach ($single_blog as $old_blog) : ?>
                <div class="pb-4 ">
                    <input class="invisible" type="text" value="<?php echo $old_blog['blog_id'] ?>" name="blog_id" id="blog_id"><br>
                    <label class="text-gray-100" for="title">Blog Title</label><br>
                    <input value="<?php echo $old_blog['title'] ?>" class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="title" name="title" type="text" required><br>
                </div>
                <div class="">
                    <label class="text-gray-100" for="description">Description</label><br>
                    <textarea class="w-full outline-none py-1 px-2 mt-4 text-gray-800" name="description" id="description" cols="30" rows="10">
                    <?php echo $old_blog['description'] ?>
                    </textarea>
                </div>
                <div class="">
                    <label class="text-gray-100" for="blog_photo">Blog Image</label><br>
                    <input type="file" name="blog_photo">
                    <img style="width:50%;" src="<?php echo media('blog/') . $old_blog['blog_photo'] ?>" alt="">
                </div>
                <div class="">

                    <input class="bg-gray-800 hover:bg-gray-900 text-gray-100 px-4 py-1 cursor-pointer mt-10" id="submit" name="submit" type="submit">
                </div>
            <?php endforeach; ?>
            <hr class="my-4">
        </form>
    </div>
</div>
<?php
include __DIR__ . './partials/_footer.php';
?>