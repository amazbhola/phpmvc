<?php include_once 'partials/_header.php'; ?>
<div class="content">
  <header class="">
    <div class="bg-header-image bg-cover h-fit py-40">
      <div class="flex flex-wrap-reverse md:flex-row p-8">
        <div class="w-full md:w-3/5  flex flex-col items-center justify-center">
          <h2 class="text-6xl text-center font-semibold capitalize p-10  md:px-20 md:py-5 font-sans text-amber-400 drop-shadow-2xl ">Hi I'm <?php echo $user[0]['username']; ?></h2>
          <h4 class="text-xl text-gray-100 font-semibold">Web Developer, PHP related issues fixer</h4>
          <p class="p-10 tracking-widest  text-xl text-center text-gray-100 font-semibold"><?php echo $user[0]['about_me']; ?></p>
          <div class="pt-10 flex gap-3 items-center">
            <a class="bg-blue-600 tracking-wide px-6 py-3 rounded-3xl text-gray-100 text-center font-semibold text-sm" href="<?php echo $user[0]['facebook']; ?>">Facebook</a>
            <a class="bg-sky-600 tracking-wide px-6 py-3 rounded-3xl text-gray-100 text-center font-semibold text-sm" href="<?php echo $user[0]['twitter']; ?>">Twitter</a>
            <a class="bg-red-600 tracking-wide px-6 py-3 rounded-3xl text-gray-100 text-center font-semibold text-sm" href="<?php echo $user[0]['youtube']; ?>">Youtube</a>
            <a class="bg-gradient-to-t from-blue-700 via-blue-600 to-blue-700 tracking-wide px-6 py-3 rounded-3xl text-gray-100 text-center font-semibold text-sm" href="<?php echo $user[0]['github']; ?>">Github</a>
          </div>
        </div>
        <div class="w-full md:w-2/5 flex items-center justify-center">
          <img style="height:400px; width:400px;" class="object-cover rounded-full" src="<?php echo media('profile_photo/'.$user[0]['profile_photo']); ?>" alt="images">
        </div>

      </div>
    </div>
  </header>
  <section>
    <div class="bg-gray-300 pb-20">
      <div class="p-8">
        <h2 class="text-4xl font-bold text-center text-gray-800">Portfolios</h2>
      </div>
      <div class="p-8 flex flex-wrap justify-around mx-auto gap-2  ">
        <!-- portfolio -->
        <?php foreach ($portfolios as $portfolio) { ?>

          <a href="<?php echo $portfolio['portfolio_link']; ?>">
            <div class="w-full md:basis-1/4 lg:basis-1/6 bg-gray-200 shadow ">
              <div class="p-4 border">
                <img style="height:200px;" class="object-cover" src="<?php echo media('Portfolio/').$portfolio['portfolio_image']; ?>" alt="">
                <h3 class="capitalize text-3xl font-semibold py-2"><?php echo $portfolio['title']; ?></h3>

              </div>
            </div>
          </a>
          <!-- portfolio -->
        <?php } ?>

      </div>
    </div>
  </section>
  <section>
    <div class="bg-gray-500 pb-20">
      <div class="p-8">
        <h2 class="text-4xl font-bold text-center text-gray-800 capitalize">blogs</h2>
      </div>
      <div class="p-8 flex flex-wrap justify-around mx-auto gap-2  ">
        <!-- portfolio -->
        <?php foreach ($blogData as $blog) { ?>
          <div class="w-full md:basis-1/4 lg:basis-1/6 bg-gray-200 shadow ">
            <div class="p-4 border flex flex-col justify-between  ">
              <img class="object-cover" src="<?php echo media('blog/').$blog['blog_photo']; ?>" alt="">
              <h3 class="capitalize text-2xl font-semibold py-2"><?php echo substr($blog['title'], 0, 20); ?></h3>
              <div>
                <?php echo substr($blog['description'], 0, 100); ?>
              </div>
              <div class="pt-2 flex items-center gap-3">
                <div class="bg-blue-500 px-2 text-gray-100 flex items-center">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </span>
                  <?php echo $blog['author_name']; ?>
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
                  <a href="<?php echo url('singleBlog'); ?><?php echo $blog['blog_id']; ?>">Read More...</a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

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
  <section>
    <div class="bg-contact-image">
      <div class="py-10">
        <h3 class="text-4xl font-bold text-center text-gray-800">Contact Me</h3>
      </div>
      <div class="p-8 flex flex-wrap  gap-2 ">
        <div class="w-full md:w-3/5">
          <form action="<?php echo url('userLogin'); ?>" method="post" class="">
            <div class="pb-4">
              <label class="text-gray-800" for="email">Name</label><br>
              <input class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="email" name="email" type="email" required><br>
            </div>
            <div class="pb-4">
              <label class="text-gray-800" for="email">Email Address</label><br>
              <input class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="email" name="email" type="email" required><br>
            </div>
            <div class="">
              <label class="text-gray-800" for="subject">subject</label><br>
              <input class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="subject" name="subject" type="text" required>
            </div>
            <div class="">
              <label class="text-gray-800" for="massage">Massage</label><br>
              <textarea class="w-full" name="massage" id="massage" cols="30" rows="10"></textarea>
            </div>
            <div class="">
              <input class="bg-gray-800 hover:bg-gray-900 text-gray-100 px-4 py-1 cursor-pointer mt-10" id="submit" name="submit" type="submit">
            </div>
            <hr class="my-4">
          </form>
        </div>
        <div class="w-full md:w-2/5"></div>

      </div>
    </div>
  </section>
  <section>
    <div class="flex flex-wrap justify-between md:flex-row gap-2 bg-gray-800 text-gray-100 p-8">
      <div class="w-full md:w-1/6">
        <?php foreach ($setting_data as $footer) { ?>
          <img src="<?php echo media('logo/').$footer['site_logo']; ?>" alt="">
          <h3 class="text-2xl font-semibold pb-4 capitalize"><?php echo $footer['description']; ?></h3>
        <?php } ?>

      </div>
      <div class="w-full md:w-3/6 space-y-4">
        <h3 class="text-2xl font-semibold pb-4 capitalize">recent artical</h3>
        <?php foreach ($blogData as $blog) { ?>
          <a href="">
            <h4 class="font-bold text-xl"><?php echo $blog['title']; ?></h4>
            <p><?php echo substr($blog['description'], 0, 100); ?></p>
          </a>
        <?php } ?>
      </div>
      <div class="w-full md:w-1/6">
        <h3 class="text-2xl font-semibold pb-4 capitalize">Contact Me</h3>
        <div class="capitalize flex flex-col gap-4">
          <p>location : <?php echo $user[0]['address']; ?></p>
          <p>phone : <?php echo $user[0]['phone']; ?></p>
          <p>email address : <?php echo $user[0]['email']; ?></p>
        </div>
      </div>
    </div>
  </section>

  <?php include_once 'partials/_footer.php'; ?>