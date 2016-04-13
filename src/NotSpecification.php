<?php
namespace Riskio\Specification;

class NotSpecification implements SpecificationInterface
{
    protected $specification;

    public function __construct(SpecificationInterface $specification)
    {
        $this->specification = $specification;
    }

    public function isSatisfiedBy($object) : bool
    {
        return !$this->specification->isSatisfiedBy($object);
    }
}
