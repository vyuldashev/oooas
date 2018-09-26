<?php

namespace GoldSpecDigital\ObjectOrientedOAS\Objects;

use GoldSpecDigital\ObjectOrientedOAS\Utilities\Arr;

class PathItem extends BaseObject
{
    /**
     * @var string
     */
    protected $route;

    /**
     * @var \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation[]
     */
    protected $operations;

    /**
     * @param string $route
     * @param \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation ...$operations
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public static function create(string $route, Operation ...$operations): self
    {
        $instance = new static();

        $instance->route = $route;
        $instance->operations = $operations;

        return $instance;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return Arr::filter([$this->route => $this->operations]);
    }

    /**
     * @param string $route
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public function route(string $route): self
    {
        $this->route = $route;

        return $this;
    }

    /**
     * @param \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation ...$operations
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public function operations(Operation ...$operations): self
    {
        $this->operations = $operations;

        return $this;
    }
}