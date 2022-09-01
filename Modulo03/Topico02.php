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
                                            
                            <h2 class="Titulo">Macros</h2>
                            <hr>
                            <p><strong>Objetivo:</strong> Introduzir o desenvolvimento de rotinas através da criação de macros.</p> 

                            <p>Uma macro é uma sequência de comandos e funções armazenadas em um módulo do LibreOffice Basic e pode ser executada sempre que você precisar executar a tarefa. A grande vantagem é que, caso você execute uma tarefa, várias vezes no Calc, você pode automatizá-la com uma macro.</p>

                            <p>A seguir, apresentamos alguns níveis de proteção do Calc:</p>

                            <!-- Sub Título -->

                            <p class="SubTitulo">Programação de Macros e de Funções</p>
                            <hr>
                            <p>Antes de começarmos a ver funções propriamente ditas, veremos um pouco de como criarmos nossas próprias macros. Vamos começar com uma bem simples, que mostra ao usuário uma caixa de diálogo, solicitando o nome do usuário. Após o mesmo preencher e clicar em OK, será mostrada uma mensagem de boas-vindas personalizada com o nome do usuário.</p>
                            <p>Para começar, abra a janela de gerenciamento de macros, que está em Ferramentas – Macros – Organizar Macros – <strong>LibreOffice Basic.</strong> </p>
                            <p>Em seguida, dê um nome para a sua macro e selecione “Novo”.</p>
                            <br>
                            
                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                    <img class="img-fluid wow fadeInRight" data-wow-delay="0.7s" class="img-fluid"   src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                    <p class="TituloFigura"><strong>Figura 09:</strong> Criação de nova Macro </p>
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
                                        <p class="FonteFigura"><strong>Fonte:</strong> Tecmundo</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 03 - End -->
                            <p>Aparecerá a janela de edição do Basic. Digite o código abaixo:</p>
                            
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 10:</strong> Código para Macro</p>
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
                            <p>Feito isso, salve as alterações e execute a macro, clicando no botão “Executar o Basic” ou tecla “F5”.</p>
                            
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                    <img class="img-fluid wow fadeInLeft" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 11:</strong>  Executar o Basic</p>
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
                            <p>Será então, mostrada a janela abaixo, solicitando a digitação de nome:</p>

                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12" >
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 12:</strong> Macro em Execução - Parte 1</p>
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
                            <br>
                            <p>Após digitar seu nome e clicar em “OK”, aparecerá a caixa de mensagem abaixo, com o nome que foi digitado:</p>
                            
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura13.png" data-bs-toggle="modal" data-bs-target="#Imagem13" >
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura13.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 13:</strong> Macro em execução – parte 2</p>
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

                            <p>Vamos analisar o que cada parte do código faz:</p>
                            <br>
                            <!-- Accordion Fase 01 - Begin  -->

                            <div class="accordion accordion-flush" id="AccordionFase01">

                                <!-- Sub Título -->

                                <p class="SubTitulo">Clique nos Títulos Abaixo para mais Informações</p>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Sub SeuNome</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Essa linha é o “cabeçalho” da macro, onde inicia o código que será executado. Quando foi clicado em “Novo”, nessa linha aparece escrito o nome que você deu ao seu macro.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Rem</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                            Linhas que começam com essa palavra são apenas comentários, que explicam o que será feito ou qualquer outra observação que seja necessária fazer. <br> Não são consideradas pelo Basic na hora de executar.
                                            </p>
                                        </div>
                                    </div>
                                </div> 

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Dim Nome as String </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Essa linha declara a variável Nome, com tipo de dados String (texto). <br> Cada variável que for declarada deve ser colocada em uma linha separada;</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item04">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefuor" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Nome = InputBox("Digite o seu nome:", "Preencha")</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefuor" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Essa linha atribui o valor digitado na caixa de texto (InputBox) à variável Nome. Os valores entre parênteses se referem aos valores que serão informados ao usuário.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item05">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>MsgBox ("Seja bem-vindo(a), " &Nome &"!", "Boas-vindas")</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>O comando MsgBox faz aparecer apenas uma mensagem, informando o texto que foi colocado entre parênteses. Caso seja necessário inserir valor de variáveis, é usado o símbolo & e depois o nome da variável.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item06">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>End Sub</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Essa indica o fim do código da macro, que foi aberta em Sub SeuNome.</p>
                                            <!-- Saiba Mais -->

                                            <div class="SaibaMaisCaixa">
                                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                                <p class="SaibaMaisTexto">Esse é apenas um exemplo de como configurar um macro via programação no Calc. Para mais exemplos e informações, acesse o site oficial do LibreOffice Basic: <a href="http://help.libreoffice.org" target="_blank" >http://help.libreoffice.org /Basic/Basic_Help/pt</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                            <br><br>

                            <!-- FIM Accordion Fase 01 - Begin  -->
                            <p>Agora, veremos como criar uma função que será utilizada no Calc através do Basic.</p>
                            <p>Além da macro, que vimos anteriormente, é possível criar também funções para uso próprio no Calc. Após ela estar programada, é possível utilizá-la da mesma maneira que se usam funções ‘nativas’ do Calc, ou seja, usando-se o sinal de igual, o nome da função e os parâmetros desejados.</p>
                            <p>A diferença é que, nesse caso, os parâmetros serão definidos por nós.</p>
                            <p>Antes de começar, vamos fazer o seguinte: uma planilha no qual digitaremos uma data e desejaremos saber em que dia da semana (por extenso) essa data caiu. Apesar de trabalhar com funções de datas, o Calc não possui nenhuma que faça isso diretamente. O que se pode fazer é utilizar a função DIA.DA.SEMANA, que retornará um número de 0 a 6 ou de 1 a 7, dependendo de como for configurada a função. Usaremos para esse exemplo a contagem padrão, que atribui valor 1 para domingo, 2 para segunda-feira, 3 para terça-feira e assim por diante. A planilha deverá ficar mais ou menos assim:</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura14.png" data-bs-toggle="modal" data-bs-target="#Imagem14" >
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura14.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 14:</strong> Exemplo de Tabela para Demonstração de Funções</p>
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
                            </div><br>
                            <!-- Imagem 01 - End -->
                            <br>
                            <p>A função em B2 ficará =DIA.DA.SEMANA(A2), e retornou 7 porque a data em A2 caiu num sábado, e assim sucessivamente.</p>
                            <p>Feito isso, chegou a hora de criar a função. Para isso, iremos acessar o editor de macros, clicando em Ferramentas – Macros – Organizar Macros – LibreOffice Basic e, depois, vamos clicar em “Editar Macros”.</p>
                            <p>Vamos criar uma função que denominaremos DiaPorExtenso, e que contém apenas um parâmetro, que será o valor que resultou da função DIA.DA.SEMANA. Todos os parâmetros devem ser declarados no cabeçalho da função, ao lado do nome da mesma. O código para ess e exemplo em específico ficou assim:</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15" >
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 15: </strong> Exemplo de código criado para uma função personalizada</p>
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
                            </div><br>

                            <!-- Imagem 01 - End -->

                            <p>O código da imagem 15 recebe o valor da célula (Numero) e o compara com valores de 1 a 7 (Select Case Numero indica que o valor a ser comparado é o da variável Numero). Caso o valor de Numero seja um valor que não esteja entre 1 e 7, retornará a mensagem “Dia Inválido” (Case Else). Após isso, devemos fechar a função com End Function.</p>
                            <p>Vamos testar agora na planilha. Vamos colocar o cursor em C2 e digitar =DIAPOREXTENSO(B2). Depois podemos copiar a função para as linhas seguintes na mesma coluna. O resultado deverá ficar assim:</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16" >
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 16:</strong> Exemplo de utilização de função criada pelo usuário</p>
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
                            </div><br>
                            <!-- Imagem 01 - End -->

                            <!-- Importante -->

                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <p class="ImportanteTexto">As funções personalizadas não aparecem na lista do assistente de funções, pelo fato de terem sido criadas pelo usuário. Somente aparecem nesta lista as funções ‘nativas’, ou seja, aquelas que foram criadas junto com o Calc.</p>
                            </div>
                            <br>
                            <p>Para finalizar, vamos ver mais um exemplo de utilização de funções personalizadas no Calc.</p>
                            <p>Suponhamos que você deseja criar uma planilha para o cálculo do IMC (Índice de Massa Corpórea, medida utilizada calcular o peso ideal, e que é calculado dividindo-se o peso pela altura ao quadrado). <br> Vamos primeiramente digitar os valores necessários na planilha:</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17" >
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 17:</strong> Função para cálculo do IMC</p>
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
                            </div><br>
                            <!-- Imagem 01 - End -->
                            <p>Após isso, iremos ao editor do Basic e digitaremos o código abaixo:</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18" >
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 18:</strong> Função do IMC no BASIC</p>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Fonte :</strong> Tecmundo</p>
                                        </div>
                                    </div>

                                </div>
                            </div><br>
                            <!-- Imagem 01 - End -->

                            <p>A função da imagem 18 é uma função bem simples, sendo que seu cálculo ocupou apenas uma linha. Isso ocorreu porque não foi necessário escolher entre vários valores como no exemplo anterior. Apenas fez o cálculo e retornou o valor desse cálculo. Lembre-se de salvar as alterações feitas no editor do Basic.</p>
                            <br>
                            <!-- Importante -->

                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <p class="ImportanteTexto">Nos casos em que a função tiver mais de um argumento, como é o nosso caso (peso e altura), eles devem ser colocados na MESMA ORDEM em que forem usados na função.</p>
                            </div>
                            <br>
                            <p>Feito isso, volte na planilha e digite =INDICEMASSA(b1;b2). O resultado ficará assim:</p>
                            <br>
                            <!-- Titulo Figura -->

                            <div class="text-center">
                                <a href="imagens/Figura19.png" data-bs-toggle="modal" data-bs-target="#Imagem19" >
                                    <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" src="imagens/Figura19.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura"><strong>Figura 19:</strong> Função IMC após preenchida</p>
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
                            </div><br>
                            <!-- Imagem 01 - End -->

                            <P>Caso você tenha colocado primeiro a altura e depois o peso, basta inverter a ordem dos endereços do que está na função do exemplo que também dará certo. Experimente alterar os valores para verificar o funcionamento da função.</P>

                            <P>Esta aula foi apenas uma breve introdução ao funcionamento das macros e do editor Basic do LibreOffice. Não é possível explicar tudo, pois o material é muito extenso e ficaria inviável colocar aqui. No entanto, como já mencionamos anteriormente, no site oficial do LibreOffice, existem muito mais informações disponíveis sobre este assunto.</P>

                            <P>Estamos chegando ao fim deste curso de LibreOffice Calc Intermediário/Avançado. Esperamos que tenha sido útil e você possa utilizar os conhecimentos aqui adquiridos a seu favor. Até logo!!</P>
                            <br>
                            <p><strong>Parabéns! <?php echo $NomeUsuario ?> Você finalizou o Topico 02 do modulo 03 do curso Calc Intermediário e Avançado. Não esqueça de fazer a Avaliação.  Boa sorte e até o próximo Curso!</strong></p>

                  

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
