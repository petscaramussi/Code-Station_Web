
<h2>Testes booleanos simples</h2>
<p>Você pode criar um teste booleano simples para verificar o valor de uma variável, usando um operador de comparação como:</p>

<p>< (menor que)</p>
<p>> (maior que)</p>
<p>== (igualdade) (sim, são dois sinais de igualdade)</p>
<p>Observe a diferença entre o operador de atribuição (apenas um sinal de igualdade) e o operador igual a (dois sinais de igualdade). Muitos programadores digitam acidentalmente = quando querem dizer ==. (Mas não você.)</p>
<div class="codigo-java">
<pre>
int x = 4 // atribui 4 a x

while (x > 3) {

// o codigo do loop será executado porque
// x é maior que 3

x = x -1; // ou ficaríamos eternamente no loop
}
<br>
int z = 27

while (z == 27) {

// o codigo do loop não será executado porque
// z não é igual a 17
}
</pre>
</div>