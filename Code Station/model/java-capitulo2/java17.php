<h3>Criando seu primeiro objeto> </h3>
<p>Mas o que é necessário para criação e uso de um objeto? Você precisa de duas classes.
Uma para o tipo de objeto que desejar usar (Despertador, Televisão, etc.) e outra para testar sua nova classe.
É na classe testadora que você inserirá o método principal e nesse método main() criará e acessará objetos
de seu novo tipo de classe. A classe testadora terá apenas uma tarefa:
testar os métodos e variáveis de seu novo tipo de classe de objetos.</p>

<p>Desse ponto do curso em diante, você verá duas classes em muitos dos novos exemplos. 
Uma será a classe real - a classe cujos objetos realmente queremos usar, e outra será a classe testadora, que chamaremos de < qualquerQueSejaNomeSuaClasse > TesteDrive.
Por exemplo, se criarmos uma classe Bungee, também precisaremos de uma classe BungeeTestDrive. 
Só a classe < nomeAlgumaCoisa > TestDrive terá um método main(), 
e sua única finalidade será criar objetos de seu novo tipo (a classe que não for a de teste) para em seguida 
usar o operador ponto (.) para acessar os métodos e variáveis dos novos objetos. 

<p>Faremos tudo isso muito claramente nos exemplos a seguir.</p>

<p>O operador ponto (.)</p>

<p>O operador ponto (.) lhe dará acesso ao estado e comportamento (variáveis de instância e métodos) de um objeto.</p>
<div class="codigo-java">
<p>// cria um novo objeto</p>

<p>Dog d = new Dog();</p>

<p>// solicita que ele está usando-o</p>

<p>// operador ponto na</p>

<p>// variável d para chamar bark()</p>

<p>d.bark();</p>

<p>// configure seu tamanho usando</p>

<p>o operador ponto</p>

<p>d.size=40;</p>
</div>
<br>
<p>
1. Cria sua classe<br>
<div class="codigo-java">
<pre>
    class Dog {<br>
        <br>
        int size;<br>
        String breed;<br>
        String name;<br>
        
        void bark() {<br>
            System.out.println("Ruff! Ruff!");<br>
        }<br>
    }
	</pre>
	</div>
</p>
<br>
<p>
2. Crie uma classe testadora (TestDrive)<br>
<div class="codigo-java">
<pre>
	class Dog {<br>
	 public static void main(String[] args) {<br>
<br>
	  Dog d = new Dog();<br>
<br>
	  d.size = 40;<br>
<br>
	  d.bark();<br>
	 }<br>
	}<br>
</pre>
</div>
</p>

<p>Se você já tem algum código OO pronto, sabe que não estamos usando encapsulamento. 
Abordaremos esse assunto no Capítulo 4.</p>