<?php require_once 'buscaUsuario.php'; ?>
<?php require_once 'exibeComentarios.php' ?>
<?php require_once 'header.php' ?>
<div class="conteudo-pagina">
	<section id="conteudo1">
		<h2>Estou desenvolvendo meu primeiro blog pessoal para discussões!</h2>
		<img src="img/trumbs-code.jpg">
		<p class="texto">Estou tentando implementar uma metodologia de desenvolvimento de sites que mistura blocos/tamplates, subdivisão de conteudo da página, a idéia de funcionamento em PDO com futuro CRUD de postagens.</p>
		<p class="texto">O que é PDO?</p>
		<p class="texto">O que significa CRUD?</p>
		<p class="texto">Como funciona um site em sub-blocos?</p>
		<p class="texto">Que ideia a mais você pode implementar?</p>
		<?php if (isset($_SESSION['id'])) { ?>
			<h3>Conte-nos o que achou..</h3>
			<form method="POST" action="insereComentario.php">
				<img src="img/img-perfil.jpg">
				<textarea name="texto" placeholder="Deixe seu comentário que ele é sim importânte!" maxlength="400"></textarea>
				<input type="submit" value="Publicar seu comentário" id="enviar-comentario">
			</form>
		<?php } else { ?>
			<h2>Comentários. </h2>
			<!-- 	<a href="cadastrar.php">Deseja se cadastrar?</a> -->
		<?php } ?>
		
		<?php if (count($dadoComentarios) > 0) 
		{			
			foreach ($dadoComentarios as $dc) 
				{ ?>
					<?php $data = new DateTime($dc['dia']);  ?>
					<div class="outros-comentarios">
						<img src="img/img-perfil.jpg">
						<h3><?= $dc['nome_usuario']; ?></h3>
						<h4><?= $dc['horario']; ?> - <?= $data->Format('d/m/Y'); ?> 
						<?php 
						if (isset($_SESSION['id'])) {
							if($_SESSION['id'] == $dc['fk_id_usuario']) { ?>
								<a href="excluiComentario.php?id_comentario=<?= $dc['id'] ?>">excluir</a></h4>
							<?php	} elseif (isset($_SESSION['master'])) { ?>
								<a href="excluiComentario.php?id_comentario=<?= $dc['id'] ?>">excluir</a></h4>
							<?php 	}
						} 
						?>
						<p><?= $dc['comentario']; ?></p>
					</div>
				<?php } 
			} else { ?>
				<center><h1>Ainda não existem comentários nesta postagem.</h1></center>
			<?php } ?>
		</section>

		<section id="conteudo2">
			<div>
				<img src="img/prototipagem.png">
				<p>É até engraçado quando pensamos a respeito do layout do nosso site. Geralmente usamos templates prontos e em casos raros criamos um do zero.</p>
			</div>
		</section>

		<section id="conteudo3">
			<div>
				<h4>Pensando sobre o site</h4>
				<p>A medida que ele é pensado, desenhado, prototipado, e feito testes de direcionamento de contepudo, tudo fica muito mais legal!</p>
			</div>
		</section>

	</div>
</body>
</html>
