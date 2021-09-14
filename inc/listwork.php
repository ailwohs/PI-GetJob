<?php
$pdo = new PDO('mysql:host=localhost:3308;dbname=getjob', 'root', '');

$sql = $pdo->prepare('SELECT * FROM anuncios');
if ($sql->execute()) {
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach ($info as $key => $values) {
        $ID =  "<p style='color: black'>" . $values['ID'] . '</p>';
        $_SESSION['ID_usu'] = $ID;
    }
?>

    <div class="container">
        <div class="row row-cols-2 g-5">
            <?php
            foreach ($info as $key => $values) {
                $img = "<img" . $values['ID'] . '<br>';
                $id = "<p style='color: black'>" . $values['ID'] . '</p>';
                $nome = "<h5 style='color: black'>Nome: " . $values['nome'] . '<br></h5>';
                $desc = "<h5 style='color: black'>Descrição: " . $values['descricao'] . '<br></h5>';

            ?>
                <div class="col-3 " style="padding: 20px;">
                    <div class="bg-white p-4">
                        <?php echo $nome ?>
                        <img class="img-fluid" src="./assets/img/unload.png">
                        <?php echo $desc ?>
                        <?php echo $id ?>
                    </div>
                </div>
        <?php
            }
        }
        ?>
        </div>
    </div>

    <head>
        <link rel="stylesheet" href="./assets/css/work.css">
    </head>