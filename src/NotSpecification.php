<?php namespace Riskio\Specification;

class NotSpecification implements Specification
{
    protected $specification;

    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    public function isSatisfiedBy($object) : bool
    {
        return !$this->specification->isSatisfiedBy($object);
    }
}
