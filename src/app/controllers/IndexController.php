<?php

use Phalcon\Mvc\Controller;


class IndexController extends Controller
{
    public function indexAction()
    {
        $this->view->base = $this->config->base_uri;
        $this->view->app = $this->config->app_name;
    }
}