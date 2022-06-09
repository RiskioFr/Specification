<?php

declare(strict_types=1);

namespace Riskio\Specification;

class OrSpecification extends CompositeSpecification
{
    protected array $specifications;

    public function __construct(SpecificationInterface ...$specifications)
    {
        $this->specifications = $specifications;
    }

    public function isSatisfiedBy(mixed $object): bool
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($object)) {
                return true;
            }
        }

        return false;
    }
}
