<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos Cadastrados</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="imagem/logo-if-2.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="cabecalho"> 
            <h5>Instituto Federal de Educação, Ciência e Tecnologia Baiano - Campus Guanambi</h5> 
            <h1>Sistema de Cadastramento</h1>
        </div>
        <div class="logo"> <img src="imagem/logo-if.png" alt="Logo IF"></div>
    </header>

    <ul>
        <li>
            <a href="index.php">Home</a>
            <a href="cadaluno.php">Área de Cadastramento de Alunos</a>
            <a class="ativo" href="listaaluno.php">Alunos Cadastrados</a>
        </li>
    </ul>

    <main>
        <div class="conteudo3">
            <table id="tabela">
                <tr>
                    <th>NOME</th>
                    <th>CPF</th>
                    <th>DATA DE NASCIMENTO</th>
                    <th>CIDADE</th>
                    <th>UF</th>
                    <th>DISCIPLINAS CURSADAS</th>
                    <th>DISCIPLINAS PREFERIDAS</th>
                </tr>

                <tr>
                    <td>Lorrani Rodrigues Costa</td>
                    <td>111.222.333-44</td>
                    <td>2007-06-15</td>
                    <td>Ibiassucê</td>
                    <td>BA</td>
                    <td>Matemática<br><br>Português<br><br>Biologia</td>
                    <td>Biologia</td>
                </tr>

                <tr>
                    <td>Lorrani Rodrigues Costa</td>
                    <td>111.222.333-44</td>
                    <td>2007-06-15</td>
                    <td>Ibiassucê</td>
                    <td>BA</td>
                    <td>Matemática<br><br>Português<br><br>Biologia</td>
                    <td>Biologia</td>
                </tr>

                <tr>
                    <td>Lorrani Rodrigues Costa</td>
                    <td>111.222.333-44</td>
                    <td>2007-06-15</td>
                    <td>Ibiassucê</td>
                    <td>BA</td>
                    <td>Matemática<br><br>Português<br><br>Biologia</td>
                    <td>Biologia</td>
                </tr>

                <tr>
                    <td>Lorrani Rodrigues Costa</td>
                    <td>111.222.333-44</td>
                    <td>2007-06-15</td>
                    <td>Ibiassucê</td>
                    <td>BA</td>
                    <td>Matemática<br><br>Português<br><br>Biologia</td>
                    <td>Biologia</td>
                </tr>

                <tr>
                    <td> <?php echo $_POST['nome']?></td>
                    <td><?php echo $_POST['cpf']?></td>
                    <td><?php echo $_POST['data']?></td>
                    <td><?php echo $_POST['cidade']?></td>
                    <td><?php echo $_POST['uf']?></td>
                    <td>
                        <?php echo $_POST['materia1']?><br>
                        <?php echo $_POST['materia2']?><br>
                        <?php echo $_POST['materia3']?><br>
                        <?php echo $_POST['materia4']?><br>
                        <?php echo $_POST['materia5']?><br>
                    </td>
                    <td><?php echo $_POST['favorita']?></td>
                </tr>
            </table>
            <a class="voltar" href="cadaluno.php">&larr; Voltar</a>
        </div>
        
    </main>

    <footer>
        <div id="rodape">
            <p>
                Política de privacidade | Termos de uso<br>
                &copy; 2024 - Todos os direitos reservados a Lorrani Rodrigues Costa
            </p>
        </div>
    </footer>

</body>
</html>