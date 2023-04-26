<?php
namespace I4code\Basic\Test\Unit;

use I4code\Basic\Factory;
use I4code\Basic\Gateway;
use I4code\Basic\AbstractRepository;
use PHPUnit\Framework\TestCase;

class AbstractRepositoryTest extends TestCase
{

    public function testConstruct()
    {
        $gatewayMock = $this->createMock(Gateway::class);
        $factoryMock = $this->createMock(Factory::class);

        $repository = new class($gatewayMock, $factoryMock) extends AbstractRepository {};

        $this->assertInstanceOf(AbstractRepository::class, $repository);
        return $repository;
    }

    /**
     * @param $repository
     * @depends testConstruct
     */
    public function testFindAll($repository)
    {
        $items = $repository->findAll();
        $this->assertIsArray($items);
    }
}
