<div class="col-md-12 h-100" style="position: relative;">

	<div class="row">

		<div class="col-md-8 p-2">
			<div class="grafo-toolbar">
				<!-- Slider -->
				<small class="text mr-2">VELOCIDADE: </small>
				<label class="sliderbar">
					<input type="range" min="1" max="100" value="50" class="slider" onchange="grafo.definirVelocidadeDaAnimacao(this.value)">
				</label>
				<!-- Switch Button -->
				<small class="text">DIRECIONADO: </small>
				<label id="switchbox-direcao" class="switchbox">
					<input type="checkbox" onclick="grafo.aplicarDirecaoDasArestas(this.checked);">
					<span class="slider round"></span>
				</label>
			</div>
            <!-- Grafo -->
			<div id="grafo" class="grafo-panel">
			</div>
		</div>

		<div class="col-md-4 p-2">
			<?php readfile($pastaApp . "$app/index.html"); ?>
		</div>

	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exportar-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Matriz ou Lista de Adjacência</h5>
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-matriz-adjacencia-tab" data-toggle="tab" href="#nav-matriz-adjacencia" role="tab">Matriz de Adjacência</a>
						<a class="nav-item nav-link" id="nav-lista-adjacencia-tab" data-toggle="tab" href="#nav-lista-adjacencia" role="tab">Lista de Adjacência</a>
					</div>
				</nav>
				<div class="tab-content">
					<div class="tab-pane fade show active" id="nav-matriz-adjacencia" role="tabpanel">
						<pre id="matriz-adjacencia-texto">



						</pre>
						<span style="display: inline-block; cursor: pointer" class="btn btn-primary" onclick="salvarElementoComoImagem('#matriz-adjacencia-texto', 'matriz')">Salvar como Imagem</span>
					</div>
					<div class="tab-pane fade" id="nav-lista-adjacencia" role="tabpanel">
						<pre id="lista-adjacencia-texto">



						</pre>
						<span style="display: inline-block; cursor: pointer" class="btn btn-primary" onclick="salvarElementoComoImagem('#lista-adjacencia-texto', 'lista')">Salvar como Imagem</span>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div>
