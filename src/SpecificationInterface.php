<?php
namespace Riskio\Specification;

interface SpecificationInterface
{
    public function isSatisfiedBy($object) : bool;
}
