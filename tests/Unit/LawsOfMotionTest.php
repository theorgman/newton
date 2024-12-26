<?php

use Theorgman\Newton\LawsOfMotion;

it('calculates the force correctly', function () {
    $mass = 1; // 1 Kg
    $acceleration = 1; // 1 m/a^2

    $expectedValue = 1;
    $calculatedValue = LawsOfMotion::calculateForce($mass, $acceleration);

    expect(abs($calculatedValue - $expectedValue) < PHP_FLOAT_EPSILON)->toBeTrue();
});
