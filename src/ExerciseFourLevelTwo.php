<?php
namespace src;
class ExerciseFourLevelTwo implements ExerciseFour
{
    public function pointCalculator(int $points, ExerciseFour $user_level = null) :int
    {
        return $points * 2;
    }
} 