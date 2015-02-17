<?php for ($i=0; $i < count($noticias); $i++):?>
<div>
	<h3>
		<?php echo $noticias[$i]['titulo']; ?>
	</h3>
</div>
<div>
	<p>
		<?php echo $noticias[$i]['conteudo']; ?>
	</p>
	<small>
		Classificado como: 
		<?php echo $noticias[$i]->idCategoria0['nome']; ?>
	</small>
</div>
<div align="right">
	<small>
		Postado em:
		<?php echo $noticias[$i]['data']; ?>
	</small>
</div>
<?php endfor; ?>