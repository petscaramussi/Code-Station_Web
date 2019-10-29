
<h2> Não existem Perguntas idiotas </h2>
<br>

<p>P: Qual o tamanho de uma variável de referência?</p>
<p>R: Você não saberá. A menos que tenha intimidade com alguém da equipe de desenvolvimento da JVM,
não saberá como uma referência é representada. Haverá ponteiros em algum local, mas você não poderá acessá-los.
Não precisará disso. (Certo, se insistir, não há por que não imaginá-la com valor de 64 bits.)
Mas quando estiver pensando em questões de alocação de memória, sua grande preocupação deverá ser com 
quantos objetos (e não referências de objeto) está criando e com qual seu (dos objetos) verdadeiro tamanho.
</p>

<p>
P: Mas isso significa que todas as referências de objetos têm o mesmo tamanho, independentemente do 
tamanho dos objetos reais aos quais elas se referem?
</p>
<p>
R: Sim. Todas as referências de uma determinada JVM terão o mesmo tamanho, independentemente
dos objetos que elas referenciarem, mas cada JVM pode ter uma maneira diferente de representar referências,
portanto, as referências de uma JVM podem ser menores ou maiores do que as de outras JVM.
</p>
<p>
P: Posso fazer cálculos em uma variável de referência, aumentá-la, você sabe - operações próprias da linguagem C?
</p>
<p>
R: Não, repita comigo: "O Java não é o C".
</p>
</pre>
<br>