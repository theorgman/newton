<?php

namespace Theorgman\Newton;

class LawsOfMotion
{
    public static function calculateForce(float $mass, float $acceleration): float
    {
        return $mass * $acceleration;
    }
}
