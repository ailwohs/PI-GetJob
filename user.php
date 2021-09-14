<?php

include_once("./inc/header.php");
include_once("./inc/menu.php");
include_once(dirname(__FILE__) . "./inc/MySQL.php");


if (!isset($_GET['id'])) {
    $id = null;
} else {


    $id = $_GET['id'];
}

$sql = $pdo->prepare('SELECT id, img, nome, email, formacao, profissao, telefone, descricao FROM funcionario WHERE id = ' . $id);

if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    foreach ($info as $key => $values) {
        $image = $values['img'];
        $nome = $values['nome'];
        $email = $values['email'];
        $formacao = $values['formacao'];
        $profissao = $values['profissao'];
        $telefone = $values['telefone'];
        $descricao = $values['descricao'];
    }
}
include_once("./inc/header.php");
?>


<div class="bck container">
    <p>foto de perfil:</p>
    <div class="col">
        <div class="row">

            <?php
            echo '<img src="data:image/png;base64,' . base64_encode($values['img']) . '" width = "180px" height = "180px"/>';
            ?>
        </div>
    </div>
    <div class="info-person">
        <input id="tab-1" type="radio" name="tab" style="display: contents;" class="list-1" checked><label for="tab-1" class="tab">PERFIL</label>
    </div>
    <main>
        <div class="list-1">
            <div class="group col sl1">
                <div class="col c">
                    <h2>Nome: <br>
                        <p><?php echo $nome ?></p>
                    </h2>
                    <h2>Email : <br>
                        <p><?php echo $email ?></p>
                    </h2>
                    <h2>formacao: <br>
                        <p><?php echo $formacao ?></p>
                    </h2>
                    <h2>profissao: <br>
                        <p><?php echo $profissao ?></p>
                    </h2>
                    <h2>telefone: <br>
                        <p><?php echo $telefone ?></p>
                    </h2>
                    <h2>descricao: <br>
                        <p><?php echo $descricao ?></p>
                    </h2>
                </div>
            </div>
        </div>
</div>
<?php
include_once(dirname(__FILE__) . "./inc/footer.php");
?>
</main>