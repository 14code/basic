<?php
declare(strict_types=1);

namespace I4code\CuBaPa;

use Symfony\Component\Serializer\Encoder\JsonEncoder as SymfonyJsonEncoder;

class JsonEncoder implements Encoder
{
    protected $encoder;

    public function __construct()
    {
        $this->encoder = new SymfonyJsonEncoder();
    }

    public function encode(array $data): string
    {
        return $this->encoder->encode($data, 'json');
    }


    public function decode(string $data): array
    {
        return $this->encoder->decode($data, 'json');
    }

}