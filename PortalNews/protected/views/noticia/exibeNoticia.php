<div>
	<h3>
		<?php echo $noticia['titulo']; ?>
	</h3>
</div>
<div>
	<p>
		<?php echo $noticia['conteudo']; ?>
	</p>
	<small>
		Classificado como: 
		<?php echo $noticia->idCategoria0['nome']; ?>
	</small>	
</div>
<div align="right">
	<small>
		Postado em: 
		<?php echo $noticia['data']; ?>
	</small>
</div>