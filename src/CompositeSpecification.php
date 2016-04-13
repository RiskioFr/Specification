<?php
namespace Riskio\Specification;

abstract class CompositeSpecification implements SpecificationInterface
{
    abstract public function isSatisfiedBy($object) : bool;
}
