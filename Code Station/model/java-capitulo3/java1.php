
<h2>Declarando uma variável</h2>

<p>O Java considera o tipo importante. Ele não permitirá que você faça algo bizarro e perigoso como inserir a referência de uma girafa em uma variável Coelho - O que aconteceria quando alguém tentasse pedir ao suposto coelho para saltar ()? E não permitirá que insira um número de ponto flutuante em uma varável de tipo inteiro, a menos que você informe ao compilador que sabe que pode perder a precisão (o que se encontra após a vírgula decimal).</p>

<p> Compilador consegue identificar a maioria dos problemas:
<div class="codigo-java">
Coelho saltador = new Girafa( );
</div>
Não espere que isso seja compilado. Ainda bem que não será.</p>

<p>Para que toda essa segurança dos tipos funcione, você deve declarar o tipo de sua variável. Ele é um inteiro? Um Cão? Um único caractere? AS variáveis vêm em duas versões: primitivas e de referência de objeto. As primitivas contêm valores básicos (pense em padrões de bits simples) que incluem inteiros, booleanos e números de ponto flutuante. As referências de objeto contém, bem, referências a objetos. (Puxa! Isso não esclareceu tudo?)</p>

<p>Examinaremos primeiro as variáveis primitivas e, em seguida, passámos para o que uma referência de objeto significa realmente. Mas independentemente do tipo, você deve seguir duas regras de declaração:</p>

<p>As variáveis devem ter um tipo</p>

<p>Além de um tipo, uma variável precisa de um nome, para que você possa usar esse nome no código.</p>

<p>As variáveis devem ter um nome</p>
<div class="codigo-java">
<p>int count;</p>
</div>
<p>Nota: quando você se deparar com uma instrução como "um objeto de tipo X", pense em tipo e classe como sinônimos. (Detalhadamente isso em pouco mais em uns capítulos posteriores.)</p>
