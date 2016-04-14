<?php namespace Riskio\Specification;

class OrSpecification extends BinarySpecification
{
    function __construct(Specification $left, Specification $right)
    {
        parent::__construct($left, $right, new Disjonctor);
    }
}
