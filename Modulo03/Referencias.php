<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>
<?php
$page = 'Referencias';
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
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                    
                            <h2 class="Titulo">REFERÊNCIAS</h2>

                            <p></p>

                            <p class="Texto">GONÇALVES, Cristiane. <strong>Broffice.org:</strong>  Calc Avançado Com Introdução às Macros. Rio de Janeiro: Ciência Moderna, 2009.</p>

                            <p class="Texto">ROCHA, Tarcízio da. <strong>OpenOffice.Org 2.0</strong>  Calc Completo e Definitivo. Rio de Janeiro: Ciência Moderna, 2006.</p>
                            <br>
                            <p><strong>Parabéns! <?php echo $NomeUsuario ?> Você chegou ao final do curso Calc Intermediário e Avançado. Teste os seus conhecimentos respondendo a Avaliação do último módulo. <br> Boa sorte e até o próximo curso!</strong></p>
                            <br><br>
          
                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->

                    <div class="col-md-1"></div>
                </div> <!-- End row-->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=376" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realização Avaliação </a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
