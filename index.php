<?php 
/**
 * http://localhost/Serializando-Objetos/index.php
 * http://127.0.0.1/Serializando-Objetos/index.php
 */

include 'classes/jogador.php';

$jogador = new Jogador('Rafael');
$jogador->setHp(1);
$jogador->setScore(1500);
$serializado = serialize($jogador);


try {
    if (file_put_contents('jogo.save', $serializado) !== FALSE) {
        print 'O objeto foi serializado.<br>';
    }
} catch (Exception $e) {
    print $e->getMessage();
}
