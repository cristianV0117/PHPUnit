<?php
namespace src;

/**
 * Para correr las pruebas utiliza el terminal
 * y el comando vendor\bin\phpunit --filter ExerciseThreeTest
 * desde la raiz del proyecto
 */
class ExerciseThree
{
    // TODO: Crea una clase que maneje un juego, 
    // donde se deben atrapar una serie de enemigos para subir de nivel.
    // Cada cierta cantidad de enemigos atrapados har� que el jugador suba de nivel.
    // Cada vez que el jugador comience una partida, su nivel se reiniciar�.
    // Se debe poder obtener el nivel en el que se encuentra el jugador.

    private $enemies;
    private $catchEnemies;
    private $level;
    private $firstCatchEnemy;

    public function __construct($enemies)
    {
        $this->enemies         = $enemies;
        $this->catchEnemies    = 1;
        $this->level           = 0;
        $this->firstCatchEnemy = 0;
    }

    public function catchEnemy()
    {
        $this->firstCatchEnemy = 1;
        if ($this->enemies > 1) {
            $this->catchEnemies++;
        } else {
            $this->catchEnemies = 1;
        }
        
    }

    private function getCatchEnemies()
    {
        return $this->catchEnemies;
    }

    public function getLevel()
    {
        if ($this->firstCatchEnemy > 0) {
            $enemies = $this->getCatchEnemies();
            if ($enemies > 1) {
                for ($i = 1; $i < $enemies; $i++) { 
                    if ($i%2==0){
                        $this->level++;
                    }
                }
                return $this->level;
            } else {
                return 1;
            }
        } else {
            return 0;
        }
    }
}