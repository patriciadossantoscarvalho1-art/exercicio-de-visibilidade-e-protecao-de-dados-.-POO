<?php

require_once "Animal.php";

class Cachorro extends Animal
{
    public function emitirSom(): string
    {
        return $this->nome . " faz: au au.";
    }
}
?>
