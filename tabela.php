<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container mb-3">
    <h1>alunos</h1>
    
    <a href="cadastro.php" class="btn btn-dark mb-3" >Adicionar aluno</a>

    <table class=" table table-dark">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Matricula</th>
            </tr>
        </thead>
        <tbody>
            <?php

        include ('conexao.php');
        
            $buscarAlunos ='SELECT * FROM alunos';
            $get= $conexao->query($buscarAlunos);

            foreach ($get as $alunos) {
                echo "<tr>
                        <td>{$alunos['id']}</td>
                         <td>{$alunos['nome']}</td>
                        <td>{$alunos['cidade']}</td>
                         <td>{$alunos['matricula']}</td>
                        </tr>";
            };


            ?>
        </tbody>
    </table>
</div>