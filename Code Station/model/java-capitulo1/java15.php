
<h2>Ramificação condicional</h2>
<p>Em Java, um teste if é basicamente o mesmo que o teste booleano de um loop while - só que em vez de dizer "while ainda houver refrigerante..." você dirá "if (se) ainda houver certeza..."</p>
<br>
<div class="codigo-java">
<pre>
Class IfTest {

public static void main (String[] args) {

int x = 3;

if (x == 3) {

System.out.println("x deve ser igual a 3");

}

System.out.println("Isso será executado de qualquer forma");

}

}
</pre>
</div>
<p>O código anterior executará a linha que exibe "x deve ser igual a 3" somente se a condição (x é igual a 3) for atendida. independentemente de ser verdadeira, no entanto, a linha que exibe "Isso será executado de qualquer forma" será executada. Portanto, dependendo do valor de x, uma ou duas instruções serão exibidas.</p>

<p>Mas podemos adicionar uma instrução else à condição, para podermos dizer algo como "if ainda houver refrigerante, continue a codificar, else (caso contrário) peguei mais bebida e então continue…</p>
