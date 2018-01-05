<?php

namespace App;

use App\App;

class Bootstrap {
    
    private $app;

    public function __construct(App $app) {
        echo 'bootstraping' . PHP_EOF;

        $this->app = $app;
    }

}
