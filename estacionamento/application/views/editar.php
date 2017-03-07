<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
    <div>
        <h1>Editar Cliente</h1>
    </div>
    <?php if ($this->session->flashdata('error') == TRUE): ?>
        <p><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    <?php if ($this->session->flashdata('success') == TRUE): ?>
        <p><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

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
        <form method="post" action="<?= base_url('atualizar') ?>" enctype="multipart/form-data">
            <h1>Editar Cliente</h1>

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
                <input type="hidden" name="idcliente" value="<?= $cliente['idcliente'] ?>"/>
                <input type="submit" onclick="Salvar();" value="Salvar" />
            </p>
            <hr />

        </form>
        <script>
            function Salvar() {

                var nome = document.getElementById("nomeid");

                if (nome.value != "") {
                    alert('Cliente ' + nome.value + ' alterado com Sucesso');
                }
            }
        </script>
    </body>
</html>