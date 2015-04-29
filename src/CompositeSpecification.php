<?php
namespace Riskio\Specification;

abstract class CompositeSpecification implements SpecificationInterface
{
    /**
     * {@inheritDoc}
     */
    abstract public function isSatisfiedBy($object);
}
