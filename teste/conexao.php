<?php
$conexao = new PDO('sqlite:../db/Pessoa.db');
$stmt= $conexao->prepare("select * from produto");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $ROW ) {
}
echo "<pre>";
echo json_decode($result);
echo "</pre>";
?>