<?php
include __DIR__.'./partials/_header.php';
?>
<div class="content pl-80 pt-8">
    <div class="bg-gray-700 shadow-md  shadow-gray-500 w-8/12 p-4">
        <h2 class="text-gray-50 text-2xl text-center tracking-wide mb-4">Update Profile</h2>
        <hr>
        <div class="p-4">
            <?php foreach ($users as $user) { ?>
                
            
            <form action="<?php echo url('profileUpdate'); ?>" method="post" class="" enctype="multipart/form-data">
                <div class="pb-4">
                    <input value="<?php echo $user['u_id']; ?>" class="invisible" type="text" name="u_id" id=""><br>
                    <label class="text-gray-100" for="username">User Name</label><br>
                    <input value="<?php echo $user['username']; ?>" class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="username" name="username" type="text" required><br>
                </div>
                <div class="pb-4">
                    <label class="text-gray-100" for="email">Email Address</label><br>
                    <input value="<?php echo $users[0]['email']; ?>" class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="email" name="email" type="email"><br>
                </div>

                <div class="pb-4">
                    <label class="text-gray-100" for="address">Address</label><br>
                    <textarea class="w-full outline-none py-1 px-2 mt-4 text-gray-800" name="address" id="address" cols="30" rows="3"><?php echo $user['address']; ?></textarea>
                </div>
                <div class="pb-4">
                    <label class="text-gray-100" for="about_me">About Me</label><br>
                    <textarea class="w-full outline-none py-1 px-2 mt-4 text-gray-800" name="about_me" id="about_me" cols="30" rows="3"><?php echo $user['about_me']; ?></textarea>
                </div>
                <div class="pb-4">
                    <label class="text-gray-100" for="youtube">Youtube</label><br>
                    <input value="<?php echo $user['youtube']; ?>" class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="youtube" name="youtube" type="text">
                </div>
                <div class="pb-4">
                    <label class="text-gray-100" for="facebook">Facebook</label><br>
                    <input value="<?php echo $user['facebook']; ?>" class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="facebook" name="facebook" type="text">
                </div>
                <div class="pb-4">
                    <label class="text-gray-100" for="twitter">Twitter</label><br>
                    <input value="<?php echo $user['twitter']; ?>" class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="twitter" name="twitter" type="text">
                </div>
                <div class="pb-4">
                    <label class="text-gray-100" for="github">Github</label><br>
                    <input value="<?php echo $user['github']; ?>" class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="github" name="github" type="text">
                </div>
                <div class="pb-4">
                    <label class="text-gray-100" for="phone">Phone</label><br>
                    <input value="<?php echo $user['phone']; ?>" class="w-full outline-none py-1 px-2 mt-4 text-gray-800" id="phone" name="phone" type="text">
                </div>
                <div class="pb-4">
                    <label class="text-gray-100" for="profile_photo">Profile Image</label><br>
                    <input value="<?php echo $user['profile_photo']; ?>" type="file" name="profile_photo" id="profile_photo">
                    <img style="height:200px ;" src="<?php echo media('profile_photo/').$user['profile_photo']; ?>" alt="image">
                </div>
                <div class="pb-4">
                    <input class="bg-gray-800 hover:bg-gray-900 text-gray-100 px-4 py-1 cursor-pointer mt-10" id="submit" name="update" type="submit" value="Update">
                </div>

            </form>
            <?php } ?>

        </div>
    </div>
</div>

<?php
include __DIR__.'./partials/_footer.php';

?>