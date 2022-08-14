<?php

namespace App\Controllers;

use App\Models\Setting;

class SettingsController extends Setting
{
    public function index()
    {
        $data = $this->showSettingData();
        return views('dashboard/setting', compact('data'));
    }
    public function create()
    {
        session_start();
        $error = [];

        $photo_name = $_FILES['site_logo']['name'];
        $photo_type = $_FILES['site_logo']['type'];
        $photo_tmp_name = $_FILES['site_logo']['tmp_name'];
        $blog_photo = strtolower(pathinfo($photo_name, PATHINFO_EXTENSION));
        $ext = array('jpg', 'png', 'jpeg');


        if ($photo_type != in_array($blog_photo, $ext)) {
            $error = 'File extension not matched';
            $_SESSION['errors'] = $error;
        }
        $path = 'Media/logo';
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }


        $logoFolder = 'Media/logo/';
        if (empty($error)) {
            move_uploaded_file($photo_tmp_name, $logoFolder . $photo_name);
            $params = [
                'welcome_title' => $_POST['welcome_title'],
                'description' => $_POST['description'],
                'site_logo' => $photo_name,
                'footer_text' => $_POST['footer_text'],
                'admin_role' => $_SESSION['role']
            ];
            $this->addSetting($params);
            return header("Location:" . url('dashboard'));
        }
        return header("Location:" . url('setting'));
    }

    public function updateSetting()
    {
        session_start();
        $error = [];

        $photo_name = $_FILES['site_logo']['name'];
        $photo_type = $_FILES['site_logo']['type'];
        $photo_tmp_name = $_FILES['site_logo']['tmp_name'];
        $blog_photo = strtolower(pathinfo($photo_name, PATHINFO_EXTENSION));
        $ext = array('jpg', 'png', 'jpeg');


        if ($photo_type != in_array($blog_photo, $ext)) {
            $error = 'File extension not matched';
            $_SESSION['errors'] = $error;
        }
        $path = 'Media/logo';
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }


        $logoFolder = 'Media/logo/';
        if (empty($error)) {
            $result = $this->find($_POST['setings_id']);
            $abspath = $_SERVER['DOCUMENT_ROOT'] . '/' . BASE_DIR . '/Media/logo/' . $result[0]['site_logo'];
            unlink($abspath);
            move_uploaded_file($photo_tmp_name, $logoFolder . $photo_name);
            $where = $_POST['setings_id'];
            $params = [
                'welcome_title' => $_POST['welcome_title'],
                'description' => $_POST['description'],
                'site_logo' => $photo_name,
                'footer_text' => $_POST['footer_text'],
                'admin_role' => $_SESSION['role']
            ];
            $this->updateSettingData($params, $where);
            return header("Location:" . url('setting'));
        }
    }
}
