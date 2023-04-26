<?php
declare(strict_types=1);

namespace I4code\Basic;

use RuntimeException;

abstract class AbstractRepository implements Repository
{
    protected $repository;

    protected $gateway;
    protected $factory;

    /**
     * @param Gateway $gateway
     * @param Factory $factory
     */
    public function __construct(Gateway $gateway, Factory $factory)
    {
        $this->gateway = $gateway;
        $this->factory = $factory;
    }


    /**
     * @return array
     */
    public function getRepository()
    {
        if (null === $this->repository) {
            $this->setRepository($this->findAll());
        }
        return $this->repository;
    }


    /**
     * @param array $repository
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
        return $this;
    }


    public function findAll(): array
    {
        $results = $this->gateway->retrieveAll();

        if (!is_array($results)) {
            throw new RuntimeException("Resultset is " . gettype($results) . " instead of array");
        }

        $items = [];

        foreach ($results as $result) {
            if (is_array($result)) {
                $item = $this->factory->createFromArray($result);
            } else {
                $item = $this->factory->create($result);
            }
            $items[] = $item;
        }

        return $items;
    }

}