

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
    <!--   <link href="ContatoEstilo.css" rel="stylesheet" media="all" />
   <script src="JavaScript1.js"></script>-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
            <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                        <script src="js/jquery.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>

                        <div id="main" class="container-fluid">

                            <?php if ($this->session->flashdata('error') == TRUE): ?>
                                <p><?php echo $this->session->flashdata('error'); ?></p>
                            <?php endif; ?>
                            <?php if ($this->session->flashdata('success') == TRUE): ?>
                                <p><?php echo $this->session->flashdata('success'); ?></p>
                            <?php endif; ?>

                            </head>
                            <style>

                                body {
                                    padding: 0;
                                    margin: 0;
                                }

                                form {
                                    font-family: Verdana,Tahoma,sans-serif;
                                    font-size: 15px;
                                    background-color: #556B2F;
                                    max-width: 500px;
                                    opacity:0.8; 
                                }

                                h1 {
                                    margin-bottom: 20px;
                                    margin-left: 20px;
                                    color: #66FFFF;
                                    text-shadow: 5px 5px 5px black;
                                }

                                input, textarea {
                                    width: 200px;
                                    padding: 10px;
                                    color: black;
                                    margin-left: 20px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border: 1px solid;
                                }

                                input:hover, textarea:hover, input:focus, textarea:focus {
                                    border-color: #000066;
                                    box-shadow: 5px 0px 9px #FFFF00;
                                    background-color: #66FFFF;
                                    color: black;
                                    font-weight: bold;
                                }

                                .submit input {
                                    background-color: #66FFFF;
                                    height: 40px;
                                    width: 100px;
                                    font-weight: bold;
                                    border-radius: 5px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border: 1px solid;
                                    color: black;
                                }

                                textarea {
                                    width: 400px;
                                    height: 120px;
                                    line-height: 20px;
                                    max-width: 400px;
                                }

                                form label {
                                    margin-left: 20px;
                                    color: #FFFFFF;
                                    font-weight: bold;
                                }
                            </style>
                            <body background="http://localhost/ProjetoFinalWebII/estacionamento/esta.jpg">
                                <form  name="meu_form" method="post" action="<?= base_url('salvar') ?>" enctype="multipart/form-data">
                                    <h1>Cadastro Cliente</h1>

                                    <p class="nome">
                                        <label for="nome">Nome</label>
                                        <input type="text" id="nomeid" placeholder="Nome"  value="<?= set_value('Nome') ?>"name="Nome" required/>

                                    </p>
                                    <p>
                                        <label for="cpf">CPF</label>
                                        <input type="text" id="cpf" value="<?= set_value('cpf') ?>" name="cpf" required/>

                                    </p>
                                    <p class="Telefone">
                                        <label for="fone">Telefone</label>
                                        <input type="text" id="foneid" placeholder="(xx)xx-xx-xx-xx" name="Telefone" value="<?= set_value('Telefone') ?>" required />


                                    </p>

                                    <label><em>Todos os campos são obrigatórios.</em></label>
                                    <p class="submit">
                                        <input type="submit" onclick="Enviar();" value="Enviar" />
                                    </p>
                                    <hr />
                                </form>
                                <script>
                                    function Enviar() {

                                        var nome = document.getElementById("nomeid");

                                        if (nome.value != "") {
                                            alert('Cliente ' + nome.value + ' salvo com Sucesso');
                                        }
                                    }
                                </script>
                            </body>


                            <div>
                                <table>
                                    <caption>Clientes</caption>
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>Telefone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($cliente == FALSE): ?>
                                            <tr><td colspan="2">Nenhum cliente encontrado</td></tr>
                                        <?php else: ?>
                                            <?php foreach ($cliente as $row): ?>
                                                <tr>
                                                    <td><?= $row['Nome'] ?></td>
                                                    <td><?= $row['cpf'] ?></td>
                                                    <td><?= $row['Telefone'] ?></td>
                                                    <td><a href="<?= $row['editar_url'] ?>">[Editar]</a> <a href="<?= $row['excluir_url'] ?>">[Excluir]</a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        </html>
