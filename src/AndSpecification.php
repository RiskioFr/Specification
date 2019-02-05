<?php
namespace Riskio\Specification;

class AndSpecification extends CompositeSpecification
{
    protected $specifications;

    public function __construct(SpecificationInterface ...$specifications)
    {
        $this->specifications = $specifications;
    }

    public function isSatisfiedBy($object) : bool
    {
        foreach ($this->specifications as $specification) {
            if (! $specification->isSatisfiedBy($object)) {
                return false;
            }
        }

        return true;
    }
}
