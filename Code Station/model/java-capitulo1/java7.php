<h2>Anatomia de uma classe</h2>
<p>Quando a JVM começar a ser executada, procurará a classe que você forneceu na linha de comando. Em seguida, começará a procurar um método especialmente escrito que se pareça exatamente com:</p>
<pre>
public static void main (String[] args) { 
        // seu código aqui 
}
</pre>

<p>Depois a JVM executará tudo que estiver entre as chaves { } de seu método principal. Todo aplicativo Java precisa ter menos uma classe e um método main (não um método main por classe, apenas um por aplicativo).</p>

<div class="codigo-java"> 
<pre>
public class MeuPrimeiroCodigo { 
        public static void main (String[] args) { 
              System.out.println("Code Station"); 
    } 
}
</pre>
</div>