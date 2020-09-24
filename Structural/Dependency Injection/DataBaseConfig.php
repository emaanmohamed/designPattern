<?php


class DataBaseConfig
{
    private $host;
    private $username;
    private $password;
    private $port;

    public function __construct(string $host, string $username, string $password, string $port)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->port = $port;
    }



}