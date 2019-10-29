

<h2> O que aconteceria se o objeto Dog estivesse em uma matriz Dog? </h2>
<p>Sabemos que podemos acessar as variáveis de instância e métodos de Dog usando o operador ponto, mas onde usá-lo?</p>

<p>Quando o objeto Dog estiver em uma matriz, não teremos uma variável nome real (como fido). Em vez disso usaremos a notação de matriz e apertamos o botão do controle remoto (operador ponto) do objeto de um índice (posição) específico da matriz:</p>
<div class="codigo-java">
<pre>
<p>Dog[] myDogs = new Dog[3];</p>
<p>myDogs[0] = new Dog();</p>
<p>muDogs[0] .name = "Fido";</p>
<p>myDogs[0].bark();</p>
</pre>
</div>
<br><br>