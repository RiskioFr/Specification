<?php
namespace Riskio\Specification;

class NotSpecification implements SpecificationInterface
{
    public function __construct(private readonly SpecificationInterface $specification)
    {
    }

    public function isSatisfiedBy($object) : bool
    {
        return !$this->specification->isSatisfiedBy($object);
    }
}
