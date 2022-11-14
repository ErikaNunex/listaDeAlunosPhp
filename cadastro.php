<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<?php 
include('conexao.php');
if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $matricula = $_POST['matricula'];
    $post = "INSERT INTO `alunos`.`alunos` (nome, cidade, matricula)
    VALUES ('{$nome}', '{$cidade}', '{$matricula}');";
    $query = mysqli_query($conexao,$post);
    if($query){
        echo "<h3>Cadastrado</h3>";
    }else{
        echo "<h3>Não Cadastrado</h3>";
    }
};
?>
<form action="cadastro.php" method="POST"  class="mt-3">
 <div class="w-75 m-auto d-flex flex-column mb-3 bg-dark p-3">
 <div class="mb-3 p-2">
    <label  class="form-label text-light">Nome</label>
    <input class="form-control" type="text" name="nome">
    <div class="form-text">Escreva seu nome completo</div>
  </div>
  <div class="mb-3 p-2">
    <label  class="form-label text-light">Cidade</label>
    <input type="text" class="form-control" name="cidade" >
  </div>
  <div class="mb-3 p-2">
    <label  class="form-label text-light">Matricula</label>
    <input type="text" class="form-control" name="matricula" >
  </div>
  <button  name="cadastrar"  class=" w-50 m-auto btn btn-primary">Cadastrar</button>
 </div>
</form>
