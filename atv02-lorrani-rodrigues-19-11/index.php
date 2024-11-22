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
        <h1>Sistema de Cadastramento</h1>
    </div>

    <ul>
        <li><a href="#">Empresa</a></li>
        <li><a href="#" class="active">Formulário</a></li>
        <li><a href="#">Biblioteca</a></li>
        <li><a href="#">Contato</a></li>
    </ul>

        <div class="conteudo">
                <div class="formulario">
                    <form action="">

                        <div class="informacoes1">
                            <div>
                                <label for="nome">Nome Completo:</label><br>
                                <input type="text" id="nome" name="nome" required>
                            </div> 
                            <div>          
                                <label for="data">Nascimento:</label><br>
                                <input type="date" id="data" name="data" min="1924-12-31" max="2024-12-31" required>
                            </div>
                            <div>
                                <label for="hora">Selecione uma hora:</label><br>
                                <input type="time" id="hora" name="hora" required>
                            </div>
                        </div>

                        <div class="informacoes2">
                            <div>
                                <p>Sexo:</p>
                                <input type="radio" id="sexo1" name="s" value="Feminino" required>
                                <label for="sexo1">Feminino</label>
                                <input type="radio" id="sexo2" name="s" value="Masculino" required>
                                <label for="sexo2">Masculino</label>
                                <input type="radio" id="sexo3" name="s" value="Prefiro não infirmar" required>
                                <label for="sexo3">Prefiro não infirmar</label><br><br>
                            </div>

                            <div>
                                <p>Possui algum automóvel?</p>
        
                            <input type="checkbox" id="exp1" name="exp1">
                            <label for="exp1">Nenhum</label>
                            <input type="checkbox" id= "exp2" name= "exp2">
                            <label for= "exp2">Moto</label>
                            <input type="checkbox" id="exp3" name="exp3">
                            <label for="exp3">Carro</label><br><br>
                            </div>
                        </div>

                        <div class="informacoes21">
                            <div class="cor">
                                <label for="favcor">Cor favorita:</label><br>
                                <input type="color" id="favcor" name="favcor" required><br><br>
                            </div>

                        </div>



                        <div class="informacoes3">
                            <label for="arquivo">Selecione um arquivo (RG com foto):</label><br>
                            <input type="file" id="rquivo" name="rquivo" required><br><br>
                        </div>

                        <p>Endereço</p>
                        <div class="informacoes4">
                                <div>  
                                    <label for="rua">Rua:</label><br>
                                    <input type="text" id="rua" name="rua" required><br>
                                </div> 
                                <div>
                                    <label for="numero1">Nº:</label><br>
                                    <input type="number" id="numero1" name="numero1" min="1" required><br>
                                </div>
                                <div>
                                    <label for="bairro">Bairro:</label><br>
                                    <input type="text" id="bairro" name="bairro" required><br><br>
                                </div>  
                        </div>


                        <div class="informacoes5">  
                            <div>
                                <label for="email">Email:</label><br>
                                <input type="email" id="email" name="email" required><br><br> 
                            </div>
                            <div>
                                <label for="telefone">Telefone:</label><br>
                                <input type="tel" id="telefone" name="telefone" placeholder="(**) *****-****" pattern="[1-9]{2}[0-9]{5}[0-9]{4}" required><br><br>
                            </div>
                            <div>
                                <label for="instagram">Adicione o link do seu instagram: </label><br>
                                <input type="url" id="instagram" name="instagram" required><br><br>
                            </div>
                        </div>


                        <div>
                            <label for="senha">Crie uma senha:</label><br>
                            <input type="password" id="senha" name="senha" required><br><br>
                        </div>

                        <div class="1">
                            <label for="num">Satisfação:</label><br>
                            <input type="range" id="num" name="num" min="0" max="10" required><br><br>

                            <label for="avaliação">Escreva aqui sua experiência com nosso serviço:</label>
                            <input type="search" id="avaliação" name="avaliação" required><br><br>
                        </div>
    
                        <div class="1">
                            <div>
                                <input type="image" src="imagem/img-computador.png" alt="Submit" width="100" height="100"> <br><br>
                            </div>
                            <input type="button" onclick="alert('Tem certeza que deseja continuar?')" value="Continuar" required>
                            <input type="submit" value="Enviar">
                            <input type="reset" value="Apagar tudo">
        
                            <input type="hidden" id="oculto" name="oculto" value="o usuario não vê">
                        </div>
    
                    </form>
                </div>
    
        </div>
        

    <div class="rodape">
        <br><br>
        <div id="rodape">
            <p>Política de privacidade| Termos de uso</p>
            <p>&copy; 2024 - TODOS OS DIREITOS RESERVADOS A LORRANI RODRIGUES COSTA</p>
        </div>
        <br><br>
    </d> 

</body>
</html>