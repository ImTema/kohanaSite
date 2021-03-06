<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {

    public $template = 'main';

    public function before()
    {
        parent::before();
        View::set_global('title', 'KohanaBased');
        View::set_global('description', 'Первый сайт с использованием движка кохана');
        $this->template->content = '';
        $this->template->styles = array('main');
        $this->template->scripts = array('jquery-min-lib');
    }

} // End Common