<section class="despesas-limite limite">
  <h1>Tela de Despesas</h1><br>
  <section class="tabela-container">
    <table class="tabela">
      <thead class="tabela-topo">
        <tr class="tabela-topo-tr">
          <th class="tabela-topo-th">CODIGO</th>
          <th class="tabela-topo-th">NOME</th>
          <th class="tabela-topo-th">PRECO</th>
          <th class="tabela-topo-th">TIPO</th>
          <th class="tabela-topo-th">COR</th>
        </tr>
      </thead>
      <tbody class="tabela-corpo">
        <tr class="tabela-corpo-tr"><td class="tabela-corpo-td">XXD</td><td class="tabela-corpo-td">TESTE</td><td class="tabela-corpo-td">$1.02</td><td class="tabela-corpo-td">-1.01</td><td class="tabela-corpo-td">+2.36%</td></tr>
        <tr class="tabela-corpo-tr"><td class="tabela-corpo-td">AAC</td><td class="tabela-corpo-td">TESTE</td><td class="tabela-corpo-td">$1.38</td><td class="tabela-corpo-td">+2.01</td><td class="tabela-corpo-td">-0.36%</td></tr>
        <tr class="tabela-corpo-tr"><td class="tabela-corpo-td">AAD</td><td class="tabela-corpo-td">TESTE</td><td class="tabela-corpo-td">$2.38</td><td class="tabela-corpo-td">-0.01</td><td class="tabela-corpo-td">-1.36%</td></tr>
        <tr class="tabela-corpo-tr"><td class="tabela-corpo-td">AAX</td><td class="tabela-corpo-td">TESTE</td><td class="tabela-corpo-td">$3.22</td><td class="tabela-corpo-td">+0.01</td><td class="tabela-corpo-td">+1.36%</td></tr>
        <tr class="tabela-corpo-tr"><td class="tabela-corpo-td">AAX</td><td class="tabela-corpo-td">TESTE</td><td class="tabela-corpo-td">$3.22</td><td class="tabela-corpo-td">+0.01</td><td class="tabela-corpo-td">+1.36%</td></tr>
        <tr class="tabela-corpo-tr"><td class="tabela-corpo-td">AAX</td><td class="tabela-corpo-td">TESTE</td><td class="tabela-corpo-td">$3.22</td><td class="tabela-corpo-td">+0.01</td><td class="tabela-corpo-td">+1.36%</td></tr>
        <tr class="tabela-corpo-tr"><td class="tabela-corpo-td">AAX</td><td class="tabela-corpo-td">TESTE</td><td class="tabela-corpo-td">$3.22</td><td class="tabela-corpo-td">+0.01</td><td class="tabela-corpo-td">+1.36%</td></tr>
        <?php

        if (!empty($_POST)) {
          $codigo = $_POST['codigo'];
          $nome = $_POST['nome'];
          $preco = $_POST['preco'];
          $tipo = $_POST['tipo'];
          $cor = $_POST['cor'];

          echo '<tr class="tabela-corpo-tr"><td class="tabela-corpo-td">' . $codigo . '</td><td class="tabela-corpo-td">' . $nome . '</td><td class="tabela-corpo-td">' . $preco . '</td><td class="tabela-corpo-td">' . $tipo . '</td><td class="tabela-corpo-td">' . $cor . '</td></tr>';
        }

        ?>
      </tbody>
    </table>
  </section>
  <section class="formularios">
    <form class="formularios-adicionar" action="despesas.php" method="post">
      <input type="text" name="codigo" value="" placeholder="Codigo">
      <input type="text" name="nome" value="" placeholder="Nome do produto">
      <input type="text" name="preco" value="" placeholder="Preco">
      <input type="text" name="tipo" value="" placeholder="Tipo">
      <input type="text" name="cor" value="" placeholder="Cor">
      <button type="submit">Adicionar</button>
    </form>
  </section>
</section>
