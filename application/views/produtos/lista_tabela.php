<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Lista de Produtos</title>
  </head>
  <body>
    <h1>Produtos</h1>

    <table>
      <thead>
        <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Preço</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($produtos as $p) {
            echo "<tr>".
            "<td>".$p->codigo."</td>".
            "<td>".$p->nome."</td>".
            "<td>".$p->preco."</td>".
            "</tr>";
          }
        ?>
      </tbody>
    </table>

  </body>
</html>
