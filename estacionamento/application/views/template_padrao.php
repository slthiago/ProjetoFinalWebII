<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Minha aplicação</title>
    </head>
    <body>
        <div style="background: blue;">
            Cabeçalho
        </div>
        <div>
            <?php echo $contents; ?>
        </div>
        <div style="background: blue;">
            Rodapé
        </div>
    </body>
</html>


   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <body background="http://localhost/aulas/estacionamento/esta.jpg">

        <div id="tabs">
            <ul>
                <li><a href="#aba-1">Cadastro</a></li>
                <li><a href="#aba-2">Aba 2</a></li>
                <li><a href="#aba-3">Aba 3</a></li>
            </ul>
            <div id="aba-1">
                <p>    <?php

                    function teste() {
                        ?>
                    <div>
                        <p>
                            <?php echo "Foi digitado \"" . $_POST['texto'] . "\""; ?>
                        </p>
                    </div>
                    <?php
                }
                ?>	


                <div>
                    <form action="?a=ok" method="POST">
                        <input type="text" name="texto" />
                        <br />	
                        <input type="submit" value="Enviar..." />
                    </form>
                </div>
                <?php
                if (isset($_GET['a']) && $_GET['a'] == 'ok' && $_POST['texto'] != '') {
                    teste();
                    // $this->load->view('exemplo2');
                }
                ?></p>
            </div>
            <div id="aba-2">
                <?php
                    $dados = array(
                        'titulo' => 'Estacionamento SuperMax',
                        'texto' => 'Seu Carro Seguro',
                        'menu' => array(
                            0 => '<a href = "#">Home <a/>',
                            1 => '<a href = "#">Sobre <a/>',
                            2 => '<a href = "#">Serviço <a/>',
                            3 => '<a href = "#">Contrato <a/>',
                        ),
                        'seguimento' => $this->uri->segment(3),
                    );
                    $this->load->view("telaprincipal", $dados);
                    ?>
            </div>
            <div id="aba-3">
                <p>Conteudo da aba 3.</p>
            </div>
        </div>

        <script>
            $(function () {
                $("#tabs").tabs();
            });
        </script>

        <script language="javascript" type="text/javascript">
            function validar() {
                var nome = form1.nome.value;
                var endereco = form1.endereco.value;

                if (nome == "") {
                    alert('nome nulo');
                    form1.nome.focus();
                    return false;
                }
                if (endereco == "") {
                    alert('endereco nulo');
                    $("#aba-1").hide(); //Hide all content 
                    $('#aba-2').slideDown();

                    form1.endereco.focus();
                    return false;
                }
            }
        </script> 