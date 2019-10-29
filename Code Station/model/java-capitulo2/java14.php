<h3>Quando você projetar uma classe, pense nos objetos que serão criados com esse tipo de classe. Considere:</h3>
<br>
<div class="codigo-java">
<p>- as coisas que o objeto conhece</p>

<p>- as coisas que o objeto faz</p>

<p>Despertador</p>
<p>horaAlarme</p>

<p>modoAlarme</p>

<p>configurarHoraAlarme()</p>

<p>capturarHoraAlarme()</p>

<p>alarmeEstaConfigurado()</p>

<p>soneca()</p>

<p>carrinhoCompras</p>
<p>conteudoCarrinho</p>

<p>adicionarAoCarrinho()</p>

<p>removerDoCarrinho()</p>

<p>passarCaixa()</p>

<p>Botao</p>
<p>rotulo</p>

<p>cor</p>

<p>configurarCor()</p>

<p>configurarRotulo()</p>

<p>soltar()</p>

<p>pressionarNovamente()</p>
</div>
<p>
As coisas que um objeto conhece sobre ele são chamadas de variáveis de instância.
Elas apresentam o estado de um objeto (os dados) e podem ter valores exclusivos para cada objeto desse tipo.
</p>
<h3> Considere instância como outra maneira de dizer objeto.</h3>
<p>
As coisas que objeto faz são chamadas de métodos. Quando projetar uma classe, você pensará os métodos que operam sobre
esses dados. É comum um objeto ter métodos que leiam ou gravem os valores das variáveis de instância. 
Por exemplo, os objetos Despertador têm uma variável de instância que armazena a hora de despertar 
e dois métodos que capturam e configuram essa hora.

Portanto, os objetos têm variáveis de instância e métodos, mas essas variáveis de instância e métodos são projetadas como parte da classe.
</p>