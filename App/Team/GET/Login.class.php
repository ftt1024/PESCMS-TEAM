<?php

/**
 * Pes for PHP 5.3+
 *
 * Copyright (c) 2014 PESCMS (http://www.pescms.com)
 *
 * For the full copyright and license information, please view
 * the file LICENSE.md that was distributed with this source code.
 */

namespace App\Team\GET;

class Login extends \App\Team\Common {

    public function index() {
        $login = $this->checkLogin();
        if ($login) {
            $this->jump($this->url('Team-Index-index'));
        }
        $this->display();
    }

}