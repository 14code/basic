<?php

namespace I4code\Basic;

interface Repository
{
    public function __construct(Gateway $gateway, Factory $factory);

    public function findAll(): array;
}