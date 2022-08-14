<?php
include __DIR__ . './partials/_header.php';
?>
<div class="content pl-80 pt-8">
    <div class="w-11/12">
        <div class="py-4 flex items-center justify-between">
            <h2 class="text-xl font-semibold">Portfolio</h2>
            <a class="px-4 py-1 bg-gray-700 hover:bg-gray-900 text-gray-100" href="<?php echo url('portfolio') ?>">Add Portfolio</a>
        </div>


        <hr>
        <div>
            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Portfolio Title
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Portfolio Link
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Portfolio Author
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Portfolio Image
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $item) : ?>

                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?php echo $item['title'] ?>
                                </th>
                                <td class="py-4 px-6">
                                    <a href="<?php echo $item['portfolio_link'] ?>"> <?php echo $item['portfolio_link'] ?></a>
                                </td>
                                <td class="py-4 px-6">
                                    <?php echo $item['portfolio_author'] ?>
                                </td>
                                <td class="py-4 px-6">
                                    <img class="object-fill h-10" style="height:40px;" src="<?php echo media('/Portfolio/' . $item['portfolio_image']) ?>" alt="">
                                </td>
                                <td class="py-4 px-6 flex gap-2">
                                    <a class="px-2 py-1 bg-sky-600 text-gray-100 " href="">Edit</a>
                                    <a class="px-2 py-1 bg-red-600 text-gray-100 " href="">Delete</a>

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