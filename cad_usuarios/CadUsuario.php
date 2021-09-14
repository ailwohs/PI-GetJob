
<?php
$pdo = new PDO('mysql:host=localhost:3308;dbname=getjob', 'root', '');
//teste
$sql = $pdo->prepare('SELECT * FROM usuarios');
if($sql->execute()){
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($info as $key => $values){
        echo 'id: '.$values['id'].'<br>';
        echo 'nome: '.$values['nome'].'<br>';
        echo 'sobrenome: '.$values['sobrenome'].'<br>';
        echo 'nascimento: '.$values['nascimento'].'<br>';
        echo 'rg: '.$values['rg'].'<br>';
        echo'cpf'.$values['cpf'].'<br>';
        echo 'rua: '.$values['rua'].'<br>';
        echo'numero_da_casa'.$values['numero_da_casa'].'<br>';
        echo 'bairro: ' .$values['bairro'].'<br>';
        echo 'estado: '.$values['estado'].'<br>';
        echo 'cidade: '.$values['cidade'].'<br>';
        echo 'cep: '.$values['cep'].'<br>';
        echo'email'.$values['email'].'<br';
        echo 'login'.$values['login'].'<br>';
        echo'senha'.$values['senha'].'<br>';
        echo 'confirme_senha'.$values['confirme_senha'].'<br>';
       echo "<a href='deletusuario.php?id=".$values['id']."'>(-)<a/>";
       echo "<a href='atualiusuario.php?id=".$values['id']."'>(+)<a/>";

       
       
       
        echo '<hr>';
        
    }
}

?>
<input type="button" value="Cadastrar" onclick="parent.location='CadUsuario.php'">
