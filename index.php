<?php
require'config.php';
?>
<a href="adicionar.php">Adicionar novo Usuario</a>
<table border="0" width="100%">
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</tr>

	<?php
$sql = "SELECT * FROM systable";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
    foreach($sql->fetchAll() as $systable){
    	echo'<tr>';
    	echo '<td>'.$systable['nome'].'</td>';
    	echo '<td>'.$systable['email'].'</td>';
    	echo '<td><a href="editar.php?id='.$systable['id'].'">Editar</a> - <a href="excluir.php?id='.$systable['id'].'">Excluir</a></td>';
    	echo '</tr>';
    }
}
	?>

</table>