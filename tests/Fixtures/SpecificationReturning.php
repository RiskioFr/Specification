<?php namespace Riskio\Specification\Fixtures;

use Riskio\Specification\Specification;

class SpecificationReturning implements Specification
{
    public $isSatisfied;

    function __construct(bool $isSatisfied)
    {
        $this->isSatisfied = $isSatisfied;
    }


    function isSatisfiedBy($object) : bool
    {
        return $this->isSatisfied;
    }
}
