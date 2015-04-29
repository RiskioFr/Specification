<?php
namespace Riskio\Specification;

class NotSpecification implements SpecificationInterface
{
    /**
     * @var SpecificationInterface
     */
    protected $specification;

    /**
     * @param SpecificationInterface $specification
     */
    public function __construct(SpecificationInterface $specification)
    {
        $this->specification = $specification;
    }

    /**
     * {@inheritDoc}
     */
    public function isSatisfiedBy($object)
    {
        return !$this->specification->isSatisfiedBy($object);
    }
}
