
<h2>Não existem Perguntas idiotas</h2>

<p>
  P: E se eu precisar de variáveis e métodos 'globais'? Como conseguirei isso, se tudo precisa estar em uma classe?<br>
  R: Não há um conceito de variáveis e métodos 'globais' em um programa Java orientado a objetos. Na prática, entretanto, haverá situações em que você pode querer um método (ou uma constante) esteja disponível para qualquer código que for executado em qualquer parte do seu programa. Considere o método random() do aplicativo da paráfrase; é um método que tem poder ser chamado de qualquer loca. E quanto a uma constante como pi (π)? Você aprenderá no capítulo 10 que marcar um método como public e static faz um método 'global'. Qualquer código, de qualquer classe de seu aplicativo, poderá acessar um método estático público. E se você marcar uma variável como public, constante disponível globalmente.<br>
<br>
  P: Mas como poderia chamar isso de orientado a objetos se ainda é possível tornar globais as funções e dados?
<br>
  R: Em primeiro lugar, tudo em Java reside em uma classe. Portanto, a constante pi (π) e o método random(), embora públicos e estáticos, são definidos dentro da classe Math. E você deve se lembrar que esses itens estáticos (semelhantes aos globais) são a exceção em vez da regra em Java. Eles representam um caso muito especial, em que se tem várias instâncias/objetos. <br>
<br>
  P: O que é um programa Java? O que é realmente distribuído?
<br>
  R: Um programa Java consiste em uma pilha de classes (ou, pelo menos, uma classe). Em uma aplicativo Java, uma das classes deve ter um método main, usado para iniciar o programa. Portanto, como programador, você escreve uma ou mais classes. E essas classes são que você distribuirá. Se o usuário final não tiver uma JVM, você também precisará incluir nas classes de seu aplicativo, para que eles possam executar seu programa. Há vários programas de instalação que permitem incluir nas classes diversos JVM (digamos, para diferentes plataformas) e inserir tudo em um CD-ROM. Assim o usuário final poderá instalar a versão correta da JVM (supondo que eles já não a tenham em suas máquinas).<br>
<br>
  P: E se eu tiver uma centena de classes? Ou mil? Não seria complicado distribuir todos esses arquivos? Posso empacotá-los em um Kit Aplicativo?<br>
<br>
  R: Sim, seria complicado distribuir uma grande quantidade de arquivos para seus usuários finais, mas você não precisa fazer isso. Você pode inserir todos os arquivos de seu aplicativo em um Java Archive - um arquivo .jar - que usa o formato pkzip. No arquivo jar, você poderá incluir um arquivo de texto simples formatado como algo chamado manifesto, que definirá que classe desse arquivo contém o método main() que deve ser executado.<br>
</p>


<h3>Discriminação dos pontos</h3>
<p>
  - A programação orientada a objetos lhe permitirá um programa sem ser preciso mexer em código funcional já testado.
  - Todo código Java é definido em uma classe.
  - Uma classe descreve como criar um objeto desse tipo de classe. Uma classe é como um projeto.
  - Um objeto pode cuidar de si próprio: você precisa conhecer ou se importar com a maneira de ele agir.
  - Um objeto conhece coisas e faz coisas.
  - As coisas que um objeto conhece sobre si próprio se chama variáveis de instância. Elas representam o estado de um objeto. 
  - As coisas que um objeto faz são chamadas de métodos. Eles representam o comportamento de um objeto.
  - Quando você criar uma classe, talvez queira criar uma classe de teste separada, que usará para gerar objetos de seu novo tipo de classe.
  - Uma classe pode herdar variáveis de instância e métodos de uma superclasse mais abstrata.
  - No tempo de execução, um programa Java nada mais é do que objetos "comunicando-se" com outros objetos.
</p>