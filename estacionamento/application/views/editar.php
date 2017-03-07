
<div>
	<h1>Editar Cliente</h1>
</div>
<?php if ($this->session->flashdata('error') == TRUE): ?>
	<p><?php echo $this->session->flashdata('error'); ?></p>
<?php endif; ?>
<?php if ($this->session->flashdata('success') == TRUE): ?>
	<p><?php echo $this->session->flashdata('success'); ?></p>
<?php endif; ?>

<form method="post" action="<?=base_url('atualizar')?>" enctype="multipart/form-data">
		<div>
			<label>Nome:</label>
			<input type="text" name="Nome" value="<?=$cliente['Nome']?>" required/>
		</div>
		<div>
			<label>CPF:</label>
			<input type="text" name="cpf" value="<?=$cliente['cpf']?>" required/>
		</div>
                <div>
			<label>Telefone:</label>
			<input type="text" name="Telefone" value="<?=$cliente['Telefone']?>" required/>
		</div>
    
	<div>
		<label><em>Todos os campos são obrigatórios.</em></label>
		<input type="hidden" name="idcliente" value="<?=$cliente['idcliente']?>"/>
		<input type="submit" value="Salvar" />
	</div>
</form>
