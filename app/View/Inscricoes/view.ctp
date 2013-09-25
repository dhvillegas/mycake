<h1>Inscrição<span>.Evento<sup>1.0</sup></span></h1>
			<span id="slogan2">local dos seus sonhos</span>



<?php


echo $this->Form->create('Inscricao', array('action' => 'inscrever'));
echo $this->Form->input('inscricoes.nome', array('label' => 'Nome'));
echo $this->Form->input('inscricoes.email', array('label' => 'E-mail'));
echo $this->Form->input('inscricoes.telefone', array('label' => 'Telefone'));
echo $this->Form->input('inscricoes.endereco', array('label' => 'Endereço'));
echo $this->Form->submit('Enviar');
echo $this->Form->end();


?>


