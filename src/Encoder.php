<?php
declare(strict_types=1);

namespace I4code\Basic;

interface Encoder
{
    public function encode(array $data): string;

    public function decode(string $data): array;
}