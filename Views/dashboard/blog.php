<?php
include __DIR__ . './partials/_header.php';
?>
<div class="content pl-80 pt-8">
    <div class="w-11/12">
        <div class="py-4 flex items-center justify-between">
            <h2 class="text-xl font-semibold">My Blog</h2>
            <a class="px-4 py-1 bg-gray-700 hover:bg-gray-900 text-gray-100 hover:font-semibold" href="<?php echo url('addblog') ?>">Add Blog</a>
        </div>


        <hr>
        <div>
            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Blog Title
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Blog Description
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Author Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Blog Photo
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $blog) : ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?php echo $blog['title'] ?>
                                </th>
                                <td class="py-4 px-6">
                                    <?php echo substr($blog['description'], 0, 150) ?>
                                </td>
                                <td class="py-4 px-6">
                                    <?php echo $blog['author_name'] ?>
                                </td>
                                <td class="py-4 px-6 ">
                                    <img class="object-fill h-10" style="height:40px;" src="<?php echo media('/blog/' . $blog['blog_photo']) ?>" alt="">
                                </td>
                                <td class="py-4 px-6 flex gap-2">
                                    <a class="px-2 py-1 bg-sky-600 text-gray-100 " href="<?php echo url('blog_edit') ?><?php echo $blog['blog_id'] ?>">Edit</a>
                                    <a class="px-2 py-1 bg-red-600 text-gray-100 " href="<?php echo url('blog_delete') ?><?php echo $blog['blog_id'] ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<?php
include __DIR__ . './partials/_footer.php';
?>