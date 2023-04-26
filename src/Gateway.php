<?php
declare(strict_types=1);

namespace I4code\CuBaPa;

interface Gateway
{
    public function retrieveAll(): array;
    public function persist(array $data);
}