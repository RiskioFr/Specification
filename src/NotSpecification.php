<?php

declare(strict_types=1);

namespace Riskio\Specification;

class NotSpecification implements SpecificationInterface
{
    public function __construct(protected readonly SpecificationInterface $specification)
    {
    }

    public function isSatisfiedBy(mixed $object): bool
    {
        return !$this->specification->isSatisfiedBy($object);
    }
}
