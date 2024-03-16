<!-- Funções Aritméticas do PHP
 -->

 <!-- 
    -> abs(): Retorna o valor absoluto de um número.

    -> base_convert(): Converte um número entre diferentes bases numéricas.

    -> ceil(): Arredonda um número para cima para o inteiro mais próximo.

    -> floor(): Arredonda um número para baixo para o inteiro mais próximo.

    -> round(): Arredonda um número para o inteiro mais próximo, com regras de arredondamento padrão.

    -> hypot(): Retorna a hipotenusa de um triângulo com lados de comprimentos fornecidos.

    -> intdiv(): Retorna a parte inteira da divisão entre dois números.

    -> min(): Retorna o menor valor entre dois ou mais números.

    -> max(): Retorna o maior valor entre dois ou mais números.

    -> pi(): Retorna o valor de pi

    -> pow(): Utilizado para operações com potenciação

    -> sin(): utilizado para calcular o seno

    -> cos(): Utilizado para calcular o cosseno

    -> tan(): Utilizado para calcular a tangente

    -> sqrt(): Utilizado para calcular a raiz quadrada de um número
  -->

<?php 
    $valor_absoluto = abs(-500);
    echo "A resposta é: $valor_absoluto <br/>";

    $conversor_base = base_convert(254, 10, 2);
    echo "A resposta é: $conversor_base <br/>";

    $divisao_int = intdiv(113, 2);
    echo "A resposta é: $divisao_int <br/>";

    $valor_minimo = min(10, 8, 25, 19, 90);
    echo "A resposta é: $valor_minimo <br/>";

    $valor_maximo = max(10, 8, 25, 19, 90);
    echo "A resposta é: $valor_maximo <br/>";

    $r_quadrada = sqrt(81);
    echo "A resposta é: $r_quadrada"
?>