<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Setting;
use Exception;

class UsersController extends User
{
    public function login()
    {
        $setting = new Setting();
        $setting_data = $setting->showSettingData();

        return views('login', compact('setting_data'));
    }

    public function register()
    {
        $setting = new Setting();
        $setting_data = $setting->showSettingData();

        return views('registration', compact('setting_data'));
    }

    public function create()
    {
        $username = trim(htmlspecialchars($_POST['username']));
        $email = trim(htmlspecialchars($_POST['email']));
        $password = md5($_POST['password']);
        $params = [
            'username' => $username,
            'email' => $email,
            'password' => $password,
        ];
        $this->setUser($params);

        return header('Location:'.url('login'));
    }

    public function profileUpdate($id)
    {
        $users = $this->findByID($id);

        return views('dashboard/profileUpdate', compact('users'));
    }

    public function setProfileUpdate()
    {
        try {
            session_start();
            $error = [];

            $photo_name = $_FILES['profile_photo']['name'];
            $photo_type = $_FILES['profile_photo']['type'];
            $photo_tmp_name = $_FILES['profile_photo']['tmp_name'];
            $blog_photo = strtolower(pathinfo($photo_name, PATHINFO_EXTENSION));
            $ext = ['jpg', 'png', 'jpeg'];

            if ($photo_type != in_array($blog_photo, $ext)) {
                $error = 'File extension not matched';
                $_SESSION['errors'] = $error;
            }
            $path = 'Media/profile_photo';
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            $logoFolder = 'Media/profile_photo/';
            if (empty($error)) {
                $result = $this->findByID($_POST['u_id']);
                $abspath = $_SERVER['DOCUMENT_ROOT'].'/'.BASE_DIR.'/Media/profile_photo/'.$result[0]['profile_photo'];
                unlink($abspath);
                move_uploaded_file($photo_tmp_name, $logoFolder.$photo_name);
                $where = $_POST['u_id'];
                $data = [
                    // 'username' => htmlspecialchars($_POST['username']),
                    // 'email' => htmlspecialchars($_POST['email']),
                    'address' => htmlspecialchars($_POST['address']),
                    'youtube' => htmlspecialchars($_POST['youtube']),
                    'facebook' => htmlspecialchars($_POST['facebook']),
                    'twitter' => htmlspecialchars($_POST['twitter']),
                    'github' => htmlspecialchars($_POST['github']),
                    'about_me' => htmlspecialchars($_POST['about_me']),
                    'phone' => htmlspecialchars($_POST['phone']),
                    'profile_photo' => $photo_name,
                ];

                $this->userUpdate($data, $where);

                return header('Location:'.url('dashboard'));
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function userLogin()
    {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $result = $this->getUser($email, $password);
        if ($result) {
            session_start();
            $_SESSION['email'] = $result[0]['email'];
            $_SESSION['u_id'] = $result[0]['u_id'];
            $_SESSION['username'] = $result[0]['username'];
            $_SESSION['role'] = $result[0]['role'];

            return header('location:'.url('dashboard'));
        } else {
            sessionMassageSet('Email and Password not Matched...');

            return header('location:'.url('login'));
        }
    }

    public function logout()
    {
        session_start();

        session_unset();

        session_destroy();

        return header('location:'.url('/'));
    }
}
