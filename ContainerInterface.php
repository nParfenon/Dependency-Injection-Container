<?php

interface ContainerInterface
{
    public function get(string $class, array $params = []);
    public function has(string $class);
}