<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de Cadastramento de Alunos</title>
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
            <a class="ativo" href="cadaluno.php">Área de Cadastramento de Alunos</a>
            <a href="listaaluno.php">Alunos Cadastrados</a>
        </li>
    </ul>



    <main>
        <div class="conteudo2">
            <div class="formulario">
                <form action= "listaaluno.php" method= "post">

                    <div class="informacoes1">
                        <div id="id1">
                            <label for="nome">Nome Completo:</Nome></label><br>
                            <input type="text" id="nome" name="nome" placeholder="Ex: Lorrani Rodrigues Costa" required>
                        </div> 

                        <div id="grupo0">
                            <div id="id2">          
                                <label for="data">Nascimento:</label><br>
                                <input type="date" id="data" name="data" min="1924-12-31" max="2024-12-31" required>
                            </div>
                            <div id="id3">
                                <label for="cpf">CPF:</label><br>
                                <input type="text" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" pattern="\d{3}\.\d{3}\.\d{3}\-\d{2}" required><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="informacoes2">
                        <div id="id4">
                            <label for="email">Endereço de email:</label><br>
                            <input type="email" id="email" name="email" placeholder="Ex: joao@gmail.com " required>
                        </div>
                        <div id="id5">
                            <label for="telefone">Telefone:</label><br>
                            <input type="tel" id="telefone" name="telefone" placeholder="(**) *****-****" pattern="(([1-9]{2}))([0-9]{5})\-\([0-9]{4})" required>
                        </div>
                    </div>


                    <div class="informacoes3">
                        <div id="grupo1">
                            <div id="id6">  
                                <label for="rua">Endereço:</label><br>
                                <input type="text" id="rua" name="rua" placeholder="Ex: Rua Santana, nº 51" required>
                            </div> 
                            <div id="id7">
                                <label for="bairro">Bairro:</label><br>
                                <input type="text" id="bairro" name="bairro" placeholder="Ex: Bairro Santa Luzía" required>
                            </div>
                        </div>
                        
                        <div id="grupo2">
                            <div id="id8">
                                <label for="cidade">Cidade:</label><br>
                                <input type="text" id="cidade" name="cidade" placeholder="Ex: Caculé" required>
                            </div>
                            <div id="id9">
                                    <label for="uf">UF:</label>
                                    <select  id="uf" name="uf" required>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ED">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                    </select><br>
                            </div>
                        </div>
                    </div>

                        <div class="grupo3">
                            <div class="classe1"><p>Disciplinas Cursadas:<br></p></div>

                            <div class="informacoes4">
                                <input type="checkbox" id="materia1" name="materia1" value="Português">
                                <label for="materia1">Português</label><br>
                                <input type="checkbox" id="materia2" name="materia2" value="Matemática">
                                <label for="materia2">Matemática</label><br>
                                <input type="checkbox" id="materia3" name="materia3" value="Biologia">
                                <label for="materia3">Biologia</label><br>
                                <input type="checkbox" id="materia4" name="materia4" value="História">
                                <label for="materia4">História</label><br>
                                <input type="checkbox" id="materia5" name="materia5" value="Geografia">
                                <label for="materia5">Geografia</label><br>
                            </div>
                        </div>

                        <div class="grupo3">
                            <div class="classe1"><p>Disciplina Preferida:<br></p></div> 

                            <div class="informacoes5">  
                                <input type="radio" id="favorita1" name="favorita" value="Português">
                                <label for="favorita1">Português</label><br>
                                <input type="radio" id="favorita2" name="favorita" value="Matemática">
                                <label for="materia2">Matemática</label><br>
                                <input type="radio" id="favorita3" name="favorita" value="Biologia">
                                <label for="materia3">Biologia</label><br>
                                <input type="radio" id="favorita4" name="favorita" value="História">
                                <label for="materia4">História</label><br>
                                <input type="radio" id="mfavorita5" name="favorita" value="Geografia">
                                <label for="materia5">Geografia</label><br>      
                            </div>
                        </div>


                        <div class="envio">
                            <div><input type="reset" value="Apagar"></div>
                            <div><input type="submit" value="Salvar"></div>
                        </div>
                </form>
            </div>

        <a class="voltar" href="index.php">&larr; Voltar</a>

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