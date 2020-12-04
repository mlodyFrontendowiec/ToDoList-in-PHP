<?php

declare(strict_types=1);

namespace App\Controller;

use App\View;

class ListController
{
    public View $view;
    private static array $data = [];
    private array $get;
    private array $post;

    public function __construct($data)
    {
        $this->view = new View();
        self::$data = $data;
        $this->get = $data['get'];
        $this->post = $data['post'];
    }
    public static function initConfiguraton()
    {
    }
    public function showPage()
    {
        switch ($this->get['action'] ?? 'mainPage') {
            case 'mainPage':
                $this->view->render('mainPage');
                dump($this->get);
            break;
            case 'createTask':
                $this->view->render('createTask');
                dump($this->get);
            break;

    }
    }
}
