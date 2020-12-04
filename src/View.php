<?php

declare(strict_types=1);

namespace App;

class View
{
    public function render(string $page = 'mainPage')
    {
        require_once('./templates/layout.php');
    }
};
