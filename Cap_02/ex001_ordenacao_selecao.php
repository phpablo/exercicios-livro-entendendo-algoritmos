
<?php
// Função para encontrar o índice do menor valor em um array
function buscarMenor($array) {
  // Inicializa o menor valor com o primeiro elemento do array
  $menor = $array[0];
  // Inicializa o índice do menor valor com o índice 0
  $menorIndice = 0;

  // Percorre o array a partir do segundo elemento (índice 1)
  for ($i = 1; $i < count($array); $i++) {
    // Se encontrar um valor menor que o atual "menor"
    if ($array[$i] < $menor) {
      // Atualiza o menor valor
      $menor = $array[$i];
      // Atualiza o índice do menor valor
      $menorIndice = $i;
    }
  }
  return $menorIndice;
}

// Função para ordenar o array usando ordenação por seleção
function ordenacaoPorSelecao($array) {

  // Inicializa um novo array para armazenar os elementos em ordem crescente
  $novoArray = [];

  // Enquanto houver elementos no array original
  while (count($array) > 0) {
    $menorIndice = buscarMenor($array);

    // Remove o menor elemento do array original e adiciona ao novo array
    $novoArray[] = array_splice($array, $menorIndice, 1)[0];
  }

  return $novoArray;
}

$numeros = [9, 2, 7, 6, 3];
$resultado = ordenacaoPorSelecao($numeros);
print_r($resultado);
?>

