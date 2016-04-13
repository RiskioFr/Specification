<?php
namespace Riskio\Specification;

class AndSpecification extends CompositeSpecification
{
    protected $left;

    protected $right;

    public function __construct(SpecificationInterface $left, SpecificationInterface $right)
    {
        $this->left  = $left;
        $this->right = $right;
    }

    public function isSatisfiedBy($object) : bool
    {
        return $this->left->isSatisfiedBy($object) && $this->right->isSatisfiedBy($object);
    }
}
