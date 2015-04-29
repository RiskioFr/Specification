<?php
namespace Riskio\Specification;

abstract class LeafSpecification implements SpecificationInterface
{
    /**
     * {@inheritDoc}
     */
    abstract public function isSatisfiedBy($object);
}
