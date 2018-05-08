<?php

namespace application\core;

class Router {
    protected $routes = [];
    protected $params = [];
    
    public function __construct() {
        echo 'Я класс роутер!';
    }
    
    public function add() {
        
    }
    
    public function math() {
        
    }
    
    public function run() {
        echo 'start';
    }
}
