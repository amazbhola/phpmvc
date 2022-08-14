<?php

namespace App\Controllers;

use App\Base\Model;
use App\Models\Portfolio;
use Exception;
use PDO;

class PortfoliosController extends Portfolio
{
    public function index()
    {
        $data = $this->showData();
        return views('dashboard/portfolios', compact('data'));
    }

    public function showform()
    {
        return views('dashboard/portfolioform');
    }

    public function create()
    {
        try {
            session_start();
            $portfolio_image = $_FILES['portfolio_image']['name'];
            $portfolio_type = $_FILES['portfolio_image']['type'];
            $portfolio_tmp_name = $_FILES['portfolio_image']['tmp_name'];

            $portfolioExt = strtolower(pathinfo($portfolio_image, PATHINFO_EXTENSION));
            $ext = array('jpg', 'png', 'jpeg');
            if ($portfolio_type != in_array($portfolioExt, $ext)) {
                $error[] = "File extension not matched";
                $_SESSION['errors'] = $error;
            }

            $path = 'Media/Portfolio';
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            $portfolio_folder = 'Media/Portfolio/';
            $portfolio_image = $_FILES['portfolio_image']['name'];
            $title = $_POST['title'];
            $portfolio_link = $_POST['portfolio_link'];

            $portfolio_author = $_SESSION['username'];
            if (empty($error)) {
                move_uploaded_file($portfolio_tmp_name, $portfolio_folder . $portfolio_image);
                $data = [
                    'portfolio_image' => $portfolio_image,
                    'title' => $title,
                    'portfolio_link' => $portfolio_link,
                    'portfolio_author' => $portfolio_author
                ];
                $this->setData($data);

                return header('Location:' . url('portfolios'));
            };
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
