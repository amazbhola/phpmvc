<?php include_once 'partials/_header.php' ?>
<div class="content">
  <section>
    <div class="bg-gray-500 pb-20">
      <div class="p-8">
        <h2 class="text-4xl font-bold text-center text-gray-800 capitalize">blogs</h2>
      </div>
      <div class="p-8 flex flex-wrap justify-around mx-auto gap-2  ">
        <!-- portfolio -->
        <?php foreach ($blogData as $blog) : ?>
          <div class="w-full md:basis-1/4 lg:basis-1/6 bg-gray-200 shadow ">
            <div class="p-4 border ">
              <img class="object-cover" src="<?php echo media('blog/') . $blog['blog_photo'] ?>" alt="">
              <h3 class="capitalize text-3xl font-semibold py-2"><?php echo $blog['title'] ?></h3>
              <div>
                <?php echo substr($blog['description'], 0, 100) ?>
              </div>
              <div class="pt-2 flex items-center gap-3">
                <div class="bg-blue-500 px-2 text-gray-100 flex items-center">
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
  <section>
    <div class="bg-contact-image">
      <div class="py-10">
        <h3 class="text-4xl font-bold text-center text-gray-800">Contact Me</h3>
      </div>
      <div class="p-8 flex flex-wrap  gap-2 ">
        <div class="w-full md:w-3/5">
          <form action="<?php echo url('userLogin') ?>" method="post" class="">
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
        <?php foreach ($setting_data as $footer) : ?>
          <img src="<?php echo media('logo/') . $footer['site_logo'] ?>" alt="">
          <h3 class="text-2xl font-semibold pb-4 capitalize"><?php echo $footer['description'] ?></h3>
        <?php endforeach ?>

      </div>
      <div class="w-full md:w-3/6 space-y-4">
        <h3 class="text-2xl font-semibold pb-4 capitalize">recent artical</h3>
        <?php foreach ($blogData as $blog) : ?>
          <h4 class="font-bold text-xl"><?php echo $blog['title'] ?></h4>
          <p><?php echo $blog['description'] ?></p>
        <?php endforeach; ?>

        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique nostrum nisi exercitationem dicta sequi nam eius quis! Obcaecati est dicta nulla asperiores unde accusantium, excepturi cumque quaerat sequi rerum vitae!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique nostrum nisi exercitationem dicta sequi nam eius quis! Obcaecati est dicta nulla asperiores unde accusantium, excepturi cumque quaerat sequi rerum vitae!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique nostrum nisi exercitationem dicta sequi nam eius quis! Obcaecati est dicta nulla asperiores unde accusantium, excepturi cumque quaerat sequi rerum vitae!</p> -->
      </div>
      <div class="w-full md:w-1/6">
        <h3 class="text-2xl font-semibold pb-4 capitalize">Contact Me</h3>
        <div class="capitalize">
          <p>location</p>
          <p>phone</p>
          <p>email address</p>
        </div>
      </div>
    </div>
  </section>
  <footer class="bg-gray-800 p-8">
    <h3 class="text-center text-xl text-gray-100">
      <?php foreach ($setting_data as $footer) {
        echo $footer['footer_text'];
      } ?>
    </h3>
  </footer>
</div>
<?php include_once 'partials/_footer.php' ?>