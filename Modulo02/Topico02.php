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
                                            
                            <h2 class="Titulo">Segurança das Informações</h2>
                            <hr>
                            <p><strong>Objetivo:</strong> Apresentar formas de proteção aos conteúdos presentes nas planilhas.</p> 
                            <p>Dependendo do grau de automação de um modelo de planilha, você pode desejar que os usuários não alterem nenhuma parte dela, ou tenham acesso a somente algumas de suas áreas, exclusivamente, para entrada de dados, não permitindo que sejam alterados rótulos ou fórmulas de cálculo.</p>
                            <p>A seguir, apresentamos alguns níveis de proteção do Calc:</p>

                            <!-- LISTA EM MOVIMENTO-->
                            <div>
                                <ul  class="none">
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"> </i> <strong>Proteger Planilha:</strong>  feita planilha por planilha, essa proteção permite alterar apenas o conteúdo das células que não estiverem travadas.</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"> </i> <strong>Proteger Documento:</strong>  protege todas as planilhas de uma vez só.</li>
                                    
                                    </ul>
                            </div><br>
                            <!-- Sub Título -->

                            <p class="SubTitulo">Proteção de Todas as Células e Planilhas</p>
                            <hr>
                            <!-- Texto/Figura-->

                            <!-- Texto-->
                            <div class="row">
                                <div class="col-md-6">
                                    <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"> 1. Abra a pasta de trabalho e selecione as células ou planilhas que deseja proteger;
                                    </p>
                                    <p  class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"> 2. No menu Ferramentas, clique em Proteger Planilha; 
                                    </p>
                                    <p  class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"> 3. Na caixa de diálogo que se abre, selecione os itens que não devem ser alterados (devem ficar bloqueados) na planilha;
                                    </p>
                                    <p  class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"> 4. Digite uma senha de proteção com até 255 caracteres, podendo conter letras, números e símbolos. Ao clicar em OK, será aberta uma caixa para reinserir a senha de proteção.
                                    </p>
                                </div>

                                <!--Figura-->

                                <div class="col-md-6">

                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.7s" class="img-fluid"   src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                            <p class="TituloFigura"><strong>Figura 09:</strong> Proteção de Células </p>
                                        </a>
                                    </div>

                                    <!-- Imagem 03 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid"  src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
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

                            <!-- Fique Atento -->

                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <p class="FiqueAtentoTexto">O uso de senha é opcional. No entanto, caso você não digite uma senha, qualquer pessoa poderá desbloquear a planilha, bastando para isso apenas acessar o menu de proteção de planilha novamente.</p>
                            </div>
                            <br>
                            <p>Enquanto a planilha estiver protegida, caso alguém tente fazer alguma alteração nas células, aparecerá a seguinte mensagem:</p>

                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 10:</strong> Não é possível modificar células protegidas</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->
                            <br>
                            <!-- Importante -->

                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <p class="ImportanteTexto">Por padrão, todas as células já vêm com o status de “protegidas”. No entanto, essa proteção só é ativada quando protegemos a planilha. Para ter acesso a alterar valores mesmo com a planilha protegida, temos que desmarcar a opção ‘Protegida’. Para retirar essa proteção e permitir que algumas células fiquem editáveis na sua planilha, enquanto outras ficam protegidas através do bloqueio, basta selecionar a(s) célula(s), clicar com o botão direito do mouse e escolher a opção “Formatar Células”. Na janela seguinte, retire a seleção do protegido.</p>
                            </div>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 11:</strong> Proteção de Célula</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->
                            <br>
                            <!-- Exemplo -->

                            <div class="ExemploCaixa">
                                <p class="ExemploTitulo"> Exemplo</p>
                                <div class="ExemploTexto">
                                    <!-- Titulo Figura -->

                                    <div class="text-center">
                                        <a href="imagens/Figura11_1.png" data-bs-toggle="modal" data-bs-target="#Imagem11_1" >
                                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura11_1.png" alt="Alt da imagem fica aqui">
                                        </a>
                                        <p class="FonteFigura"><strong>Figura 11.1</strong> </p>
                                    </div>

                                    <!-- Imagem 11_1 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem11_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura11_1.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Imagem 11_1 - End -->

                                
                                    <p>Digamos que, na planilha acima, a qual será utilizada por outra pessoa, queiramos protegê-la, porém queremos que a pessoa tenha acesso a alterar os nomes (Coluna A) e Salários (Coluna B), e não deve ter acesso a alterar as fórmulas das Colunas C e D. Para isso, antes de proteger a planilha, temos que selecionar as células que ficarão desprotegidas (no nosso caso, de A2 até B13), e em seguida temos que ir na janela de formatação das células (menu Formatar → Células ou CTRL + 1 no teclado), localizar a aba ‘Proteção de Células’.</p>
                                    <p>Para ter acesso a alterar valores, mesmo com a planilha protegida, temos que desmarcar a opção ‘Protegida’ e clicar em ‘OK’.</p>
                                    <p>Proteja a planilha novamente e você verá que haverá acesso para alterar livremente de A2 até B13 (células que foram desprotegidas), porém o restante continuará bloqueado.
                                    </p>
                                </div>
                            </div>
                            <br>
                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Ocultar Fórmula</p>
                            <hr>
                            <!-- Reflita -->

                            <div class="ReflitaCaixa">
                                <p class="ReflitaTitulo"> Reflita</p>
                                <p class="ReflitaTexto">Você deve estar se perguntando: e a opção ‘Ocultar Fórmula’?</p>
                            </div>
                            <br><p>Ela também só funciona quando a planilha está protegida, e serve para ocultar a fórmula das células selecionadas na barra de fórmulas.</p><br>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Salvar com Senha</p>
                            <hr>
                            <p>Uma outra opção é salvar o arquivo todo com uma senha. Assim, ele só poderá ser aberto por possuir o código. Para isso, quando for salvar o arquivo, “tique” a opção “Salvar com Senha”.</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12" >
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 12:</strong>  Salvar documento com senha</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div><br>
                            <!-- Imagem 01 - End -->
                            <p>Feito isso, clique no botão “Salvar”.</p>
                            <p>Será aberta, em seguida, uma caixa para que você digite a senha e confirme.</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13" >
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 13: </strong> Salvar documento com senha</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div><br>
                            <!-- Imagem 01 - End -->

                            <p>Pronto! O documento agora só poderá ser aberto por quem tiver a senha digitada por você.</p>

                            <!-- Sub Título -->
                            <p class="SubTitulo"> Desproteção de células e planilhas</p>
                            <hr>
                            <p>Para desproteger células ou planilhas, faça o seguinte:</p>
                            <!-- LISTA EM MOVIMENTO-->
                            <div>
                            <ol  class="1">
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s">  Selecione a célula ou planilha que deseja desproteger;</li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"> No menu Ferramentas, clique em Desproteger Planilha.</li>                                  
                                </ol>
                            </div><br>
                            <p><strong>Parabéns! <?php echo $NomeUsuario ?> Você finalizou o Topico 02 do modulo 02 do curso Calc Intermediário e Avançado.  Boa sorte no Próximo Topico!</strong></p>
                           

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
