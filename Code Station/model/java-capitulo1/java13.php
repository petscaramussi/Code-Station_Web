
<h2>Não existem
Perguntas Idiotas</h2>
<br>
<h3>P: Por que temos que inserir tudo em uma classe?</h3>

<p>R: O Java é uma linguagem orientada a objetos (OO). Não é como antigamente, quando tínhamos compiladores antiquados e criamos um arquivo-fonte monolítico com uma pilha de procedimentos. No Capítulo 2, você aprenderá que uma classe consiste no projeto de um objeto e que quase tudo em Java é um objeto.</p>

<h3>P: Tenho que inserir um método main em toda classe que criar?</h3>

<p>R: Não. Um programa em Java pode usar várias classes (até mesmo centenas), mas você pode ter só uma com um método main - que fará o programa começar a ser executado. Você pode criar classes de teste, no entanto, que tenham métodos main para testar suas outras classes.</p>

<h3>P: Em minha outra linguagem, posso fazer um teste booleano com um tipo inteiro. Em Java, posso dizer algo como:</h3>
<br>
<div class="codigo-java">
<pre>
int x = 1;

while (x){ 
}
</pre>
</div>
<p>R: Não. Um booleano e um inteiro não são tipos compatíveis em Java. Como o resultado de um teste condicional deve ser um booleano, a única variável que voc~e pode testar diretamente (sem usar um operador de comparação) é um booleano. Por exemplo, você pode dizer:</p>

<div class="codigo-java">
<pre>
boolean eQuente = true;

while(eQuente) { 
}
</pre>
</div>