<?php

use Theorgman\Newton\Constant;
use Theorgman\Newton\LawOfGravitation;

it('calculates gravitational force correctly', function () {
    $mass1 = 1; // 1 Kg
    $mass2 = 1; // 1 Kg
    $distance = 1; // 1 m

    $calculatedValue = LawOfGravitation::calculateForce($mass1, $mass2, $distance);
    $expectedValue = Constant::GravitationalConstant;

    expect(abs($calculatedValue - $expectedValue) < PHP_FLOAT_EPSILON)->toBeTrue();
});
