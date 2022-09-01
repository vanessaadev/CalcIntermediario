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

                        <h2 class="Titulo">Tabela Dinâmica e Gráfico Dinâmico</h2>
                        <hr>
                        <p><strong>Objetivo:</strong> Trabalhar com tabelas e gráficos dinâmicos para melhorar a visualização dos dados</p>
                        <p>Um relatório de tabela dinâmica é utilizado para resumir, analisar, explorar e apresentar dados de resumo e para ver comparações, padrões e tendências facilmente. O relatório de tabela dinâmica permite tomar decisões corretas sobre dados críticos.</p>
                        
                        <!-- Sub Título -->
                        <p class="SubTitulo">Criação de uma Tabela Dinâmica e Gráfico Dinâmico</p>
                        <hr>
                        <p>Também conhecido como Assistente de Dados, a Tabela Dinâmica é um recurso do Calc para criar um relatório de tabela dinâmica ou gráfico dinâmico. Você deve se conectar à fonte de dados e inserir o local do relatório. Essa fonte não deve conter colunas ou linhas vazias. Por exemplo, linhas ou colunas em branco, que são usadas para separar um bloco de dados de outro, devem ser removidas.</p>
                        <!-- LISTA EM MOVIMENTO-->
                        <div>
                            <ol  class="1">
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"> Digite a planilha 07;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"> Selecione os dados da tabela;</li>
                                                            
                            </ol>
                        </div><br>
                        
                        <!--Figura-->
                            

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong>Figura 01:</strong> Planilha 07. </p>
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
                        </div><br>
                        <!-- Imagem 03 - End -->

                        <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.3s">3. Certifique-se de que o intervalo de células tenha títulos de coluna, que, na tabela dinâmica, são chamados de campos;</p>
                        
                        <!-- Titulo Figura -->

                        <div class="text-center">
                            <a href="imagens/Figura01_1.png" data-bs-toggle="modal" data-bs-target="#Imagem01_1">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura01_1.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"></p>
                        </div>

                        <!-- Imagem 01_1 - MODAL -->
                        <div class="modal fade text-center" id="Imagem01_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura01_1.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Imagem 01_1 - End -->
                        <br>
                        <!-- Texto/Figura-->

                        <!-- Texto-->
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- LISTA EM MOVIMENTO-->
                                <div>
                                    <ol start="4">
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"> Para criar um relatório de tabela dinâmica, vá até no menu “Dados” → Tabela dinâmica → Criar;</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"> Aparecerá a janela, que questiona qual a fonte de dados será utilizada:</li>
                                                                    
                                    </ol>
                                </div><br>
                            </div>

                            <!--Figura-->

                            <div class="col-md-6 col-sm-12">

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.3s" class="img-fluid"   src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura 02:</strong>  Seleção Tabela Dinâmica</p>
                                    </a>
                                </div>

                                <!-- Imagem 03 - MODAL -->
                                <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                            <p class="FonteFigura"><strong>Fonte:</strong> Tecmundo</p>
                                                
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
                                A caixa de diálogo Criar Tabela Dinâmica é exibida na imagem 3.
                                </p>
                            </div>

                            <!--Figura-->

                            <div class="col-md-6">

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura 03:</strong> Layout do Assistente de dados</p>
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

                        <!-- LISTA EM MOVIMENTO-->
                        <div>
                                    <ol start="6">
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"> Cada título de coluna é representado por um botão, que pode ser arrastado para qualquer uma das posições à esquerda (retângulos brancos), sendo que cada um representa os dados de uma forma diferente. Na figura acima, os botões já foram arrastados para dentro de seus respectivos campos desejados (Coluna, Linha e Dados), e o resultado (para esse exemplo) fica assim:</li>                                        
                                                                    
                                    </ol>
                                </div><br>



                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.7s" class="img-fluid"   src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong>Figura 04:</strong> Criação da Tabela Dinâmica </p>
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
                        <br>

                        <!-- Titulo Figura -->

                        <div class="text-center">
                            <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong>Figura 05:</strong> Tabela Dinâmica </p>
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
                        </div><br>
                        <!-- Imagem 03 - End -->
                        <p>Observe que você não precisa usar todos os campos da lista de campos para criar a tabela Dinâmica.</p>
                        <p>Caso você deseje, pode rearranjar os dados de outra maneira, de acordo com a sua necessidade. Para isso, basta clicar em cima da tabela dinâmica com o botão direito e em seguida selecionar a opção ‘Editar esquema’. A mesma janela de antes será mostrada. Após isso, basta arrastar o campo desejado para a posição desejada.</p><br>
                                               

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.7s" class="img-fluid"   src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura"><strong>Figura 06:</strong> Editar esquema</p>
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
                            
                        <p>Você deve ter reparado que, no final de cada linha e coluna, existe o total. Esse total é calculado sobre a linha ou coluna correspondente, e por padrão calcula a soma dos valores. No entanto, é possível utilizar outras funções, como média, máximo, mínimo, além de funções estatísticas, como desvio padrão. Para trocar a função da tabela dinâmica, vá até a tela de layout.</p>
                        
                        <p>Em ‘Campos de Dados’, existe um botão escrito ‘Soma – Valor’. Clique com o botão esquerdo sobre ele. Ao fazer isso, o botão ‘Opções’ à direita ficará disponível. Clique nesse botão. <br> Aparecerá a janela ilustrada na imagem 7:</p>
                        <br>

                        <!-- Titulo Figura -->

                        <div class="text-center">
                            <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 07:</strong>  Campo de dados </p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura07.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Imagem 01 - End -->
                        
                        <p>Para mudar a função, basta apenas selecionar a que você deseja e clicar em ‘OK’. Em seguida, clique ‘OK’ novamente e a tabela já será atualizada.</p>
                        <p>Falando em alterar valores na tabela original, você pode fazê-lo sem problemas. No entanto, a tabela dinâmica não é atualizada automaticamente. É necessário clicar com o botão direito em cima da tabela dinâmica e selecionar a opção <strong>‘Atualizar’,</strong> </p>
                        <p>Além de todos os recursos vistos aqui, é possível também aplicar filtragem à tabela dinâmica, da mesma maneira que é feito com uma tabela simples.</p>
                        <p>Como você pode perceber, a tabela dinâmica é totalmente personalizável. Com ela, é possível visualizar valores por linhas, colunas, filtros, listas etc. É um recurso bastante útil em certos casos. Se você souber usá-lo corretamente, pode economizar muito tempo em suas tarefas.</p>

                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Gráficos Dinâmicos</p>
                        <hr>
                        <p>Um gráfico dinâmico é uma representação gráfica de um resumo de dados exibido numa tabela dinâmica.</p>
                        <p>Um gráfico dinâmico mostra a série de dados, as categorias e os eixos de gráfico da mesma forma que um gráfico “normal”, mas também apresenta controles de filtragem interativos para que possamos analisar rapidamente um subconjunto dos dados.</p>
                        <p>Quando temos uma tabela com imensos dados numéricos ou alfanuméricos, é difícil perceber o sentido desses mesmos dados. Para nos ajudar a perceber melhor esses dados, um gráfico dinâmico é uma ótima ferramenta de ajuda.</p>
                        <p>Para inserir um Gráfico dinâmico, clique em Inserir – Gráfico ou no símbolo na barra de ferramentas Padrão. Após isso ser feito, aparecerá a seguinte janela:</p>
                        <br>
                        <!-- Titulo Figura -->

                        <div class="text-center">
                            <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 08:</strong> Assistente de gráfico – Escolha do tipo de gráfico</p>
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
                        <!-- Imagem 01 - End --> <br>
                        <p>Escolha uma das opções disponíveis (Barra, Coluna, Pizza etc) e o subtipo, à direita. Um gráfico aparecerá, mostrando como o gráfico está ficando até o momento. Para cada alteração de tipo, subtipo ou qualquer outra, o gráfico é atualizado automaticamente.</p>
                        <p>Não podemos criar um gráfico dinâmico sem uma tabela dinâmica associada.</p>
                        <p>Um gráfico dinâmico reflete sempre o layout atual da tabela dinâmica. Se alterarmos o layout de uma tabela dinâmica, o layout do gráfico dinâmico correspondente também muda. E funciona na direção oposta. Se colocarmos filtros num gráfico dinâmico, a tabela dinâmica correspondente exibe os mesmos filtros.</p>
                        <p>Outra funcionalidade que podemos executar é criar vários gráficos dinâmicos a partir de uma única tabela dinâmica e poder manipular e formatar os gráficos separadamente. No entanto, todos os gráficos exibem os mesmos dados.</p>
                        <br>
                        <p><strong>Parabéns! <?php echo $NomeUsuario ?> Você finalizou o Topico 01 do modulo 03 do curso Calc Intermediário e Avançado.  Boa sorte e até o próximo Topico!</strong></p>
                    
                        

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