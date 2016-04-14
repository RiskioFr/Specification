<?php namespace Riskio\Specification;

class Conjonctor implements Function2Bool
{
    public function apply(bool $conjunct1, bool $conjunct2): bool 
    {
        return $conjunct1 && $conjunct2;
    }
}
