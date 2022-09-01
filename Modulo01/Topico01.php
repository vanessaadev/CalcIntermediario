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

                        <h2 class="Titulo">Pastas de Trabalho</h2>
                        <hr>
                        <p><strong>Objetivo:</strong> Desenvolver habilidades para criação e utilização de pastas de trabalho modelo.</p>
                        
                        <!-- Sub Título -->
                        <p class="SubTitulo">Modelo de pasta de trabalho no Calc</p>
                        <hr>
                       
                        <!-- SaibaMais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> SAIBA MAIS</p>
                            <p class="SaibaMaisTexto">Você já imaginou como seria digitar valores em uma planilha sem ter que ficar se preocupando com a utilização de fórmulas ou cálculos?</p>
                        </div><br>

                        <p>Com certeza, você já pegou uma planilha antiga e saiu apagando o conteúdo de linhas ou colunas para reutilizar a estrutura sem ter que criar uma nova, apenas salvando a pasta de trabalho com outro nome. Esse, entretanto, é um modo arriscado de trabalhar, porque, sem perceber, você pode apagar fórmulas importantes e inutilizar a planilha.
                        </p>
                        <p>Todo esse procedimento pode ser facilitado, com a criação de uma pasta de trabalho modelo e o acesso a esta, sempre que necessário.
                        </p>

                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo">Criação de uma pasta de trabalho modelo</p>
                        <hr>

                        <p>Antes de tudo, você deve criar uma pasta de trabalho, formatando células, elaborando fórmulas, utilizando filtros, proteção etc., ou seja, deve modelar a(s) planilha(s).
                        </p>
                        <p>Vamos criar uma planilha com o nome <strong>"Controle_comissão"</strong>  e formatá-la conforme abaixo:
                        </p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 01:</strong> Tabela de comissâo</p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Imagem 01 - End -->
                        <p>Agora, aplicaremos as seguintes formatações:</p>

                        
                        <!-- LISTA EM MOVIMENTO-->
                        <p class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"> Na célula F3, digite a fórmula =D3*E3 e copie para as demais, utilizando a alça de complementação;
                        </p>
                        <p class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"> Nas células de E3 a E25, utilize o formato de célula do tipo Moeda;
                        </p>
                        <p class="img-fluid wow fadeInLeft" data-wow-delay="0.9s">Nas células de F3 a F25, utilize o formato de célula do tipo Moeda;
                        </p>
                        <p class="img-fluid wow fadeInLeft" data-wow-delay="1.3s">Nas células de G3 a G25, utilize o formato de célula do tipo porcentagem;
                        </p>
                        <p class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"> Na célula H3, digite a fórmula =F3*G3 e copie para as demais, utilizando a alça de complementação;
                        </p>
                        <p class="img-fluid wow fadeInLeft" data-wow-delay="1.9s">Nas células de H3 a H25, utilize o formato de célula do tipo Moeda.
                        </p>
                        <p>Seu novo modelo de planilha ficará assim:
                        </p><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 02:</strong> Tabela de comissâo formatada</p>
                        </div>

                        <!-- Imagem 02 - MODAL -->
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
                        </div><br>
                        <!-- Imagem 02 - End -->                     
                        
                        <!-- Figura/texto -->
                        <div class="row">
                            <div class="col-md-6">
                                <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                Na caixa de diálogo seguinte, dê um nome para o seu modelo e escolha uma das categorias para armazená-lo. <br>


                                </p>
                            </div>
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura 03:</strong> Modelo Tabela de comissâo formatada </p>
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
                        <!--Fim Figura/texto -->

                        <!-- Figura/texto -->

                        <div class="row">
                            <div class="col-md-6">
                                <p  class="img-fluid wow fadeInLeft" data-wow-delay="0.5s">
                                Após a definição do modelo, basta clicar no menu “Arquivo” → “Modelos” → “Salvar como modelo”. <br>
                                Nesse caso, chamamos o modelo de “Tabela de Comissão” e escolhemos como categoria modelo a “Meus modelos”. <br>
                                Para finalizar o processo, basta clicar em “salvar”.
                        
                                </p>
                            </div>
                            <div class="col-md-6">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid"   src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"><strong>Figura 04:</strong> Salvar como </p>
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

                        <!-- Figura/texto -->

                        <!-- Sub Sub Título -->
                        <p class="SubSubTitulo"> Abertura de Uma Pasta de Trabalho Modelo</p>
                        <hr>
                        <p>Sempre que você precisar da planilha, basta abrir a pasta de trabalho modelo, que ela lhe será apresentada sem nenhum outro questionamento. Mas como abri-la?
                        </p>
                        <p>Clique no menu “Arquivo” → “Modelos” → “Gerenciar modelos”.
                        </p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                <img class="img-fluid wow fadeInLeft" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura"><strong>Figura 05:</strong> Abrir modelo</p>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Imagem 01 - End -->

                        <!-- Fim Figura/texto -->

                        <p>Uma outra opção é apertar as teclas CTRL + Shift + N.
                        </p>
                        <p>Na caixa de diálogo seguinte, procure por sua planilha, selecione-a e clique em abrir. Viu como é simples? A maior vantagem é que como é um modelo, você não precisa se preocupar em apagar nada que já tenha feito por engano, o modelo sempre estará disponível para um novo trabalho.
                        </p><br>
                        <p><strong>Parabéns! <?php echo $NomeUsuario ?> Você finalizou o Topico 01 do modulo 01 do curso Calc Intermediário e Avançado.  Boa sorte no Próximo Topico!</strong></p>

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