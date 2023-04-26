<?php
declare(strict_types=1);

namespace I4code\Basic;

interface Gateway
{
    public function retrieveAll(): array;
    public function persist(array $data);
}