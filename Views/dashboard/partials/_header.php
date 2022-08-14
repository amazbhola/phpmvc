<?php
checkNotLogin();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo assets('main.css') ?>">
</head>

<body>
    <div>
        <div class="text-right">

        </div>
        <nav class="bg-gray-700 h-14 pl-80 pr-8 flex items-center justify-between text-gray-100">
            <div>
                <a class="p-2" href="<?php echo url('/') ?>">
                    <img src="<?php echo media('logo/' . setting_data()[0]['site_logo']) ?>" alt="" style="height:40px;" sizes="" srcset="">
                </a>
            </div>
            <div class="flex justify-center items-center gap-3">
                <a class="bg-gray-800 hover:bg-gray-900 px-4 py-1 capitalize" href="">Welcome <?php echo $_SESSION['username'] ?></a>
                <a class="bg-gray-800 hover:bg-gray-900 px-4 py-1" href="<?php echo url('logout') ?>">logout</a>

            </div>
        </nav>
        <div class="bg-gray-800 w-72 h-full fixed top-0 left-0 z-10">
            <div class="text-gray-100 bg-gray-800 h-14 flex items-center justify-center">
                <h2 class="text-xl font-semibold hover:tracking-wide hover:text-white capitalize"><a href="<?php echo url('/') ?>">Dashboard</a></h2>
            </div>
            <div class="flex flex-col gap-1 p-4 w-full text-gray-100">

                <a class="hover:bg-gray-900 px-2 py-1 inline-block text-sm hover:font-semibold capitalize" href="<?php echo url('myblog') ?>">my blog</a>
                <a class="hover:bg-gray-900 px-2 py-1 inline-block text-sm hover:font-semibold capitalize" href="<?php echo url('portfolios') ?>">portfolio list</a>
                <a class="hover:bg-gray-900 px-2 py-1 inline-block text-sm hover:font-semibold capitalize" href="<?php echo url('setting') ?>">settings update</a>
                <a class="hover:bg-gray-900 px-2 py-1 inline-block text-sm hover:font-semibold capitalize" href="<?php echo url('profileUpdate') ?><?php echo $_SESSION['u_id'] ?>">update profile</a>
            </div>
        </div>