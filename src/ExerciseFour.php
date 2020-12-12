<?php
namespace src;

/**
 * Nuestro producto estrella es el programa de lealtad. Los participantes reciben puntos para canjear premios.
 * Estos puntos dependen del nivel del participante (Platinum, Gold y Silver).
 * La asignaci�n de puntos depende de esta jerarquia.
 * Crea un conjunto de clases que manejen esta jerarquia y que den puntos bajo las siguientes reglas:
 * - Si eres Platinum se triplican
 * - Si eres Gold se duplican
 * - Si eres Silver obtienes la misma cantidad de puntos
 *
 * Para correr las pruebas utiliza el terminal
 * y el comando vendor\bin\phpunit --filter ExerciseFourTest
 * desde la raiz del proyecto
 * de ser necesario se podr�n modificar las pruebas para que se ajusten a la soluci�n dada.
 * 
 */

interface ExerciseFour
{    
    /**
     * User Points calculation based on level
     * @param int $points
     * @param ExerciseFour $user_level
     * @return int
     */
    public function pointCalculator(int $points, ExerciseFour $user_level) : int;
}

