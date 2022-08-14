<?php

namespace App\Controllers;

use App\Models\Blog;

class BlogsController extends Blog
{
    public function index()
    {

        return views('dashboard/blogform');
    }
    public function show()
    {
        $data = $this->select(self::$table, '*', null, null, null, null);
        return views('dashboard/blog', compact('data'));
    }


    /**
     * Blog create function
     *
     * @return void
     */
    public function create()
    {
        session_start();
        $error = [];

        $photo_name = $_FILES['blog_photo']['name'];
        $photo_type = $_FILES['blog_photo']['type'];
        $photo_tmp_name = $_FILES['blog_photo']['tmp_name'];
        $blog_photo = strtolower(pathinfo($photo_name, PATHINFO_EXTENSION));
        $ext = array('jpg', 'png', 'jpeg');
        if ($photo_type != in_array($blog_photo, $ext)) {
            $error[] = "File extension not matched";
            $_SESSION['errors'] = $error;
        }

        $path = 'Media/blog';
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $logoFolder = 'Media/blog/';
        if (empty($error)) {
            move_uploaded_file($photo_tmp_name, $logoFolder . $photo_name);
            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'blog_photo' => $photo_name,
                'author_name' => $_SESSION['username'],
                'author_role' => $_SESSION['role']

            ];
            $this->addBlog($data);

            return header("Location:" . url('addblog'));
        }
        return header("Location:" . url('addblog'));
    }
    public function edit(string $id = null)
    {
        $single_blog = $this->find($id);
        return views('dashboard/blogform_edit', compact('single_blog'));
    }
    public function update_blog()
    {
        session_start();
        $error = [];

        $photo_name = $_FILES['blog_photo']['name'];
        $photo_type = $_FILES['blog_photo']['type'];
        $photo_tmp_name = $_FILES['blog_photo']['tmp_name'];
        $blog_photo = strtolower(pathinfo($photo_name, PATHINFO_EXTENSION));
        $ext = array('jpg', 'png', 'jpeg');
        if ($photo_type != in_array($blog_photo, $ext)) {
            $error[] = "File extension not matched";
            $_SESSION['errors'] = $error;
        }

        $path = 'Media/blog';
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $logoFolder = 'Media/blog/';
        if (empty($error)) {
            $result = $this->find($_POST['blog_id']);
            $abspath = $_SERVER['DOCUMENT_ROOT'] . '/' . BASE_DIR . '/Media/blog/' . $result[0]['blog_photo'];
            if (isset($_FILES['blog_photo'])) {
                unlink($abspath);
                move_uploaded_file($photo_tmp_name, $logoFolder . $photo_name);
            }

            $where = $_POST['blog_id'];
            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'blog_photo' => $photo_name,
                'author_name' => $_SESSION['username'],
                'author_role' => $_SESSION['role']

            ];

            $this->updateBlog($data, $where);

            return header("Location:" . url('myblog'));
        }
    }
    public function blog_delete(string $id)
    {
        $result = $this->find($id);

        $abspath = $_SERVER['DOCUMENT_ROOT'] . '/' . BASE_DIR . '/Media/blog/' . $result[0]['blog_photo'];


        unlink($abspath);

        $this->destroy($id);

        return header("Location:" . url('myblog'));
    }
}
