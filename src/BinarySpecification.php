<?php namespace Riskio\Specification;

class BinarySpecification implements Specification
{
    private $left, $right, $fn;

    function __construct(Specification $left, Specification $right, Function2Bool $fn)
    {
        $this->left  = $left;
        $this->right = $right;
        $this->fn    = $fn;
    }

    function isSatisfiedBy($object) : bool
    {
        return $this->fn->apply(
            $this->left->isSatisfiedBy($object),
            $this->right->isSatisfiedBy($object)
        );
    }
}
