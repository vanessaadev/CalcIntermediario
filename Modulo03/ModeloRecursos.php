<?php 
    // HEADER
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
            <div class="main-content container-fluid">
                <div class="page-title">                    
                <hr>
                    <!-- Título -->
                    <h2 class="Titulo">Titulo Teste</h2>
                    <hr>
                    <!-- Sub Título -->
                    <p class="SubTitulo">Sub_Titulo Teste</p>
                    <hr>
                    <!-- Sub Sub Título -->
                    <p class="SubSubTitulo">Sub_Sub_Titulo Teste</p>
                    <hr>
                    <!-- Texto -->
                    <p class="Texto">Texto Normal</p>
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
                                        <p class="TituloFigura">Figura 1: Validação </p>
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

                <!-- Titulo Figura -->

                <div class="text-center">
                    <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                    </a>
                    <p class="FonteFigura">Figura 1: Nome da figura</p>
                </div>

                <!-- Imagem 01 - MODAL -->
                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                            </div>
                            <div class="modal-footer text-center">
                                <p class="TituloFigura"><strong>Fonte :</strong> Fonte da imagem</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Imagem 01 - End -->

                <!-- Importante -->

                <div class="ImportanteCaixa">
                    <p class="ImportanteTitulo"> Importante</p>
                    <p class="ImportanteTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <hr>   
                
                <!-- Fique Atento -->

                <div class="FiqueAtentoCaixa">
                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                    <p class="FiqueAtentoTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <hr>
                <!-- Curiosidade -->

                <div class="CuriosidadeCaixa">
                    <p class="CuriosidadeTitulo"> Curiosidade</p>
                    <p class="CuriosidadeTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <hr>
                <!-- Exemplo -->

                <div class="ExemploCaixa">
                    <p class="ExemploTitulo"> Exemplo</p>
                    <p class="ExemploTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <hr>
                
                
                <!-- Atividade -->

                <div class="AtividadeCaixa">
                    <p class="AtividadeTitulo"> Atividade</p>
                    <p class="AtividadeTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <hr>
                <!-- Saiba Mais -->

                <div class="SaibaMaisCaixa">
                    <p class="SaibaMaisTitulo"> Saiba Mais</p>
                    <p class="SaibaMaisTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>

                <!-- Reflita -->

                <div class="ReflitaCaixa">
                    <p class="ReflitaTitulo"> Reflita</p>
                    <p class="ReflitaTexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                
            </div>
        </div>
        <hr>
                            <!--Redução de colunas-->
                            <div class="row">
                            <div class="col-md-6 col-sm-12">

                            <p>Vida Profissional:</p>

                            <table class="table table-bordered border-success">
                                <tbody>
                                    <tr>
                                        <td colspan="4">Objetivo:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Quando: [  ] curto prazo [ ] médio prazo  [ x ] longo prazo</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">legado</td>         
                                    </tr>
                                </tbody>
                            </table><br>
                            </div>

                            <div class="col-md-6 col-sm-12">
                            <p>Vida Profissional:</p>

                            <table class="table table-bordered border-success">
                                <tbody>
                                    <tr>
                                        <td colspan="4">Objetivo:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Quando: [  ] curto prazo [x ] médio prazo  [  ] longo prazo</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">legado</td>                              
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            </div>
                            <!--Fim  Reducao de Coluna -->

        
          
        <hr>
                <!--INÍCIO CONTEUDO PARTE 02-->
        <section id="pt2">
            <div class="bg-cinzaAzul container-fluid main-content">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <p class="caixa">
                        <h4 class="wow fadeIn" data-wow-delay="0.6s">Foi em 1990 que começaram as pesquisas sobre o BSC em diversas empresas americanas, desenvolvidas pelo instituto Nolan Norton tendo como idealizadores <a href="https://pt.wikipedia.org/wiki/David_P._Norton" target="_blank"> David Norton </a> e <a href="https://pt.wikipedia.org/wiki/Robert_Kaplan" target="_blank">Robert Kaplan </a> .</h4>
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </section> 
            <hr>
            <!-- Accordion Fase 01 - Begin  -->

            <div class="accordion accordion-flush" id="AccordionFase01">

                                <!-- Sub Título -->

                                <p class="SubTitulo">Clique nos títulos abaixo para mais informações</p>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Accountability Vertical</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Texto</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Accountability Horizontal</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                    Texto
                                            </p>
                                        </div>
                                    </div>
                                </div> 

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Accountability Social </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p> texto 

                                            </p>                                                                                       
                                        </div>
                                    </div>
                                </div>                                     
                            </div><br><br>

                            <!-- FIM Accordion Fase 01 - Begin  -->
    
        

                <!-- Nota de Rodapé -->
                <p class="NotaDeRodape"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <hr>

                
            <!-- LISTA EM MOVIMENTO-->
            <div>
            <ul  class="none">
                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est obcaecati iure error soluta quis, culpa quasi amet maiores ab eum quaerat sit nobis. Ad asperiores laboriosam esse ex repellat. Accusantium.</li>
                   
                </ul>
            </div>

            <!-- FIM LISTA EM MOVIMENTO-->

            <!-- Marcadores -->

                <p><i class="fa fa-dot-circle CorAzulEstado01"></i> <strong>texto

                </strong> texto</p>

                <p class="Texto"><i class="fa fa-arrow-alt-circle-right CorAzulEstado01"></i> <strong>texto</p>

                <p class="Texto"><i class="fa fa-check-circle CorAzulEstado01"></i> <strong>texto</p>
                <!-- Circulo Verde-->
                <i class="fas fa-dot-circle CorVerdeClaroEstado"></i> texto
                
                <li class="img-fluid wow fadeInLeft" data-wow-delay="5.9s"><i class="fa fa-cog CorVerdeClaroEstado"></i> Dados com restrições de licença, ou seja, que não podem ser livremente compartilhados.</li>
                
                                
                <hr>

                <!-- CITAÇÃO -->
                <div class="bd-callout bd-callout-success">
                    <p class="Texto">
                    <em>Negociação de conflitos é uma técnica utilizada na gestão de pessoas que visa levar dois ou mais colaboradores da organização a alinhar seus objetivos, expectativas e atitudes para que voltem a trabalhar de forma harmoniosa e colaborativa, depois das discussões, radicalmente sobre algum aspecto do negócio.<p class="text-end">(Paulillo, Júlio)</p></em>
                    </p>
                </div>
            </div>
                  <!-- Botões de navegação -->
        <div class="text-center">
                <a href="Topico02.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Referencias.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
        </div><br>
                    
                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });      
                    
                    $( ".wow" ).addClass( "fadeInUp" );
                </script>
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
