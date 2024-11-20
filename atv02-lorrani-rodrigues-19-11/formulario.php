<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade-19-11</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="cabecalho">
        <div id="cabecalho1">
        </div>
        <div id="cabecalho2">
            <h1>Sistema de Cadastramentos</h1>
        </div>
        <div id="cabecalho3"></div>
    </div>

    <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="formulario.php" class="active">Formulário</a></li>
        <li><a href="contato.php">Contato</a></li>
    </ul>

    <div class="conteudo">
        <div id="cont1">
             <h2>Para realizar seu cadastramento, preencha com seus dados</h2>
            <div class="formulario">
                <form action="">
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="nome" name="nome"><br><br>

                    <label for="data">Nascimento:</label><br>
                    <input type="date" id="data" name="data" min="1924-12-31" max="2024-12-31"><br><br>

                    <label for="datanasc">Hora do nascimento:</label>
                    <input type="time" id="datanasc" name="datanasc">

                    <p>Sexo:</p>

                    <input type="radio" id="sexo1" name="sexo1">
                    <label for="sexo1">Feminino</label>

                    <input type="radio" id="sexo2" name="sexo2">
                    <label for="sexo2">Masculino</label>

                    <input type="radio" id="sexo3" name="sexo3">
                    <label for="sexo3">Prefere não informar</label><br><br>

                    <label for="favcor">Cor favorita:</label><br>
                    <input type="color" id="favcor" name="favcor"><br><br>

                    <label for="datavigente">Data e hora de hoje:</label><br>
                    <input type="datetime-local" id="datavigente" name="datavigente"><br><br>

                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email"><br><br>

                    <label for="senha">Crie uma senha:</label><br>
                    <input type="password" id="senha" name="senha"><br><br>

                    <label for="telefone">Telefone:</label><br>
                    <input type="tel" id="telefone" name="telefone" placeholder="(**) *****-****" pattern="[1-9]{2}-[0-9]{5}-[0-9]{4}"><br><br>

                    <label for="instagram">Adicione o link do seu instagram:</label><br>
                    <input type="url" id="instagram" name="instagram"><br><br>

                    <input type="image" src="imagem/logo-pasta.png" alt="Submit" width="48" height="48"> <br><br>
                    
                    <label for="arquivo">Selecione um arquivo:</label><br>
                    <input type="file" id="rquivo" name="rquivo"><br><br>

                    <label for="mes-e-e-ano">Mês e ano do encerramento escolar:</label><br>
                    <input type="month" id="mes-e-e-ano" name="mes-e-e-ano"><br><br>

                    <p>É intolerante à:</p>

                    <input type="checkbox" id="exp1" name="exp1" >
                    <label for="exp1">Nada</label><br>
                    <input type="checkbox" id= "exp2" name= "exp2">
                    <label for= "exp2">Lactose</label><br>
                    <input type="checkbox" id="exp3" name="exp3">
                    <label for="exp3">Glutem</label><br><br>

                    <label for="trabalho">Selecione a semana que deseja começar o trabalho:</label><br>
                    <input type="week" id="trabalho" name="trabalho"><br><br>

                    <label for="num">Puxe a bolinha até completar a barra:</label><br>
                    <input type="range" id="num" name="num" min="0" max="10"><br><br>

                    <label for="avaliação">Escreva aqui sua experiência com nosso serviso:</label>
                    <input type="search" id="avaliação" name="avaliação"><br><br>


                    <p>Endereço</p>

                    <label for="rua">Rua:</label><br>
                    <input type="text" id="rua" name="rua"><br>

                    <label for="numero1">Nº:</label><br>
                    <input type="number" id="numero1" name="numero1" min="1"><br>

                    <label for="bairro">Bairro:</label><br>
                    <input type="text" id="bairro" name="bairro"><br><br>




                    <input type="button" onclick="alert('Tem certeza que deseja continuar?')" value="Continuar">
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Apagar tudo">

                    <input type="hidden" id="oculto" name="oculto" value="o usuario não vê">


                </form>
            </div>

        </div>
        <div! id="cont2"></div>
    </div>

    <!-- <div class="rodape">
        <div id="rod1">bloco1</div>
        <div id="rod2">bloco2</div>
        <div id="rod3">bloco3</div>
        <div id="rod4">bloco4</div>
    </d> -->

</body>
</html>