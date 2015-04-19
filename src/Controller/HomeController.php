<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Home Controller
 *
 * @property \App\Model\Table\HomeTable $Home
 */
class HomeController extends AppController
{
    public function index()
    {
        $this->render('index');
    }
}
