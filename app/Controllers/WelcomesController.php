<?php

namespace App\Controllers;

use App\Base\Controller;
use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Setting;
use App\Models\User;

class WelcomesController extends Controller
{
    public function index()
    {
        $blog = new Blog();
        $blogData = $blog->showBlog();
        

        $portfolio = new Portfolio();
        $portfolios = $portfolio->showData();

        $users = new User();
        $user = $users->find(1);

        return views('index', compact('blogData',  'portfolios', 'user'));
    }
    public function blogdata()
    {
        $blog = new Blog();
        $blogData = $blog->showBlog();
        $setting = new Setting();
        $setting_data = $setting->showSettingData();
        return views('blogs/blogpage', compact('blogData', 'setting_data'));
    }

    function singleBlog($id)
    {

        $blogs = new Blog();
        $blogByID = $blogs->find($id);
        $setting = new Setting();
        $setting_data = $setting->showSettingData();

        return views('blogs/index', compact('blogByID', 'setting_data'));
    }
    public function portfolio_page()
    {
        $portfolio = new Portfolio();
        $portfolios = $portfolio->showData();
        $setting = new Setting();
        $setting_data = $setting->showSettingData();
        return views('portfolios/index', compact('setting_data', 'portfolios'));
    }
    public function dashboard()
    {

        return views('dashboard/index');
    }

    public function function_check()
    {
       return views('practice');
    }
}
