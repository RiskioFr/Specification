<?php
namespace Riskio\Specification;

interface SpecificationInterface
{
    public function isSatisfiedBy(mixed $object) : bool;
}
