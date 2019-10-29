
<h2> O caso das referências roubadas </h2>

<p>Era uma noite escura e chuvosa. Tawny caminhava para a cela dos programadores como se fosse proprietária do local.
Ela sabia que todos os programadores ainda estariam trabalhando e queria ajuda. Precisava de um novo
método adicionado à classe principal, que deveria ser carregado no novo celular altamente secreto e habilitado
com Java do cliente. Espaço na pilha de memória do celular estava tão apertado quanto o vestido de Tawny, 
e todos sabiam disso.</p>
<p>O murmúrio normalmente rouco na cela silenciou quando Tawny se encaminhou para o quadro branco, ela desenhou
uma visão resumida da funcionalidade do novo método e lentamente examinou a sala. "bem meninos, hora de trabalhar",
murmurou. "quem criar uma versão para esse método que use a memória mais eficiente irá comigo à festa de 
lançamento do cliente em Maui amanhã... para me ajudar a instalar o novo software."</p>

<p>Na manhã seguinte, Tawny entrou na cela usando seu curto vestido Aloha. "senhores", ela sorriu, 
"o avião parte em algumas horas, mostrem-me o que vocês têm!" Bob foi o primeiro: quando ele começou a desenhar seu projeto no quadro branco Tawny disse: </p>
<p>"vamos direito ao ponto Bob,mostre-me como você manipulou a atualização da lista de objetos de contato."
Bob escreveu rapidamente um fragmento de código no quadro:</p>
<div class="codigo-java">
<pre>
Contact [] ca = new Contact[10];
while ( x < 10 ) {
	ca[x] = new Contact();
	x = x + 1;
}
</pre>
</div>
<p>"Tawny, sei que temos pouca memória, mas suas especificações diziam que tínhamos que ser capazes de acessar
informações especificar de todos os dez contatos permitidos, e esse foi o melhor esquema que pude criar",
disse Bob. </p>
<p>Kent foi o próximo, já imaginando coquetéis de coco com Tawny. "Bob", ele disse, "sua solução é um pouco complicada
não acha?" Kent sorriu, "dê uma olhada neste bebezinho"</p>


<div class="codigo-java">
<pre>
Contact ref;
while ( x < 10 ) {
	ref = new Contact();
	x = x + 1;
}
</pre>
</div>
<p>"economizei muitas variáveis de referência que usariam memoria, boizinho, portanto, pode guardar
seu protetor solar", gozou Kent. "não tão rápido, Kent!", disse Tawny, "você economizou um pouco de memória,
mas é Bob que vem comigo".</p>

<p>Por que Tawny escolheu o método de Bob e não o de Kent, se o de Kent usa menos memória?</p>
<br><br>
