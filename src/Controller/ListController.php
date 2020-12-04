<?php

declare(strict_types=1);

namespace App\Controller;

use App\Database;
use App\View;

class ListController
{
    public View $view;
    private static array $data = [];
    private static array $config = [];
    private array $get;
    private array $post;
    private array $server;

    public function __construct(array $data)
    {
        $this->view = new View();
        $this->database = new Database(self::$config);
        self::$data = $data;
        $this->get = $data['get'];
        $this->post = $data['post'];
        $this->server = $data['server'];
    }
    public static function initConfiguraton(array $config):void
    {
        self::$config = $config;
    }
    public function showPage()
    {
        switch ($this->get['action'] ?? 'mainPage') {
            case 'mainPage':
                $this->view->render('mainPage');
                dump($this->post);
            break;
            case 'createTask':
                $this->createTask();
            break;
            default:
            $this->view->render('mainPage');
            break;


    }
    }
    public function createTask()
    {
        if (!empty($this->post)) {
            $title = $this->post['title'];
            $description = $this->post['description'];
            $date = $this->post['date'];
            $this->database->createTask(['title'=>$title,'description'=>$description,'date'=>$date]);
            header("Location: /");
        } elseif (empty($this->post)) {
            $this->view->render('createTask');
        };
    }
};
