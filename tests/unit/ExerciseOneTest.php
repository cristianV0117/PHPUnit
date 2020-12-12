<?php
namespace tests\unit;

require __DIR__ . "/../../src/ExerciseOne.php";

use PHPUnit\Framework\TestCase;
use src\ExerciseOne;

class ExerciseOneTest extends TestCase
{
    /**
     *
     * @test
     */
    function firstTest()
    {
        $exerciseOne = new ExerciseOne();

        $str1 = 'La vida es bella';
        $str2 = 'La vida es';

        $this->assertEquals(
            '"La vida es bella" contiene "La vida es"', 
            $exerciseOne->solution($str1, $str2), 
            'El resultado debe ser: "La vida es bella" contiene "La vida es"');
    }

    /**
     *
     * @test
     */
    function secondTest()
    {
        $exerciseOne = new ExerciseOne();

        $str1 = 'La vida es bella';
        $str2 = 'La vida es bella.';

        $this->assertEquals(
            '"La vida es bella" no contiene "La vida es bella."', 
            $exerciseOne->solution($str1, $str2), 
            'El resultado debe ser: "La vida es bella" no contiene "La vida es bella."');
    }

    /**
     *
     * @test
     */
    function thirdTest()
    {
        $exerciseOne = new ExerciseOne();

        $str1 = 'La vida es bella';
        $str2 = '';

        $this->assertEquals(
            '"La vida es bella" contiene ""', 
            $exerciseOne->solution($str1, $str2), 
            'El resultado debe ser: "La vida es bella" contiene ""');
    }

    /**
     *
     * @test
     */
    function forthTest()
    {
        $exerciseOne = new ExerciseOne();

        $str1 = 'La vida es bella';
        $str2 = 'La vida es bella';

        $this->assertEquals(
            '"La vida es bella" contiene "La vida es bella"', 
            $exerciseOne->solution($str1, $str2), 
            'El resultado debe ser: "La vida es bella" contiene "La vida es bella"');
    }
}

