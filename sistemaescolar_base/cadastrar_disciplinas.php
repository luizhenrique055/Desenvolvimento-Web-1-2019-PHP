<?php
session_start();
header("Content-type:text/html; charset=utf8");
//importar a classe Alunos
require_once "Classes/Disciplinas.php";
//instaciar a classe Alunos
$Disciplinas = new Disciplinas();
//criar a lista de alunos
if(isset($_POST["Salvar"])){

//   chamar a funcao inserir
    $Disciplinas->inserir();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Sistema Escolar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="index_adm.php">Sistema Escolar - Painel Administrativo</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index_aluno.php">Alunos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_professores.php">Professor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_funcionarios.php">Funcionários</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_cursos.php">Cursos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_disciplinas.php">Disciplinas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Sair</a>
        </li>
    </ul>
</nav>

<div class="container lista">
            <div align="center">
                <img src="img/logo.png" alt="Logo">
            </div>
        <div class="row">
        <div class="col-lg-12">
            <form action="cadastrar_disciplinas.php" method="post">
                    <div class="row">
                        <div class="form-group col-lg-9">
                            <label for="numero">Numero</label>
                            <input type="number" name="numero" class="form-control" >
                        </div>
                        <div class="form-group col-lg-9">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" >
                        </div>
                        <div class="form-group col-lg-4">
                                <label for="conteudo">Conteudo</label>
                            <input type="text" name="conteudo" class="form-control" >
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="turma">Turma</label>
                            <input type="text" name="turma" class="form-control" >
                        </div>
                        <div class="form-group col-lg-2">
                            <label for="curso">Curso</label>
                            <input type="text" name="curso" class="form-control">
                        </div>
                    </div>
                    <div align="center">
                        <button class="btn btn-success" type="submit" name="Salvar">Salvar</button>
                        <a class="btn btn-outline-danger" href="index_disciplinas.php">Cancelar</a>
                    </div>
            </form>
        </div>
    </div>
</div>
</body>
</html