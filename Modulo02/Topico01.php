<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01';
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

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">

                        <h2 class="Titulo">Validação de Dados</h2>
                        <hr>
                        <p><strong>Objetivo:</strong> Assegurar a entrada de dados de uma planilha, através da validação de dados.</p>
                        <p>Assegurar a entrada de dados válidos é uma tarefa importante.
                        <p> Por exemplo, convém restringir a entrada de dados a um determinado intervalo de datas e a escolhas usando uma lista limitada, ou certificar-se de que apenas números inteiros positivos sejam digitados.</p>

                        <p>Fornecer ajuda imediata para orientar os usuários e mensagens claras quando dados inválidos forem digitados também é essencial para permitir que a entrada de dados aconteça de forma adequada.</p>
                        
                        <!-- Sub Título -->
                        <p class="SubTitulo">Criação de uma Validação de Dados</p>
                        <hr>

                        <!-- Texto/Figura-->
                        <!-- Texto-->
                        <div class="row">
                            <div class="col-md-6">
                                <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                Uma vez decidida que validação você deseja usar em uma planilha, configure-a, adotando o seguinte procedimento:
                                </p>
                                <!-- LISTA EM MOVIMENTO-->
                                <div>
                                    <ol  class="1">
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"> Abra a pasta de trabalho e selecione a planilha;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"> Selecione uma ou mais células para validar;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"> Depois, acesse o menu <strong> Dados – Validade;</strong></li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"> Na guia <strong>Critérios,</strong> caixa <strong>Permitir,</strong>  selecione a opção mais adequada.</li>
                                        
                                    </ol>
                                </div>
                            </div>
                            <!--Figura-->
                            <div class="col-md-6">

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura 01:</strong> Validação </p>
                                    </a>
                                </div>

                                <!-- Imagem 03 - MODAL -->
                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            <p class="FonteFigura"><strong>Fonte:</strong> CEDIS</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 03 - End -->
                            </div>
                        </div><br>
                        <!-- Fim Figura/texto -->

                        <!-- Exemplo -->

                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p> Por exemplo, você pode selecionar Lista para limitar respostas a perguntas como:</p>
                                
                                <!-- LISTA EM MOVIMENTO-->
                                <div>
                                    <ul  class="none">
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Mensalidade paga? Sim ou Não.</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A quantidade vendida foi: Baixa, Média, Alta.</li>
                                        
                                    </ul>
                                </div>


                            </div>
                        </div>
                        <br>
                        <!-- LISTA EM MOVIMENTO-->
                        <div>
                            <ul  class="none">
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"> 5. Clique na caixa Fonte e, em seguida, digite os valores da lista separados por ponto e vírgula.</li>                                
                            </ul>
                        </div>
                        <br>
                        <!-- Exemplo -->

                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto">
                                <p> Suponha que você trabalha numa revendedora de veículos e tem que fazer a planilha de controle de vendas. Digamos que existam três vendedores (por exemplo: Paulo, Ricardo e João) e cinco carros (Gol, Fox, Palio, Civic e Corsa).</p>
                            </div>
                        </div>
                        <br>
                        <p>Vamos selecionar primeiramente a coluna dos nomes. Em seguida, as células que serão utilizadas. Depois, acessaremos a janela de Validação, e selecionaremos a opção ‘Lista’. Após isso, em ‘Entradas’, digite os nomes que você quer que sejam possíveis utilizar, um em cada linha. Para passar para a linha seguinte, pressione ENTER. Caso você deseje que os nomes sejam classificados em ordem alfabética, marque ‘Classificar os valores em ordem crescente’.  </p>
                        <p> A lista preenchida ficará mais ou menos assim:</p>
                        <br>

                        <!-- Titulo Figura -->

                        <div class="text-center">
                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 02:</strong> Validando Células</p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Imagem 01 - End -->
                        <br>
                        <!-- Texto/Figura-->

                        <!-- Texto-->
                        <div class="row">
                            <div class="col-md-6">
                                <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.3s">
                                Feito isso, clique em ‘OK’. Você voltará para a planilha, porém ao selecionar uma das células, que foram validadas, aparecerá o símbolo, que ao ser pressionado mostrará uma caixa de seleção, contendo os valores que foram digitados na lista. Veja:
                                </p>
                            </div>

                            <!--Figura-->

                            <div class="col-md-6">

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.3s" class="img-fluid"   src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura 03:</strong> Validação de células (lista) </p>
                                    </a>
                                </div>

                                <!-- Imagem 03 - MODAL -->
                                <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            <p class="FonteFigura"><strong>Fonte:</strong> CEDIS</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 03 - End -->
                            </div>
                        </div><br>
                        <!-- Fim Figura/texto -->

                        <!-- Texto/Figura-->

                        <!-- Texto-->
                        <div class="row">
                            <div class="col-md-6">
                                <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                Isso quer dizer que, no intervalo em que foi feita a validação, será permitido digitar ou selecionar apenas os valores que estão na lista. Caso você digite um valor diferente dos valores da lista, aparecerá uma mensagem de erro, similar à da Imagem 04.
                                </p>
                            </div>

                            <!--Figura-->

                            <div class="col-md-6">

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura 04:</strong>  Mensagem de Erro Padrão de Validação </p>
                                    </a>
                                </div>

                                <!-- Imagem 03 - MODAL -->
                                <div class="modal fade text-center" id="Imagem04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            <p class="FonteFigura"><strong>Fonte:</strong> CEDIS</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 03 - End -->
                            </div>
                        </div><br>
                        <!-- Fim Figura/texto -->

                        <p>Essa mensagem é a mensagem padrão de erro. No entanto, você pode escrever a sua própria. Para isto, selecione novamente as células que foram/serão validadas e selecione a opção de Validação de Dados novamente. Em seguida, acesse a aba alerta de erro. Aparecerá a janela da imagem 05.</p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.7s" class="img-fluid"   src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong>Figura 05:</strong> Mensagem de Erro Padrão de Validação </p>
                            </a>
                        </div>

                        <!-- Imagem 03 - MODAL -->
                        <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid"  src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                    <p class="FonteFigura"><strong>Fonte:</strong> CEDIS</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 03 - End -->
                        <br>
                        <p>Na figura acima, já foram preenchidos os valores. Essa janela contém os seguintes itens:</p><br>

                        <!-- Texto/Figura-->

                        <!-- Texto-->
                        <div class="row">
                            <div class="col-md-6">
                                <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ação: que tipo de ação será efetuado pelo Calc. As ações podem ser de três tipos:
                                </p>
                                <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i>  Parar: faz com que o usuário tenha que alterar obrigatoriamente o valor digitado para um dos valores da lista. Aparece apenas o botão ‘OK’;
                                </p>

                            </div>

                            <!--Figura-->

                            <div class="col-md-6">

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura 06:</strong> Exemplo da Opção </p>
                                    </a>
                                </div>

                                <!-- Imagem 03 - MODAL -->
                                <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            <p class="FonteFigura"><strong>Fonte:</strong> CEDIS</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 03 - End -->
                            </div>
                        </div><br><br>
                        <!-- Fim Figura/texto -->

                        <!-- Texto/Figura-->

                        <!-- Texto-->
                        <div class="row">
                            <div class="col-md-6">
                                <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Aviso: permite que o usuário escolha entre aceitar o valor que não está na lista ou não. Possui os botões ‘OK’ e ‘Cancelar’, que, se pressionados, farão com que o valor que não esteja na lista seja aceito ou não, respectivamente;
                                </p>
                                <p  class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Informações: permite que o usuário escolha entre aceitar o valor que não está na lista ou não. Possui os botões ‘OK’ e ‘Cancelar’, que, se pressionados, farão com que o valor que não esteja na lista seja aceito ou não, respectivamente;
                                </p>
                                <p  class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Título: é o que aparecer na barra de títulos (a barra azul da mensagem);

                                </p>
                                <p  class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Mensagem de erro: é a mensagem propriamente dita, informando sobre o erro ocorrido.
                                </p>

                            </div>

                            <!--Figura-->

                            <div class="col-md-6">

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.7s" class="img-fluid"   src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura 07:</strong> Exemplo da Opção Aviso </p>
                                    </a>
                                </div>

                                <!-- Imagem 03 - MODAL -->
                                <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            <p class="FonteFigura"><strong>Fonte:</strong> CEDIS</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 03 - End -->
                            </div>
                        </div><br>
                        <!-- Fim Figura/texto -->

                        <p>Outras colunas podem ser validadas também, usando tanto a opção lista quanto outras opções. Para a coluna do veículo, podemos usar a opção lista novamente, incluindo agora os nomes dos veículos, e, no alerta de erro, podemos escrever para selecionar um veículo da lista.</p>

                        <p>Já para a coluna do preço, usaremos a opção ‘Número Decimal’, pois no exemplo colocaremos que o valor mínimo é R$10.000. Para isso, temos que selecionar em ‘Dados’ a opção ‘Maior que’ e, em ‘Mínimo’, digitarmos 10000 (sem pontos, vírgulas etc., a menos que se queira usar um valor “quebrado” como mínimo, por exemplo, 10345,32).</p>
                        <br>

                        <!-- Exemplo -->

                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <div class="ExemploTexto"><br>
                                
                                <!-- Titulo Figura -->

                                <div class="text-center">
                                    <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura"><strong>Figura 08</strong> </p>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Imagem 01 - End -->
                                <P >Para esse caso, colocaríamos como alerta de erro a mensagem “O valor mínimo aceitável é R$10.000,00” ou algo do tipo.
                            </P>
                            </div>
                            
                        </div>
                        <br>
                        <p>Além de Lista e número decimal, podem ser validados os seguintes tipos de dados:
                        </p>
                        <!-- LISTA EM MOVIMENTO-->
                        <div>
                            <ul  class="none">
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Data;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Hora;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Número Inteiro;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Comprimento de Texto.</li>
                                
                            </ul>
                        </div>
                        <br>
                        <p>Todos esses, com exceção de lista, podem ser validados comparando valores, usando os seguintes operadores matemáticos:
                        </p>
                        <!-- LISTA EM MOVIMENTO-->
                        <div>
                            <ul  class="none">
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Igual a;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Maior que;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Menor que;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.2s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Menor ou igual a;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.5s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Maior ou igual a;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.8s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Diferente de;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="2.1s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Entre;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="2.4s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Não está entre.</li>
                                
                            </ul>
                        </div>
                        <br>
                        <p>Cada opção selecionada deverá ser preenchida com um tipo de valor diferente.</p><br>
                        <!-- Exemplo -->

                        <div class="ExemploCaixa">
                            <p class="ExemploTitulo"> Exemplo</p>
                            <p class="ExemploTexto">Ao selecionar ‘Maior ou igual a’, deve-se preencher o valor mínimo. Ao selecionar ‘Menor que’, deverá ser preenchido o valor máximo. Ao selecionar ‘Entre’, deve-se preencher o valor máximo e o valor mínimo permitidos, e assim por diante.</p>
                        </div><br>

                        <p><strong>Parabéns! <?php echo $NomeUsuario ?> Você finalizou o Topico 01 do modulo 02 do curso Calc Intermediário e Avançado.  Boa sorte no Próximo Topico!</strong></p>
                        

                        <br><br><!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            })
                        </script>



                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>