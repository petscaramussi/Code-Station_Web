
<h2> Controle seu objeto Dog </h2>
<p>(Com uma variável de referência)</p>

<div class="codigo-java">
<pre>
Dog fido = new Dog();
<br>
fido.name = "Fido";
</pre>
</div>
<p>Criamos um objeto Dog e usamos o operador ponto na variável de referência fido para acessar a variável nome*.</p>

<p>Podemos usa a referência fido para fazer o cão latir(), comer(), ou PerseguirGatos().</p>
<div class="codigo-java">
<pre>
fido.bark();
<br>
fido.chaseCat();
</pre>
</div>