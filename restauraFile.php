<?php
/**
 * http://localhost/Serializando-Objetos/restauraFile.php
 * http://127.0.0.1/Serializando-Objetos/restauraFile.php
 */

include 'classes/jogador.php';

try {
    if (!file_exists('jogo.save')) {
        throw new Exception("Arquivo jogo.save não existe. <br>");
    }

    if (!is_readable('jogo.save')) {
        throw new Exception("Arquivo jogo.save sem permissão de acesso. <br>");
    } 

    $dados   = file_get_contents('jogo.save');
    $jogador = unserialize($dados);
    
    print '<pre>'; print_r($jogador); print '</pre>';

} catch(Exception $e) {
    print $e->getMessage();
}
