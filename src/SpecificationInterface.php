<?php

declare(strict_types=1);

namespace Riskio\Specification;

interface SpecificationInterface
{
    public function isSatisfiedBy(mixed $object): bool;
}
