
<h2>1. Procurei o que as quatro classes tinham em comum</h2>
<br>
<div class="codigo-java">
<pre>
Quadrado
rotate()
playSound()

Circulo
rotate()
playSound()

Triangulo
rotate()
playSound()

Amoeba
rotate()
playSound()
</pre>
</div>
<br>
<h2>2. Eles são formas e todas giram e reproduzem som. Portanto, extrai os recursos \comuns e os insere em uma nova classe chamada Shape.</h2>
<br>
<div class="codigo-java">
<pre>
Shape
rotate()
playSound()
</pre>
</div>
<br>
<h2>3. Em seguida, vinculei as outras quatro classes de forma à nova classe Shape, em um relacionamento chamado herança.</h2>
<br>
<div class="codigo-java">
<pre>
Shape
rotate()
playSound()
</pre>
</div>
<br>
<p>Você pode ler isso como "Quadrado herda de Shape", "Circulo herda de Shape" e assim por diante. Remove rotate() e playSound() das outras formas, portanto, agora há apenas uma cópia a manter.</p>

<p>Diz-se que a classe Shape é a superclasse das outras quatro classes. As outras quatro são as subclasses de Shape. As subclasses herdam os métodos da superclasse. EM outras palavras, se a classe Shape tiver uma funcionalidade, então, automaticamente, as subclasses terão essa mesma funcionalidade.</p>