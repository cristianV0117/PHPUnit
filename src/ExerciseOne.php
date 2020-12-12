<?php
namespace src;

/**
 * Para correr las pruebas utiliza el terminal
 * y el comando vendor\bin\phpunit --filter ExerciseOneTest
 * desde la raiz del proyecto
 */
class ExerciseOne
{
    // TODO: La funcion solution recibe dos cadenas de carateres
    // completa el codigo para que devuelva si str1 contiene str2 o no 
    
	/**
     * Phrase contains another phrase validation method
     * @param string $str1
     * @param string $str2
     * @return string
     */
    public function solution($str1, $str2)
    {
        $boolean = $this->verify($str1, $str2);
        if ($boolean) {
			return "\"" . $str1 . "\" contiene \"" . $str2 . "\"";
        } else {
			return "\"" . $str1 . "\" no contiene \"" . $str2 . "\"";
        }
    }

    private function verify($str1, $str2)
    {
        if (empty($str2)) {
           return true;
        } else {
            if (strlen(strpos($str1, $str2)) > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
}

