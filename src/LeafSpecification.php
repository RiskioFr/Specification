<?php
namespace Riskio\Specification;

abstract class LeafSpecification implements SpecificationInterface
{
    abstract public function isSatisfiedBy($object) : bool;
}
