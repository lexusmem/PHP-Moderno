# PHP

local onde consta o arquivo index.php no xampp
C:\xampp\htdocs\PHP moderno

## Aprendendo PHP
&nbsp;

> Primeira Aula

PHP Hypertext Prepocessor é uma linguagem de back end, linguagem de script open source de uso geral.

Utilizada muito em API's web service e é uma linguagem de marcação e programação.

* Baseado em HTML
* Server Side
* Request/Response
* Interpretado
* Multiparadigma

> Segunda Aula

## Síntaxe e comandos básicos
&nbsp;
### Condicionais
* if
* else if
* else
* switch/case - é uma estrutura condicional que está presente em várias linguagens de programação. Ela recebe um valor como parâmetro e verifica se ele atende alguma das condições especificadas.

### Repetição
* while
* do while
* for
* foreach - é um laço de repetição especializada na iteração de Arrays. Ou seja, ele funciona como uma estrutura que está projetada para percorrer todos os elementos de uma Array (é na verdade um mapa ordenado. Um mapa é um tipo que relaciona valores a chaves. Este tipo é otimizado para várias usos diferentes: ele pode ser tratado como um array, uma lista (vetor), hashtable (que é uma implementação de mapa), dicionário, coleção, pilha, fila e provavelmente mais)

### Comparadores
* == - Se é igual
* === - Se é igual (mesmo Tipo)
* <
* '>
* <=
* '>=
* != - Diferente
* !== - ão idêntico	Verdadeiro de $a não é igual a $b, ou eles não são do mesmo tipo (introduzido no PHP4).

### Lógicos

* && - and
* II - or
* and - e
* or - ou
* xor - parecido com OR, porem será verdadeiro quando apenas um lado da comparação for verdadeiro, exemplo: (5>4 xor 5>4) = FALSE / (5>4 xor 5<4) = TRUE
* ! - negação, inverte o resultado.

> Introdução a Verbos HTTP p/ Formularios

### HTTP - Hipertext transfer Protocol
Protocolo para trafego de dados na web

### Request e Response

### Metodos/Verbos
Metodos ou Verbos HTTP definem qual a ação deve ser realizada.

> Manipulação de Formularios com PHP

### Metodo - $_GET

Quando utilizamos o GET, os parâmetros são passados no cabeçalho da requisição.
Por isso, podem ser vistos pela URI, como no caso do nosso formulário de login.
Esse verbo é o padrão para enviar dados quando submetemos um formulário HTTP.

### Metodo - $_POST
Ao contrário do GET, envia os parâmetros no corpo da requisição HTTP. Escondendo eles da URI.

> Aprendendo utilizar metodo de requisão e resposta na Web c/ PHP

> Implementando técnicas de validação de dados

Validação de dados inseridos no formularios.
