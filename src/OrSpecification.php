<?php
namespace Riskio\Specification;

class OrSpecification extends CompositeSpecification
{
    /**
     * @var SpecificationInterface
     */
    protected $left;

    /**
     * @var SpecificationInterface
     */
    protected $right;

    /**
     * @param SpecificationInterface $left
     * @param SpecificationInterface $right
     */
    public function __construct(SpecificationInterface $left, SpecificationInterface $right)
    {
        $this->left  = $left;
        $this->right = $right;
    }

    /**
     * {@inheritDoc}
     */
    public function isSatisfiedBy($object)
    {
        return $this->left->isSatisfiedBy($object) || $this->right->isSatisfiedBy($object);
    }
}
