<?php
    // EGPCE - Chama o conectamoodle.php
    require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
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
                    
                            <h2 class="Titulo"> Funções Lógicas</h2>
                            <hr>
                            <!-- Sub Título -->
                            <p class="SubTitulo"> Função E( )</p>
                            <hr>
                            <p>Essa função é utilizada em conjunto com a função SE e permite criar até 30 condições, que retornarão um valor verdadeiro, se todas elas forem satisfeitas. No entanto, caso uma delas não seja satisfeita, o resultado será falso.</p>
                            <p>Sintaxe: =SE(E(condição1; condição2);VERDADEIRO;FALSO)</p>
                            <p>Exemplo de emprego da função lógica E( ) :</p>
                            <p>Uma escola estabeleceu condições para que os alunos fossem aprovados: obter média maior ou igual a 7 (sete) e frequência maior ou igual a 75% (setenta e cinco por cento).</p>

                            <!-- Sub Título -->
                            <p class="SubTitulo"> Função Ou( )</p>
                            <hr>
                            <p>Essa função é utilizada em conjunto com a função SE e permite criar uma cadeia de condições, com uma única diferença em relação à função E: basta que uma condição seja satisfeita, para que o resultado seja verdadeiro.</p>
                            <p>Exemplo de emprego da função lógica OU( ) :</p>
                            <p>Um comerciante deseja aumentar suas vendas e propõe a seus clientes que, em compras acima de cinco unidades OU valor gasto acima de R$ 150,00, terão direito a um abatimento de 12%.</p>
                            <p>Sintaxe: =SE(OU(condição1; condição2);VERDADEIRO;FALSO)</p>
                            <br>
                            <!-- Atividade -->

                            <div class="AtividadeCaixa">
                                <p class="AtividadeTitulo"> Atividade</p>
                                <p class="AtividadeTexto">Vá até o material do curso e aproveite para treinar as fórmulas com as tabelas 03 e 04. <br>
                                <strong> Não precisa enviar à atividade para a escola.</strong></p>
                            </div><br>

                            <p><strong>Parabéns! <?php echo $NomeUsuario ?> Você finalizou o Topico 03 do modulo 01 do curso Calc Intermediário e Avançado. </strong></p>
          
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
                    <a href="Topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Referencias.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
