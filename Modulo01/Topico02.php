<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
    include('layout/header.php');
?>
<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid Texto">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                                            
                            <h2 class="Titulo">Organização de Dados</h2>
                            <hr>
                            <p> <strong>Objetivo:</strong>  Organizar os dados existentes em uma tabela.</p>
                            <!-- Sub Título -->
                            <p class="SubTitulo"> Trabalhando com Nomes</p>
                            <hr>
                            <p>Normalmente, sempre que queremos calcular a soma, média ou qualquer outra função que necessite de um intervalo, usamos o nome da função e digitamos o endereço das células como parâmetro do intervalo. Por exemplo, se existem valores a serem somados em B2, B3, B4 e B5, a fórmula (que talvez esteja em B6) ficaria assim:</p>
                            <center><p><strong>=SOMA(B2:B5)</strong></p></center>
                            <p>Não há nada errado com essa fórmula. No entanto, esse intervalo (ou qualquer outro) pode ser ‘nomeado’, para facilitar a sua localização e/ou compreensão.</p>
                            
                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">O que é um Nome?</p>
                            <hr>
                            <p>É uma referência que fazemos a uma célula ou intervalo de células de forma que esse nome possa ser utilizado em uma fórmula ou função, dentro de qualquer planilha da pasta de trabalho. Usando nomes, você pode facilitar muito o entendimento e a manutenção das fórmulas.
                            </p>
                            <p>Depois de adotar a prática do uso de nomes, você poderá atualizá-los, auditá-los e gerenciá-los facilmente.</p>
                            <!-- tabela -->
                            <div class="col-md-12">
                                 <br />
                                <table class="table table-bordered border-success ">
                                <thead class="table-success border-success">
                                <tr>
                                <th scope="col">Tipo</th>
                                <th scope="col">Exemplo sem nome</th>
                                <th scope="col">Exemplo com nome</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>Referência</td>
                                <td>=SOMA(C20:C30)</td>
                                <td>=SOMA(TOTALFINAL)</td>
                                </tr>
                                <tr>
                                <td>Constante</td>
                                <td>=PRODUTO(A5,8.3)</td>
                                <td>=PRODUTO(PRECO;QUANT)</td>
                                </tr>
                                <tr>
                                <td>Fórmula</td>
                                <td>=SOMA(PROCV(A1,B1:F20,5,FALSO),-G5</td>
                                <td>=SOMA(PROCURA)</td>
                                </tr>
                                <tr>
                                <td>Tabela</td>
                                <td>=C4:G36</td>
                                <td>=TABELAPRINCIPAL</td>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                            <!--tabela Fim-->

                           <p>Para nomear uma célula ou região, faça o seguinte:</p> 
                           <p>1. Abra a planilha.</p>
                           <p>2. Clique na(s) célula(s) que deseja nomear. Tomemos, por exemplo, a imagem a seguir, onde a célula B12 foi selecionada.</p>
                          
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura img-fluid wow fadeInLeft"><strong>Figura 06:</strong> Nomeando Células</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->

                            <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="FonteFigura "><strong>Fonte :</strong> CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Imagem 01 - End -->

                            <!-- Fim Figura -->

                         
                            <!-- Figura/texto -->
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.3s">
                                    Para criar um nome, algumas regras devem ser bedecidas:                                  
                                    </p>
                                    <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>
                                    O primeiro caractere do nome deve ser letra ou underline.                                  
                                    </p>
                                    <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>
                                    O nome pode ter até 255 caracteres.                                  
                                    </p>
                                    <p  class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>
                                    Não pode haver espaços.                                 
                                    </p>

                                </div>
                                <div class="col-md-6">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura img-fluid wow fadeInRight"><strong>Figura 07:</strong> Definir nome</p>
                                    </div>

                                    <!-- Imagem 02 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid"  src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                                    
                                                </div>
                                                <div class="modal-footer text-center">
                                                <p class="FonteFigura"><strong>Fonte :</strong>CEDIS</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 02 - End -->
                                </div>
                            </div>
                            <!-- Fique Atento --> <br>

                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <p class="FiqueAtentoTexto">Ao nomear intervalos, não podem ser usados nomes de funções existentes no Calc (SOMA, MEDIA, MAXIMO, etc), nem nomes de endereços de células (A2, B5, D9, etc), pois essas palavras são palavras reservadas do Calc, e caso pudessem ser utilizadas causariam ambiguidade (o Calc não saberia se estaríamos falando da função ou do nome do intervalo).</p>
                            </div><br>
                            <p>Ao definirmos um nome para uma célula ou região, ele passa a ser exclusivo da pasta de trabalho, ou seja, em qualquer planilha, podemos fazer referência a ele. Por exemplo, em qualquer célula de qualquer planilha da pasta de trabalho em que você digite =Poupança, aparecerá o valor digitado para a Poupança.
                            </p><br>
                            <!-- Saiba Mais -->

                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto">Você pode nomear uma célula ou região rapidamente. Basta selecionar a célula ou região, clicar na caixa Nome na barra de fórmulas, digitar o nome e pressionar Enter.
                                Observe que ao adotar um nome, na utilização do autocomplementar, não se faz mais necessária a fixação do endereço.</p>
                            </div><br>

                            <!-- Figura/texto -->
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                    Para visualizar todos os nomes atribuídos a células ou regiões nas planilhas, basta clicar na seta Drop Down, na caixa Nome, à esquerda na barra de fórmulas.              
                                    </p>

                                </div>
                                <div class="col-md-6">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura img-fluid wow fadeInRight"><strong>Figura 08:</strong> Definir nome</p>
                                    </div>

                                    <!-- Imagem 02 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid"  src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                                    <p class="FonteFigura"><strong></strong> </p>
                                                </div>
                                                <div class="modal-footer text-center">
                                                <p class="FonteFigura "><strong>Fonte</strong> CEDIS</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 02 - End -->
                                </div>
                            </div>

                            <!-- Figura/texto -->
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                    Para excluir um nome, faça o seguinte:             
                                    </p>
                                    <div>
                                        <ol  class="1">
                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"> Clique no menu “Planilha” → “Intervalos Nomeados e Expressões” → “Gerenciar nomes”. Ou, aperte simplesmente CTRL + F3 no teclado.</li>
                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"> Na caixa Gerenciador de Nomes, selecione o nome desejado e clique no botão Excluir.
                                            </li>
                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"> Caso esse nome tenha sido utilizado em alguma fórmula ou função, aparecerá a seguinte mensagem de erro: #NOME?                                                
                                            </li>
                                            
                                        </ol>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura img-fluid wow fadeInRight"><strong>Figura 09:</strong> Definir nome</p>
                                    </div>

                                    <!-- Imagem 02 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid"  src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                                    <p class="FonteFigura"><strong></strong> </p>
                                                </div>
                                                <div class="modal-footer text-center">
                                                <p class="FonteFigura "><strong>Fonte</strong> CEDIS</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 02 - End -->
                                </div>
                            </div><br>
                            <!-- Atividade -->

                            <div class="AtividadeCaixa">
                                <p class="AtividadeTitulo"> Atividade</p>
                                <p class="AtividadeTexto">Vá até a material do curso, baixe a planilha de nome “planilha01” e resolva.
                                - As colunas de Mês/Ano e % não devem ser copiadas e coladas da tabela índice. Tente trazer o valor de lá, utilizando os endereços de células.
                                - Nos cálculos dos valores, utilize as células renomeadas.
                                - Na coluna de %, aplique uma formatação condicional para os valores positivos e uma para os negativos. <br>
                                <strong>Esta atividade não precisa ser entregue à escola.</strong>  </p>
                            </div>
                             <br><br>

                             <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura img-fluid wow fadeInLeft"><strong>Figura 10:</strong> Tabela Final</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte :</strong>CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->

                            <!-- Sub Título -->

                            <p class="SubTitulo">Organização de Dados</p>
                            <hr>
                            <p>Ao inserir dados em uma planilha, eles podem não se apresentar ordenados da maneira que você deseja visualizá-los.</p>
                            <p>Com os recursos de classificação e a aplicação de filtros simples vistos no módulo básico, são criadas novas perspectivas para ajustar os dados às suas necessidades.</p>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Classificação de dados</p>
                            <hr>
                            <!-- Lista-->
                            <div>
                                <ol  class="1">
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"> Selecione a planilha (planilha 02 – disponível no material do curso);</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s">Clique no menu Dados → Ordenar;
                                    </li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s">Na caixa de diálogo Ordenar, selecione a coluna desejada, valores e ordem.                                              
                                    </li>
                                    
                                </ol>
                            </div><br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura img-fluid wow fadeInLeft"><strong>Figura 11:</strong> Ordenar</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura " ><strong>Fonte :</strong>CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->

                            <p>Nesse caso, solicitamos que a coluna da “Região” seja, primeiramente, ordenada de forma crescente e depois disso, a coluna “Faturamento”, seja ordenada de forma decrescente.</p>
                            <br>

                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura img-fluid wow fadeInLeft"><strong>Figura 12</strong> Ordenar</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura " ><strong>Fonte :</strong>CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->
                            <p>Você pode adicionar até três níveis de classificação.</p>
                            <br>
                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Subtotais</p>
                            <hr>

                            <p>Automaticamente, você pode calcular os subtotais e os totais gerais para uma coluna, usando o comando Subtotal, do menu Dados.</p>
                            <p>
                            Os subtotais são calculados com uma função de resumo, como SOMA ou MÉDIA. Você pode exibir mais de um tipo de função de resumo para cada coluna.
                            </p>
                            <p>Os totais gerais são derivados de dados de detalhes, e não dos valores nos subtotais.
                            </p>
                            <p>Por exemplo, se você usar a função de resumo MÉDIA, a linha de total geral exibirá uma média de todas as linhas de detalhes, e não uma média dos valores das linhas de subtotal.
                            </p>
                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Criação de Subtotais</p>
                            <hr>
                            <p>1. Classifique a coluna que servirá de base para gerar o subtotal. Nesse caso, iremos utilizar a coluna “Produto”;</p>

                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura img-fluid wow fadeInLeft"><strong>Figura 13:</strong> Subtotais</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura " ><strong>Fonte :</strong>CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Fim Titulo Figura -->
                            <br>
                            <p>2. No menu Dados, clique em Subtotais;</p>
                            <p>3. Na caixa de diálogo Subtotais, 1º Grupo, selecione a coluna a ser agrupada. Em nosso exemplo, é Produto;</p>
                            <p>4. No campo “Calcular subtotais para:” escolha “Faturamento”;</p>
                            <p>5. No campo Utilizar função, clique na função que você deseja utilizar para calcular os subtotais. Em nosso exemplo, é SOMA;                                
                            </p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura img-fluid wow fadeInLeft"><strong>Figura 14:</strong> Subtotais</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura " ><strong>Fonte :</strong>CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Fim Titulo Figura -->
                            <br>
                            <p>Se você desejar uma quebra de página automática após cada subtotal, ou distinguir entre maiúscula e minúscula ou ainda realizar ordenações, clique na guia Opções e configure.
                            </p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura img-fluid wow fadeInLeft"><strong>Figura 15:</strong> Subtotais</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura " ><strong>Fonte :</strong>CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Fim Titulo Figura -->
                            <br>
                            <p>6. Clique em OK.</p>
                            <p>Como opção, você poderá usar o 2º e 3º grupo do comando Subtotais, para adicionar mais subtotais com funções de resumo diferentes.</p>
                            <br>
                            <!-- Saiba Mais -->

                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto">Para exibir um resumo somente dos subtotais e totais gerais, clique nos símbolos de estrutura de tópicos 1,2,3,4,5 , ao lado dos números de linha. Use os símbolos + e -  para exibir ou ocultar as linhas de detalhes dos subtotais individuais.</p>
                            </div>
                            <br>
                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Remoção de Subtotais</p>
                            <hr>
                            <p>Quando você remove subtotais, o Calc remove também a estrutura de tópicos e as quebras de página que você inseriu na lista juntamente com os subtotais.</p>
                            <div>
                                <ol  class="1">
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"> Clique em uma célula na lista que contém um subtotal;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"> No menu Dados, clique em Subtotal. A caixa de diálogo Subtotal é exibida;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"> Clique em Remover.</li>
                                    
                                </ol>
                            </div><br>
                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Filtros</p>
                            <hr>
                            <p>A maioria das funcionalidades do LibreOffice tem um nome autoexplicativo, a função de Filtro não é diferente. A ideia é possibilitar filtrar os dados de um conjunto de tabelas, quando a relação de dados é extensa é um recurso bem útil. Como exemplo, é possível exibir o resultado de uma região em meio a várias, tornando a visualização e análise mais simples.
                            </p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura img-fluid wow fadeInLeft"><strong>Figura 16:</strong> Filtro Simples</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura " ><strong>Fonte :</strong>CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Fim Titulo Figura -->
                            <br>
                            <p>Para ter acesso, selecione o intervalo de dados analisado (também conhecido com matriz) e acesse o menu Dado – Filtro e selecione uma das opções de filtro.
                            </p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura img-fluid wow fadeInLeft"><strong>Figura 17:</strong> Filtro </p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Fim Titulo Figura -->
                            <br>
                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Autofiltro</p>
                            <hr>
                            <p>O autofiltro é uma das opções mais rápidas de filtro e também mais flexível. Ao selecionar a opção, automaticamente será criada no topo da matriz uma seta para seleção da informação a ser filtrada, ao clicar no combo (ou seta) será exibida uma caixa de diálogo com várias opções de filtro.</p>
                            <br>

                            <!-- Figura/texto -->
                            
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <div>
                                        <ul  class="none">
                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> As duas opções iniciais são de classificação dos dados, pode selecionar na ordem crescente ou decrescente;</li>
                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> O segundo bloco são opções predefinidas de filtros. A primeira opção de 10 primeiros resultados, exibe os maiores valores da coluna, só funciona com célula que possua números, a segunda opção é seleção dos dados vazios e, por fim, os não vazios;
                                            </li>
                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Filtro padrão é a segunda opção filtragem, explicaremos a seguir;                                           
                                            </li>
                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> A relação exibida é a consolidação dos dados da coluna, desmarque a opção todos abaixo e selecione o resultado que deseja exibir. Se quiser desmarcar ou marcar todas as opções, utilize os botões ao lado de “todos”. Agora, é só confirmar e os dados que serão filtrados.
                                            </li>
                                            
                                        </ul>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura img-fluid wow fadeInRight"><strong>Figura 18:</strong> Autofiltro</p>
                                    </div>

                                    <!-- Imagem 02 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid"  src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                                    <p class="FonteFigura"><strong></strong> </p>
                                                </div>
                                                <div class="modal-footer text-center">
                                                    
                                                    <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 02 - End -->
                                </div>
                            </div><br>

                            <!-- Saiba Mais -->

                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto">Sempre que o filtro estiver ativo, a seta ficará marcada em azul, como no exemplo da imagem 17. Quando fazemos muito filtros e queremos desabilitar algum, esta é a melhor forma de localizar os valores filtrados.</p>
                            </div>
                            <br>
                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Filtro Padrão</p>
                            <hr>

                            <p>A funcionalidade é utilizada para definir critérios de filtros preestabelecidos, ao clicar na opção de Filtro Padrão poderão ser definidos condições para seleção das informações, algumas das condições são >, <, contém, termina com, entre outras, acreditamos que cada opção é autoexplicativa, então não iremos nos aprofundar. É possível adicionar vários parâmetros, a medida que forem sendo adicionados novos, devemos especificar o operador E ou OU. O E determina que o filtro deverá atender as duas condições e o OU determinar uma condição ou outra.
                            </p><br>

                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura img-fluid wow fadeInLeft"><strong>Figura 19:</strong> Filtro Padrão </p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Fim Titulo Figura -->
                            <br>
                            <p>Para deixar mais claro segue um exemplo (imagem 19), se selecionarmos o produto = Borracha E com faturamento >= 100, serão exibidos todos os produtos relacionados a Borracha com faturamento de maior ou igual a 100. No caso do emprego do OU, serão exibidos os produtos relacionados à Borracha ou os vários produtos que tenham faturamento >= 100.</p>

                            <p>Na parte abaixo das condições, clique em Opções para exibir critérios adicionais de seleção. São elas:</p>

                            <p>1. Distinção entre maiúsculas e minúsculas; </p>

                            <p>2. Expressões Regulares, como a ajuda do LibreOffice define “Se a caixa de seleção Expressões regulares estiver selecionada, você poderá usar expressões regulares no campo Valor se a caixa de listagem Condição estiver definida em ‘=’ IGUAL ou ‘<>’ DIFERENTE. Isso também se aplicará às respectivas células designadas para um filtro avançado;”</p>

                            <p>3.  Sem Duplicatas – exclui os dados duplicados da seleção;</p>

                            <p>4. dados para – copia a seleção efetuada para algum outro da planilha.</p><br>

                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura20.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura img-fluid wow fadeInLeft"><strong>Figura 20:</strong> Filtro Padrão </p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Fim Titulo Figura -->
                            <br>

                            <p><strong>Parabéns! <?php echo $NomeUsuario ?> Você finalizou o Topico 02 do modulo 01 do curso Calc Intermediário e Avançado.  Boa sorte no Próximo Topico!</strong></p>
                            
                            




                            

                            <br><br><!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->                        
                    </div> <!-- End col-md-10 -->
                    <div class="col-md-1"></div>
                </div> <!-- End row -->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
