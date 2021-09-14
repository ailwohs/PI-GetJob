<?php
include_once(dirname(__FILE__) . "/MySQL.php");

if (!isset($_GET['id'])) {
    exit('nenhuma imagem ');
}


$id = $_GET['id'];



$sql = $pdo->prepare('SELECT * FROM funcionario WHERE id=?');
if ($sql->execute(array($id))) {
    if ($sql->rowCount() > 0) {
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($info as $key => $values) {
            header("Content-type: image/png");
            //echo $values['img'];
            //echo $values['img'];
            echo 'data:image/png;base64,' . base64_encode($values['img']);
        }
    }
} else {
    echo "deu erro";
    print_r($sql->errorInfo());
}
