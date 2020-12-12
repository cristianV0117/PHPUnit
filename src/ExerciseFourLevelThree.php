<?php
namespace src;
class ExerciseFourLevelThree implements ExerciseFour
{
    public function pointCalculator(int $points, ExerciseFour $user_level = null) :int
    {
        return $points * 3;
    }
} 