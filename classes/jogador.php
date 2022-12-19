<?php 
class Jogador {
    private $nome, $hp, $score;
    
    public function __construct($nome) {
        $this->nome  = $nome;
        $this->hp    = 100;
        $this->score = 0; 
    }

    
    public function __set($propriedade, $valor) {
        $this->propriedade = $valor;
    }

    public function __get($propriedade){
        return $this->propriedade;
    }

    public function __call($method, $values) {
        if ($method == 'setHp') {
            $this->hp = $values[0];
        }

        if ($method == 'setScore') {
            $this->score = $values[0];
        }
    }

    public function __sleep() {
        return array('nome', 'score');
    }

    public function __wakeup() {
        $this->hp = 100;
    }

    public function __toString() {
        return "Nome: {$this->nome}, HP: {$this->hp}, Score: {$this->score} <br>".PHP_EOL;
    }
}