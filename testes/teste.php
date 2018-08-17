<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 04/05/18
 * Time: 13:17
 */

require_once '../app/model/CrudVoluntario.php';
require_once '../app/model/Voluntario.php';

$user = new Voluntario(null , '1234', 'lucas@gmail.com', 'lucas', 'lalala',  'masc', '1990/11/11',null,null, null);
$crud = new CrudVoluntario();
$crud->excluirVol(27);





