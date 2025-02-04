<?php

namespace App\Controllers;

class Page extends BaseController {
    public function about() {
        echo "About";
    }
    public function contact() {
        echo "Contact";
    }
    public function service(){
        echo "Service";
    }
}
