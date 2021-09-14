
<?php
$pdo = new PDO('mysql:host=localhost:3308;dbname=getjob', 'root', '');

$sql = $pdo->prepare('SELECT * FROM usuarios');
if($sql->execute()){
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($info as $key => $values){
        echo 'id: '.$values['id'].'<br>';
        echo 'nome: '.$values['nome'].'<br>';
        echo 'nascimento: '.$values['nascimento'].'<br>';
        echo 'rg: '.$values['rg'].'<br>';
        echo'cpf'.$values['cpf'].'<br>';
        echo 'rua: '.$values['rua'].'<br>';
        echo 'bairro: ' .$values['bairro'].'<br>';
        echo 'estado: '.$values['estado'].'<br>';
        echo 'cidade: '.$values['cidade'].'<br>';
        echo 'cep: '.$values['cep'].'<br>';
        echo'email:'.$values['email'].'<br>';
        
       echo "<a href='deletusuario.php?id=".$values['id']."'>(Deletar)<a/>";
       echo "<a href='atualiusuario.php?id=".$values['id']."'>(Atualizar)<a/>";

       
       
       
        echo '<hr>';
        
    }
}

?>
<input type="button" value="Cadastrar" onclick="parent.location='CadUsuario.php'">