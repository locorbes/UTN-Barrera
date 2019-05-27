<?php

class Router
{
  private $uri;
  private $controller;
  private $method;
  private $param;
  private $params;
  
  public function __construct()
  {
    $this->setUri();
    $this->setController();
    $this->setMethod();
    $this->setParams();
  }
  
  public function setUri()
  {
      //$this->uri = explode('/', $_SERVER['REQUEST_URI']);
      $this->uri = isset($_GET['url']) ? explode('/', $_GET['url']) : '';
  }
  
  public function setController()
  {

    if(!empty($this->uri[0]))
    {
      $this->controller = $this->uri[0];
      unset($this->uri[0]);
    }else
    {
      $this->controller = 'Panel';
    }

  }
  
  public function setMethod()
  {
    if(!empty($this->uri[1]))
    {
      $this->method = $this->uri[1];
      unset($this->uri[1]);
    }else
    {
      $this->method = 'index';
    }
  }
  
  public function setParams()
  {
    $this->params = $this->uri;
  }
  
  public function getUri()
  {
    return $this->uri;
  }
  
  public function getController()
  {
    return $this->controller;
  }
  
  public function getMethod()
  {
    return $this->method;
  }
  
  public function getParams()
  {
    return $this->params;
  }

}



?>