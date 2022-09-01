<?php
    require_once('conectamoodle.php');
?>

<?php
$page = 'index';
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
            
                <div class="main-content container-fluid" id="#Apresentacao"> <!-- Begin main-content -->
                    <div class="row"> <!-- Begin row -->
                        <div class="col-md-1"></div>
                        
                        <div class="col-md-10"> <!-- Begin col-md-10 -->
                            <div class="page-title Texto">
                            
                            
                            <h2 class="Titulo">Apresentação</h2>
                            <hr>
                            
                            

                            <p>Seja bem-vindo ao curso Calc – Intermediário e Avançado! <br>

                            No curso de Calc para Iniciantes, você teve uma visão de seus principais comandos, guias, opções, formatações e funções iniciais. Agora, conhecerá novos elementos e mais funções disponíveis. <br>

                            Trabalharemos durante nosso curso com a versão 5.4.2.2 do LibreOffice, mas você poderá utilizar qualquer outra versão. <br>

                            Nesta aula, abordaremos conceitos sobre validação de dados e segurança da informação. <br>

                            Esperamos que você se dedique ao curso e tenha um bom aproveitamento!
                            </p>
                            <!-- Título -->
                            <h2 class="Titulo"> Objetivo:</h2>
                            <hr>
                            <p class="Texto"><i class="fas fa-dot-circle CorVerdeClaroEstado"></i> Proporcionar ao aluno uma visão mais ampla acerca da utilização de mais alguns recursos do LibreOffice Calc, por meio de exemplos práticos, que possam ser uteis em seu cotidiano pessoal e profissional.
                            </p><br><br>
                            

                            
                                                                       
                                          
                            
                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                }); 

                                $(function () {
                                  $('[data-toggle="tooltip"]').tooltip()
                              })   ;   

                              $(function () {
                                $('.example-popover').popover({
                                    container: 'body'
                                      })
                            })                
                            </script>

                            </div> <!-- End page-title -->                            
                        </div> <!-- End page-title -->

                        <div class="col-md-1"></div>
                    </div> <!-- End row -->
                    
                    <!-- Botões de navegação -->
                    <div class="text-center">
                        <a href="Topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>

                </div> <!-- End main-content -->                 

            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
