<?php

declare(strict_types=1);

namespace Riskio\Specification;

abstract class LeafSpecification implements SpecificationInterface
{
    abstract public function isSatisfiedBy(mixed $object): bool;
}
