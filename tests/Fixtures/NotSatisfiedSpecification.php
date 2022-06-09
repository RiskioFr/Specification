<?php
namespace Riskio\SpecificationTest\Fixtures;

use Riskio\Specification\SpecificationInterface;

class NotSatisfiedSpecification implements SpecificationInterface
{
    public function isSatisfiedBy(mixed $object): bool
    {
        return false;
    }
}
