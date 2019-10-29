
<h3> Imãs com código </h3>

<p>Um programa Java está todo misturado sobre a geladeira. Você conseguiria reconstruir os trechos de código
para criar um programa Java funcional que produzisse a saída listada a seguir? 
Algumas das chaves caíram no chão, e são muito pequenas para que as recuperemos, portanto, fique à vontade para adicionar quantas delas precisar.</p>

<div class="codigo-java">
    
<pre>
<p>int y = 0;</p>

<p>ref = index[y];</p>

<p>islands[0] = "Bermuda";</p>
<p>islands[1] = "Fiji";</p>
<p>islands[2] = "Azores";</p>
<p>islands[3] = "Cozumel";</p>

int ref;
    while (y < 4) {
}

<p>System.out.println(ref);</p>

<p>index[0] = 1;</p>
<p>index[1] = 3;</p>
<p>index[2] = 0;</p>
<p>index[3] = 2;</p>

<p>String [] islands = new String[4];</p>

<p>System.out.print("island = ");</p>

<p>int [] index = new int[4];</p>

<p>y = y + 1;</p>
</pre>
</div>
<div class="codigo-java">
<pre>
class TestArrays {
	public static void main(String []args){

	}
}
</pre>
</div>
<div class="codigo-java">
<pre>
Saída

island = Fiji;
island = Cozumel;
island = Bermuda;
island = Azores;
</pre>
</div>
<h2>Uma pilha de problemas</h2>

<p>Um programa Java pequeno está listado. Quando a linha "// executa algo" for alcançada,
alguns objetos e variáveis de referência terão sido criados. Sua tarefa é determinar que variáveis
de referência apontaram para quais objetos. Nem todas as variáveis de referência são usadas, e alguns 
objetos podem ser referenciados mais de uma vez. Desenhe linhas conectando as variáveis de referência aos seus respectivos objetos.</p>

<p> Dica: a menos que você seja mais esperto que nós, provavelmente terá que desenhar diagramas. Use um lápis para
poder desenhar e, em seguida, apague os vínculos das referências. </p>
<div class="codigo-java">
<pre>
class HeapQuiz {
	int id = 0;

	public static void main(String [] args) {
		int x = 0;
		HeapQuiz [] hq = new HeapQuiz[5];
		while (x < 3) {
			hq[x] = new HeapQuiz();
			hq[x].id = x;
		}
		hq[3] = hq[1];
		hq[4] = hq[1];
		hq[3] = null;
		hq[4] = hq[0];
		hq[0] = hq[3];
		hq[3] = hq[2];
		hq[2] = hq[0];
		// executa algo
	}
}
</pre>
</div>