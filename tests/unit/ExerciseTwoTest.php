<?php
namespace tests\unit;

require __DIR__ . "/../../src/ExerciseTwo.php";

use src\ExerciseTwo;
use PHPUnit\Framework\TestCase;

class ExerciseTwoTest extends TestCase
{
    /**
     *
     * @test
     */
    function firstTest()
    {
        $exerciseTwo = new ExerciseTwo();

        $input = "";

        $this->assertEquals(
            "Debe completar el campo del email", 
            $exerciseTwo->solution($input), 
            "El resultado debe ser: Debe completar el campo del email");
    }

    /**
     *
     * @test
     */
    function secondTest()
    {
        $exerciseTwo = new ExerciseTwo();

        $input = "abcde@jklm";

        $this->assertEquals(
            "$input no es válido", 
            $exerciseTwo->solution($input), 
            "El resultado debe ser: $input no es válido");
    }

    /**
     *
     * @test
     */
    function thirdTest()
    {
        $exerciseTwo = new ExerciseTwo();

        $input = "abcde@jklm@123.com";

        $this->assertEquals(
            "$input no es válido", 
            $exerciseTwo->solution($input), 
            "El resultado debe ser: $input no es válido");
    }

    /**
     *
     * @test
     */
    function forthTest()
    {
        $exerciseTwo = new ExerciseTwo();

        $input = "@jklm@123.com";

        $this->assertEquals(
            "$input no es válido", 
            $exerciseTwo->solution($input), 
            "El resultado debe ser: $input no es válido");
    }

    /**
     *
     * @test
     */
    function fifthTest()
    {
        $exerciseTwo = new ExerciseTwo();

        $input = "jklm@123.co";

        $this->assertEquals(
            "¡$input gracias por subscribirte!", 
            $exerciseTwo->solution($input), 
            "El resultado debe ser: ¡$input gracias por subscribirte!");
    }
}

