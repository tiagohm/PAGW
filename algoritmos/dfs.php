<div class="row">
  <div class="col-md-12">

    <h2>Busca em Profundidade (DFS, Deep-First Search)</h2>

    <p class="text-center">
      Mussum Ipsum, cacilds vidis litro abertis. Interagi no mé, cursus quis, vehicula ac nisi. Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo! Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi.
      A ordem dos tratores não altera o pão duris.
    </p>
  </div>
</div>

<div class="row">
  <div class="col-md-12 mb-5">

    <!-- Card Narrower -->
    <div class="card card-cascade narrower" style="height: 95vh">

      <!-- Card content -->
      <div class="card-body card-body-cascade">
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-outline-primary form-check-label active" onclick="operacao = 0;">
        <input class="form-check-input" type="radio" name="acao" id="acao-selecionar" autocomplete="off" checked><i class="fa fa-mouse-pointer"></i> Selecionar
    </label>
          <label class="btn btn-outline-success form-check-label" onclick="operacao = 1;">
        <input class="form-check-input" type="radio" name="acao" id="acao-adicionar" autocomplete="off"><i class="fa fa-plus"></i> Adicionar
    </label>
          <label class="btn btn-outline-amber form-check-label" onclick="operacao = 2;">
        <input class="form-check-input" type="radio" name="acao" id="acao-conectar" autocomplete="off"><i class="fa fa-code-fork"></i> Conectar
    </label>
          <label class="btn btn-outline-red form-check-label" onclick="operacao = 3;">
        <input class="form-check-input" type="radio" name="acao" id="acao-excluir" autocomplete="off"><i class="fa fa-trash"></i> Excluir
    </label>
        </div>
      </div>


      <!-- Card image -->
      <div class="view view-cascade overlay" style="height: 100%">
        <div id="grafo" style="background: #FAFAFA; width: 100%; height: 100%"> </div>
      </div>

    </div>
  </div>
</div>

<script>
  var operacao = 0; //1 = adicionar, 2 = conectar, 3 = remover.
  var grafo = new Dfs('grafo');
  var quantidadeDeVertices = 0;

  grafo.on('vertice', (id, params) => {
    //Excluir vertice.
    if (operacao === 3) {
      grafo.removerVerticeSelecionado();
    }
  });
  grafo.on('aresta', (id, params) => {
    //Excluir aresta.
    if (operacao === 3) {
      grafo.removerArestaSelecionada();
    }
  });
  grafo.on('espacovazio', (params) => {
    //Novo vértice.
    if (operacao === 1) {
      grafo.novoVertice({
        label: `${quantidadeDeVertices++}`,
        x: params.pointer.canvas.x,
        y: params.pointer.canvas.y
      });
    }
  });
  grafo.on('novaaresta', (from, to) => {
    //Ligar vértices.
    if (operacao === 2) {
      console.log('nova aresta de ' + from + ' a ' + to);
      grafo.novaAresta({
        from: from,
        to: to
      });
    }
  });
  grafo.gerar(3);
  grafo.plotar();
</script>
</script>