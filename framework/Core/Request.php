<?php
namespace Honji\Core;

class Request
{
    protected $query;

    protected $post;

    protected $server;

    protected $cookie;

    protected $file;


    public function __construct()
    {
        $this->query = $_GET;
        $this->post = $_GET;
        $this->server = $_SERVER;
        $this->file = $_FILES;
        $this->cookie = $_COOKIE;
    }

    public static function capture()
    {
        return [];
    }
}