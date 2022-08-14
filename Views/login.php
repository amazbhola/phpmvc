<?php include_once VIEWS . '/partials/_header.php';  ?>
<div class="min-h-screen flex items-center justify-center bg-gray-800">
    <div class="bg-gray-700 opacity-80 shadow-md  shadow-gray-500 w-4/12 p-4">
        <h2 class="text-gray-50 text-lg text-center tracking-wide mb-4">Login</h2>
        <hr>
        <div class="p-4">
           
            <form action="<?php echo url('userLogin') ?>" method="post" class="">
                <div class="pb-4">
                    <label class="text-gray-100" for="email">Email Address</label><br>
                    <input class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="email" name="email" type="email" required><br>
                </div>
                <div class="">
                    <label class="text-gray-100" for="password">Password</label><br>
                    <input class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="password" name="password" type="password" required>
                </div>
                <div class="">

                    <input class="bg-gray-800 hover:bg-gray-900 text-gray-100 px-4 py-1 cursor-pointer mt-10" id="submit" name="submit" type="submit">
                </div>
                <hr class="my-4">
            </form>
            <div class="flex items-center justify-between text-gray-100">
                <div>For new Registration</div>
                <div>
                    <a href="<?php echo url('register') ?>">Registration ...</a>
                </div>
            </div>
            <div class="text-red-500 font-semibold"><?php echo sessionMassageGet() ?></div>
        </div>
    </div>
</div>
<?php include_once VIEWS . '/partials/_footer.php';  ?>