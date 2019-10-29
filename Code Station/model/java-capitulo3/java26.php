
<h2> Um exemplo de Dog </h2>
<div class="codigo-java">
<pre>
class Dog {
	String name;

	public static void main (String []args){
		// cria um objeto Dog e o acessa
		Dog dog1 = new Dog[3];
		dog1.bark();
		dog1.name "Bart";
		// agora cria uma matriz Dog
		Dog[] myDogs = new Dog[3];
		// e coloca alguns Dogs dentro
		myDogs[0] = new Dog();
		myDogs[1] = new Dog();
		myDogs[2] = dog1;
		// agora acessa os objetos Dog
		// usando as referências da matriz
		myDogs[0].name = "Fred";
		myDogs[1].name = "Marge";
		// Hmmm... qual é o nome de myDogs[2]?
		System.out.println("o nome do último cão é ");
		System.out.println(myDogs[2].name);
		// agora executa um loop pela matriz
		// e pede a todos os cães para latirem
		int x = 0;
		while(x < myDogs.length) {
			myDogs[x].bark();
			x++;
		}
	}

	public void bark() {
		System.out.println(name + "diz Ruff!");
	}
	public void eat() { }
	public void chaseCat() { }
}
</pre>
</div>
<h2> Saída </h2>

<p>null diz Ruff!</p>
<p>O nome do último cão é Bart</p>
<p>Fred diz Ruff!</p>
<p>Marge diz Ruff!</p>
<p>Bart diz Ruff!</p>
<p>Discriminação dos pontos</p>

<p>- As variáveis vêm em duas versões: primitivas e de referência.</p>
<p>- As variáveis devem sempre ser declaradas com um nome e tipo.</p>
<p>- O valor de uma variável primitiva são os bits que o representam (5, "a", verdadeiros 3.1416, etc.).</p>
<p>- O valor de uma variável de referência são bits que representam uma maneira de acessar um objeto da pilha.</p>
<p>- A variável de referência e como um controle remoto. Usar o operador ponto (.) em uma variável de referência
e como pressionar um botão no controle remoto para acessar um método ou variável de instância.</p>
<p>- Uma variável de referência tem valor nulo quando não está referenciado nenhum objeto.</p>
<p>- Uma matriz é sempre um objeto, mesmo quando é declarada para conter tipos primitivos.</p>
<p>Não existe algo como uma matriz primitiva, somente uma matriz que contenha tipos primitivos.</p>
<br>