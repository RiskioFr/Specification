<?php namespace Riskio\Specification;

class AndSpecification extends BinarySpecification
{
    public function __construct(Specification $left, Specification $right)
    {
        parent::__construct($left, $right, new Conjonctor);
    }
}
