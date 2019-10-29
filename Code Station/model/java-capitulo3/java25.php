
<h2> O Java acha o tipo importante </h2> 

<p>Quando você estiver declarando uma matriz, não poderá inserir nada que não seja do tipo declarado para ela.
Por exemplo, você não pode inserir um objeto Cat em uma matriz Dog(seria muito frustrante se alguém achasse
que só há cães na matriz e pedisse a cada um deles que latisse para então com espanto descobrir que há um
gato à espreita). E você não pode inserir um tipo double em uma matriz int (derramamento, lembra-se?).
No entanto, pode inserir um byte em uma matriz int, porque o tipo byte sempre caberá em uma xícara de tamanho int.
Isso é conhecido como alargamento implícito. Entraremos em detalhes posteriormente; 
por enquanto apenas lembre-se de que o compilador não permitirá que você insira algo errado em uma matriz,
com base no tipo declarado para ela.</p>
<br><br>