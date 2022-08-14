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
        <form action="<?php echo url('add_blog') ?>" method="post" class="" enctype="multipart/form-data">
            <div class="pb-4">
                <label class="text-gray-100" for="title">Blog Title</label><br>
                <input class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="title" name="title" type="text" required><br>
            </div>
            <div class="">
                <label class="text-gray-100" for="description">Description</label><br>
                <textarea class="w-full outline-none py-1 px-2 mt-4 text-gray-800" name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <div class="">
                <label class="text-gray-100" for="description">Blog Image</label><br>
                <input type="file" name="blog_photo">
            </div>
            <div class="">

                <input class="bg-gray-800 hover:bg-gray-900 text-gray-100 px-4 py-1 cursor-pointer mt-10" id="submit" name="submit" type="submit">
            </div>
            <hr class="my-4">
        </form>
    </div>
</div>
<?php
include __DIR__ . './partials/_footer.php';
?>