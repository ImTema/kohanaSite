<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pages extends Controller_Common {

    /// Главная страница
    public function action_index()
    {
        $content = View::factory('/pages/index');
        $this->template->styles = array('main', 'style_main', 'style_main_menu');
        $this->template->scripts = array('jquery-min-lib', 'index');
        $this->template->content = $content;
    }

    /// Страница с новостями
    public function action_news()
    {
        $content = View::factory('/pages/news');
        $this->template->styles = array('main', 'style_news', 'style_main_menu');
        $this->template->scripts = array('jquery-min-lib', 'js_shortNews', 'news');
        $this->template->content = $content;
    }

    /// Галлерея
    public function action_gallery()
    {
        if($_POST){
            $path = 'public/images/';// директория для загрузки
            $ext = (explode('.',$_FILES['file']['name'])); // расширение
            $ext=$ext[1];
            $new_name = time().'.'.$ext; // новое имя с расширением
            $full_path = $path.$new_name; // полный путь с новым именем и расширением
            if($_FILES['file']['error'] == 0){
                move_uploaded_file($_FILES['file']['tmp_name'], $full_path);
            }
            echo '<script>window.location.assign(window.location.pathname)</script>';
            die();
        }
        $dir='public/images/';
        $files = scandir($dir); // Берём всё содержимое директории
        $content = View::factory('/pages/gallery')
            ->set("files", $files)
            ->set("dir", URL::base().$dir);
        $this->template->styles = array('main', 'style_gallery', 'style_main_menu');
        $this->template->scripts = array('jquery-min-lib', 'js_makeItBigger');
        $this->template->content = $content;
    }

} // End Page