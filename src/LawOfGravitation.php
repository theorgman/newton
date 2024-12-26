<?php

namespace Theorgman\Newton;

class LawOfGravitation
{
    public static function calculateForce(float $mass1, float $mass2, float $distance): float
    {
        return Constant::GravitationalConstant * ($mass1 * $mass2) / ($distance * $distance);
    }
}
