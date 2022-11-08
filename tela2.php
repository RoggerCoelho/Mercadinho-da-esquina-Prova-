<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tela 2</title>
  </head>
  <body>
    <h1>Tela 2</h1>
    <form action="tela3.php" method="post">
      <?php
      include 'biblioteca_produtos.php';
        $quantidade = $_POST["quantidade"];
        echo "<input type='hidden' name='quantidade' value='$quantidade'>"; 
        for ($i=0; $i < $quantidade; $i++) {
          echo '<label for="produto'.$i.'">Produto: '.'</label><select name="produto'.$i.'">';
          foreach ($produtos as $key => $value) {
            echo '<option value="'.$value["nome"].'">'.$value["nome"].'</option>';
          }
          echo '</select><br>';
          echo '<label for="quantidade'.$i.'">Quantidade: '.'</label><input type="number" name="quantidade'.$i.'" value=""><hr>';
        }
      ?>
      

      <button type="submit">Enviar</button>
      
    </form>
    <a href="tela1.php">Cancelar Compra</a>
  </body>
</html>
