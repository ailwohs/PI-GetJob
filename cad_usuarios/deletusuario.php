<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
    if ($sql->execute(array($id))) {
        if ($sql->rowCount() > 0) {
            echo 'Usuários excluído com sucesso!';
               header('location:lista-usuario.php');
        } else {
            echo 'id não localizado';
        }
    } else {
        echo 'Erro ao excluir usuário.';
    }
}


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Excluir Usuário</title>
</head>

<body>
    <form action="" method="POST">
        id: <input type="text" name="id">
        <input type="submit" name="codigo" value="Excluir">
    </form>
</body>

</html>