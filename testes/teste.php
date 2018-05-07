<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 04/05/18
 * Time: 13:17
 */

require_once '../app/model/CrudUsuarioVoluntario.php';
require_once '../app/model/UsuarioVoluntario.php';

$user = new UsuarioVoluntario('','SUL', '1234', 'lucas@gmail.com', 'lucas', 'lalala', 'lucas', 'masc', '10/11/1999','lala');
$crud = new CrudUsuarioVoluntario();
$crud->getUsuarioVoluntario(2);




