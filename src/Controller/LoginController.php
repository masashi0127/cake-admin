<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;
/**
 * Login Controller
 *
 * @property \App\Model\Table\LoginTable $Login
 */
class LoginController extends AppController
{
    public function login()
    {
        if (!$this->request->is('post')) {
            $this->render('index');
            return;
        }

        $adminUser = $this->Auth->identify();
        $this->Auth->setUser($adminUser);
        return $this->redirect($this->Auth->redirectUrl());
        
    }
}
