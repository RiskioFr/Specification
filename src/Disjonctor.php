<?php namespace Riskio\Specification;


class Disjonctor implements Function2Bool
{
    public function apply(bool $disjunct1, bool $disjunct2): bool
    {
        return $disjunct1 || $disjunct2;
    }
}
