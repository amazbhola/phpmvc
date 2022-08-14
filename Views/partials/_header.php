<?php checkLogin(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo setting_data('welcome_title')?></title>
  <link rel="stylesheet" href="<?php echo assets('main.css') ?>">
</head>

<body class="bg-gray-200">
  <div>
    <div class="bg-gray-700 h-16 flex items-center justify-between px-8 shadow-md ">
      <div class="uppercase text-gray-100 font-bold tracking-widest text-2xl ">
        <a href="<?php echo url('/') ?>"><img class="w-28 h-auto" src="<?php echo media('logo/') . setting_data('site_logo') ?>" alt=""></a>
      </div>
      <div class="flex gap-3 justify-center items-center">
        <a class="px-4 py-1 bg-gray-800 text-white text-sm hover:bg-gray-900 " href="<?php echo url('/') ?>">Home</a>
        <a class="px-4 py-1 bg-gray-800 text-white text-sm hover:bg-gray-900 " href="<?php echo url('portfolio_page') ?>">Portfolio</a>
        <a class="px-4 py-1 bg-gray-800 text-white text-sm hover:bg-gray-900 " href="<?php echo url('blog') ?>">Blogs</a>
        <a class="px-4 py-1 bg-gray-800 text-white text-sm hover:bg-gray-900 " href="<?php echo url('login') ?>">Login</a>
      </div>
    </div>