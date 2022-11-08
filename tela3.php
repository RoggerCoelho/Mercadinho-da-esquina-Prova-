<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tela 3</title>
  </head>
  <body>
    <h1>Tela 3</h1>
    <?php
    include 'biblioteca_produtos.php';
      $quantidade = $_POST["quantidade"];
      $total = 0;
      $bebida = 0;
      $hortfruti = 0;
      $carne = 0;
      for ($i=0; $i < $quantidade; $i++) {
        $nome = $_POST["produto".$i];
        $quant = $_POST["quantidade".$i];
        foreach ($produtos as $key => $value) {
          if($value["nome"] == $nome){
            $preco = $value["preco"];
            $categoria = $value["categoria"];
          }
        }
        $total = $total + ($preco * $quant);
        if($categoria == "bebida"){
          $bebida = $bebida + ($preco * $quant);
        }else if($categoria == "hortfruti"){
          $hortfruti = $hortfruti + ($preco * $quant);
        }else if($categoria == "carne"){
          $carne = $carne + ($preco * $quant);
        }
        echo "Produto: ".$nome."<br>";
        echo "Quantidade: ".$quant."<br>";
        echo "Valor: R$".number_format($preco,2,",",".")."<br>";
        echo "-------------------------------<br>";
      }
      echo "<br>Valor total a pagar: R$".number_format($total,2,",",".")."<br>";
      echo "Valor total gasto com bebidas: R$".number_format($bebida,2,",",".")."<br>";
      echo "Valor total gasto com hortfrutis: R$".number_format($hortfruti,2,",",".")."<br>";
      echo "Valor total gasto com carnes: R$".number_format($carne,2,",",".")."<br>";
    ?>

    <a href="tela1.php">Realizar uma nova compra</a>
  </body>
</html>