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
                    
                            <h2 class="Titulo"> Funções</h2>
                            <hr>
                            <p><strong>Objetivo:</strong> Trabalhar com funções de pesquisa, que auxiliem na busca mais rápida por informações.
                            </p>

                            <!-- Sub Título -->
                            <p class="SubTitulo">Funções de Pesquisa e Referência</p>
                            <hr>
                            <p>Essa categoria é composta por funções que localizam valores em uma lista ou retornam sua referência. Existem 18 funções nessa categoria. Dentre elas, vamos conhecer algumas de grande utilidade no desenvolvimento de planilhas inteligentes.</p>
                            <p>A seguir, você conhecerá as funções PROCV, PROCH, ÍNDICE e CORRESP. Em muitos casos, elas trabalham em conjunto, proporcionando excelentes resultados.</p><br>

                            <!-- Sub Sub Título -->

                            <p class="SubSubTitulo"> PROCV</p>
                            <hr>
                            <p>A função PROCV é uma função de procura muito útil. Com ela podemos fazer uma busca de um determinado valor dentro de um intervalo e retornar como resultado um valor de uma coluna adjacente.
                            </p>
                            <p>A estrutura da função PROCV é a seguinte:</p>
                            <center><p><strong>=PROCV (VALOR_PROCURADO; INTERVALO_DE_PESQUISA; ÍNDICE_DA_COLUNA; ORDEM)</strong></p></center>

                            <p>O valor procurado é pesquisado dentro da primeira coluna do intervalo de pesquisa. Quando o valor é encontrado, o resultado correspondente, indicado pelo índice da coluna, é apresentado. A ordem é um argumento opcional, que pode assumir o valor verdadeiro ou falso. Caso tenha o valor falso, a pesquisa será realizada sempre considerando valores exatos. Por exemplo, podemos fazer uma procura por dados de uma pessoa a partir do seu nome ou do seu número de cadastro.</p>
                            <p>No exemplo abaixo, temos uma tabela com dados de alunos e suas respectivas notas.</p>
                            <br>

                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 14:</strong> Função Procv</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->
                            <br>
                            <p>Para fazer uma busca pelo desempenho dos alunos na disciplina, podemos usar a função PROCV. Procurando pelo campo de matrícula na primeira coluna do intervalo, podemos achar os demais dados do aluno. Se desejássemos como resultado o nome do aluno cuja matrícula é 126-4, teríamos a seguinte fórmula:</p>
                            <center><p><strong>=PROCV(H9;A10:D18;2;FALSO)</strong></p></center>
                            <p>O resultado seria o nome Éverton Brenner Oliveira. Para chegar a esse resultado, a função procurou pela matrícula 126-4 na primeira coluna do intervalo A10:D18. Ao encontrar o registro pesquisado, a função verificou qual o índice da coluna do intervalo A10:D18. O índice, cujo valor é 2, indica a segunda coluna do intervalo. A intersecção entre a linha indicada pelo número de matrícula e o índice da coluna do intervalo indicam o resultado final da fórmula.</p>
                            <p>Para evitar a pesquisa por aproximação, inserimos o quarto argumento com o valor <strong>FALSO.</strong> </p>
                            <p>Dessa forma, somente os valores existentes no intervalo retornarão resultados válidos.</p>
                            <br>
                            <!-- Saiba Mais -->

                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto">- Sempre utilizar intervalos ordenados pela primeira coluna;<br>- Usar, na primeira coluna, valores únicos e não nulos.</p>
                            </div>
                            <br>
                            <!-- Sub Sub Título -->
                            
                            <p class="SubSubTitulo">  Função PROCH( )</p>
                            <hr>
                            <p>Essa função localiza um valor na linha superior de uma tabela ou matriz de valores e retorna um valor na mesma coluna de uma linha especificada na tabela ou matriz.</p>
                            <p>Use<strong>PROCH</strong> quando seus valores de comparação estiverem localizados em uma linha ao longo da parte superior de uma tabela de dados e você quiser observar um número específico de linhas mais abaixo.</p>
                            <p>A sintaxe é a seguinte:</p>
                            <center><p><strong>=PROCH(valor_procurado;matriz_tabela;núm_índice_lin; procurar_intervalo])</strong></p></center>
                            <p>onde:</p>
                            
                            <!-- LISTA EM MOVIMENTO-->
                            <div>
                            <ul  class="none">
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Valor_procurado –</strong> É o valor a ser localizado na primeira linha da tabela. Valor_procurado pode ser um valor, uma referência ou uma sequência de caracteres de texto.</li><br>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Matriz_tabela – </strong> É uma tabela de informações, onde os dados devem ser procurados.</li>
                                </ul>
                            </div>
                            <p>Use uma referência para um intervalo ou um nome de intervalo.</p>

                            <!-- LISTA EM MOVIMENTO-->
                            <div>
                            <ul  class="none">
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"> – Os valores na primeira linha de matriz_tabela podem ser texto, números ou valores lógicos.</li><br>

                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"> – Se procurar_intervalo for VERDADEIRO, os valores na primeira linha de matriz_ tabela deverão ser colocados em ordem ascendente: ...-2, -1, 0, 1, 2,... , A-Z, FALSO, VERDADEIRO. Em caso contrário, PROCH pode não retornar o valor correto. Se procurar_ intervalo for FALSO, a matriz_tabela não precisará ser ordenada.</li><br>

                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"> – Textos em maiúsculas e minúsculas são equivalentes.</li>
                                    <br>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"> – Classifique os valores em ordem crescente, da esquerda para a direita. Para obter mais informações, consulte Classificar dados.</li><br>
                                </ul>
                            </div>

                            <!-- LISTA EM MOVIMENTO-->
                            <div>
                            <ul  class="none">
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Núm_índice_lin –</strong> – É o número da linha em matriz_tabela, da qual o valor correspondente deve ser retirado. Um núm_índice_lin equivalente a 1 retorna o valor da primeira linha na matriz_tabela, um núm_índice_lin equivalente a 2 retorna o valor da segunda linha na matriz_tabela e assim por diante. <br> Se núm_índice_lin for menor do que 1, PROCH retornará o valor de erro #VALOR!; se núm_índice_lin for maior do que o número de linhas na matriz_tabela, PROCH retornará o valor de erro #REF!.</li>
                                    <br>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Procurar_intervalo –</strong>  É um valor lógico que especifica se você quer que PROCH localize uma correspondência exata ou aproximada. Se VERDADEIRO (1) ou omitido, uma correspondência aproximada é retornada. Em outras palavras, se uma correspondência exata não for localizada, o valor maior mais próximo que seja menor que o valor_procurado será retornado. Se FALSO (0), PROCH encontrará uma correspondência exata.</li>
                                </ul>
                            </div>
                            <br>
                            <p>Se nenhuma correspondência for localizada, o valor de erro #N/D será retornado.</p>
                            <br>

                            <!-- Fique Atento -->

                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <div class="FiqueAtentoTexto">
                                    <!-- LISTA EM MOVIMENTO-->
                                    <div>
                                        <ul  class="none">
                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Se PROCH não localizar valor_procurado e procurar_intervalo for VERDADEIRO, PROCH usará o maior valor que é menor do que o valor_procurado;</li>
                                            <br>
                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="2.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Se o valor_procurado for menor do que o menor valor na primeira linha de matriz_ tabela, PROCH retornará o valor de erro #N/D;</li>
                                            <br>
                                            <li class="img-fluid wow fadeInLeft" data-wow-delay="2.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Se procurar_intervalo for FALSO e valor_procurado for texto, você poderá usar os caracteres curingas ponto de interrogação (?) e asterisco (*) em valor_procurado. Um ponto de interrogação coincide com qualquer caractere único; um asterisco coincide com qualquer sequência de caracteres. <br>
                                            Se você quiser localizar um ponto de interrogação ou asterisco real, digite um til (~) antes do caractere.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Atividade -->

                            <div class="AtividadeCaixa">
                                <p class="AtividadeTitulo"> Atividade</p>
                                <p class="AtividadeTexto">Que tal praticar? Tente resolver a “planilha 05” que está disponível dentro do material do curso, utilizando as fórmulas do PROCV e PROCH! <br>
                                <strong>Esta atividade não precisa ser entregue à escola.</strong></p>
                            </div>
                            <br>
                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Função Índice( ) + Função CORRESP( )</p>
                            <hr>
                            <p>Embora a função PROCV dê conta do recado na maioria dos casos, existem situações, em que ela sozinha não resolve o problema.</p>
                            <p>E é aí que entra a fórmula que combina a função ÍNDICE e CORRESP.</p>
                            <p>Vamos ver primeiro como elas funcionam separadamente.</p>
                            
                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo"> Índice</p>
                            <hr>
                            <p>Esta função funciona de maneira simples, o usuário indica a área, a linha e a coluna e a fórmula retorna o dado que está na posição indicada pelo usuário.</p>
                            <center><p><strong>Sintaxe: =ÍNDICE(matriz; núm_linha; [núm_coluna])</strong></p></center>
                            <p>Onde:</p>
                            <p class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"> <span style="color:red">matriz</span> → área onde estão os dados desejados.</p>

                            <p class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"> <span style="color:blue">núm_linha</span> → o número da linha onde está o dado desejado.</p>

                            <p class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"><span style="color:green">[núm_coluna]</span> → o número da coluna onde está o dado desejado.</p>
                            <br>
                            <p>Digamos que queiramos usar a função índice para encontrar a informação correspondente ao Brasil para o Dado 3, assim nossa função deve ser montada da seguinte maneira:</p>

                            <p class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"> <span style="color:red">matriz</span> → Toda tabela onde estão os dados dos países do Mercosul.</p>

                            <p class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"><span style="color:blue">matriz</span> → O número da linha que o Brasil está em relação à tabela de dados dos países.</p>

                            <p class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"><span style="color:green">[núm_coluna]</span> → O número da coluna onde está o Dado 3 em relação à tabela de dados dos países.</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 15</strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->
                            <br>
                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">Corresp( )</p>
                            <hr>
                            <p>Na tabela abaixo, queremos determinar em qual posição a Rússia aparece organizada nos dados.</p>
                            
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 16</strong></p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte :</strong> CEDIS</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Imagem 01 - End -->
                            <br>
                            <p class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"> <span style="color:red">valor_procurado</span> →  Rússia é pois, o dado que queremos definir a posição.</p>

                            <p class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"> <span style="color:blue">matriz_procurada</span> → A área onde aparece o dado Rússia.</p>

                            <p class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"><span style="color:green">[tipo_correspondência]</span> →  0 (zero) é pois, o valor que indica a função para a qual queremos uma correspondência exata, ou seja, queremos procurar exatamente pela posição de Rússia.</p>
                            <br>

                             <!-- Sub Sub Título -->
                             <p class="SubSubTitulo">Índice( )+Corresp( )</p>
                            <hr>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 17</strong></p>
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
                            <!-- Imagem 01 - End -->
                            <br>
                            <!-- Atividade -->

                            <div class="AtividadeCaixa">
                                <p class="AtividadeTitulo"> Atividade</p>
                                <p class="AtividadeTexto">Que tal praticar? Tente resolver a “planilha 06” que está disponível dentro do material  do curso, utilizando as fórmulas do ÍNDICE e CORRESP! <br>
                                <strong>Esta atividade não precisa ser entregue à escola.</strong></p>
                            </div>
                            <br>
                            <p><strong>Parabéns! <?php echo $NomeUsuario ?> Você finalizou o Topico 03 do modulo 02 do curso Calc Intermediário e Avançado.  Boa sorte no Próximo Modulo</strong></p>
                            
          
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
