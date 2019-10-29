<h2>Você não pode desejar uma quantidade grande em uma xícara pequena.</h2>

<p>Bem, certo, você pode, mas vai perder uma parte. Você terá o que chamamos de derramamento. O compilador tentará ajudar a impedir isso se conseguir perceber que algo em seu código não caberá no contêiner (variável/xícara) que você está usando. </p>

<p> Por exemplo, você não pode despejar muitos inteiros em um contêiner de tamanho bye, como descrito a seguir: </p>
<div class="codigo-java">
<pre>
int x = 24;
byte = x;
//não funcionará!!
</pre>
</div>
<p>Por que isso não funcionou, você poderia perguntar? Afinal, o valor de x é 24, e 24 definitivamente é um valor suficientemente baixo para caber em um tipo byte. Você sabe disso, é nós também, mas tudo que importa ao compilador é que houve a tentativa de se inserir algo grande em um recipiente pequeno, e há a possibilidade de derramamento. Não espere que o compilador saiba qual é o valor de x, mesmo se por acaso você puder vê-lo literalmente em seu código.</p>
