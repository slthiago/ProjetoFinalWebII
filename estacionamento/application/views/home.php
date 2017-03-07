

<!DOCTYPE html>
<html lang="pt-br">
    <div>
        <div>
            <h1>Cadastro de Clientes</h1>
        </div>
        <?php if ($this->session->flashdata('error') == TRUE): ?>
            <p><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>
        <?php if ($this->session->flashdata('success') == TRUE): ?>
            <p><?php echo $this->session->flashdata('success'); ?></p>
        <?php endif; ?>

        <form method="post" action="<?= base_url('salvar') ?>" enctype="multipart/form-data">
            <div>
                <label>Nome:</label>
                <input type="text" name="Nome" value="<?= set_value('Nome') ?>" required/>
            </div>

            <div>
                <label>CPF:</label>
                <input type="text" name="cpf" value="<?= set_value('cpf') ?>" required/>
            </div>
            <div>
                <label>Telefone:</label>
                <input type="text" name="Telefone" value="<?= set_value('Telefone') ?>" required/>
            </div>
            <div>
                <label><em>Todos os campos são obrigatórios.</em></label>
                <input type="submit" value="Salvar"/>
            </div>
        </form>
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
