<?php
include __DIR__ . './partials/_header.php';
?>
<div class="content pl-80 pt-8">
    <div class="bg-gray-700 p-4 w-3/5">
        <div>
            <div class="bg-red-300 w-full text-red-500">
                <?php
                if (isset($_SESSION['errors'])) {
                    echo $_SESSION['errors'];
                    unset($_SESSION['errors']);
                }
                ?>
            </div>
            <h2 class="text-xl text-center text-gray-100 font-semibold capitalize">Setting Update</h2>

        </div>
        <?php foreach ($data as $item) : ?>
            <form action="<?php echo url('updateSetting') ?>" method="post" class="" enctype="multipart/form-data">
                <div class="pb-4">
                    <input class="invisible" type="text" name="setings_id" value="<?php echo $item['setings_id'] ?>" id=""><br>
                    <label class="text-gray-100" for="welcome_title">Welcome title</label><br>
                    <input class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="welcome_title" value="<?php echo $item['welcome_title'] ?>" name="welcome_title" type="text" required><br>
                </div>
                <div class="">
                    <label class="text-gray-100" for="description">Description</label><br>
                    <textarea class="w-full outline-none py-1 px-2 mt-4 text-gray-800" value="" name="description" id="description" cols="30" rows="10"><?php echo $item['description'] ?></textarea>
                </div>
                <div class="">
                    <label class="text-gray-100" for="description">Site Logo</label><br>
                    <input type="file" name="site_logo" value="<?php echo $item['site_logo'] ?>">
                    <img src="<?php echo media('logo/') . $item['site_logo'] ?> ?>" alt="">
                </div>
                <div class="pb-4">
                    <label class="text-gray-100" for="footer_text">Footer Text</label><br>
                    <input class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="footer_text" value="<?php echo $item['footer_text'] ?>" name="footer_text" type="text" required><br>
                </div>
                <div class="">
                    <input class="bg-gray-800 hover:bg-gray-900 text-gray-100 px-4 py-1 cursor-pointer mt-10" id="submit" name="submit" type="submit">
                </div>
                <hr class="my-4">
            </form>
        <?php endforeach; ?>
    </div>
</div>
<?php
include __DIR__ . './partials/_footer.php';
?>