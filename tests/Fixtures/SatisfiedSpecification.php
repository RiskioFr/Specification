<?php
namespace Riskio\SpecificationTest\Fixtures;

use Riskio\Specification\SpecificationInterface;

class SatisfiedSpecification implements SpecificationInterface
{
    public function isSatisfiedBy(mixed $object): bool
    {
        return true;
    }
}
