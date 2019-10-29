
<h2>O que você pode inserir no método main?</h2>
<p>Quando você estiver dentro da main (ou de qualquer método), a diversão começará. Você pode inserir todas as coisas que costumam ser usadas na maioria das linguagens de programação para fazer o computador executar algo.</p>

<p>Seu código pode instruir a JVM a:</p>

<h3>Fazer algo </h3>
<h4>Instruções: declarações, atribuições, chamadasa de método, etec.</h4>
<div class="codigo-java">
<p>int x = 3;</p>

<p>String nome = "Code Station";</p>

<p>x = x * 17;</p>

<p>System.out.print("x é " + x);</p>

<p>double d = Math.random();</p>

<p>// isto é um comentário</p>
</div>
<h3>Fazer algo repetidamente</h3>
<h4>Loops: for e while</h4>
<div class="codigo-java">
<pre>
while (x > 12) { 
        x = x - 1; 
}
</pre>
</div>
<br>
<div class="codigo-java">
<pre>
for (int x = 0; x < 10; x = x + 1) { 
        System.out.print("x agora é " + x ); 
}
</pre>
</div>
<h3>Fazer algo sob essa condição </h3>
<h4>Ramificação: teste if/else</h4>
<div class="codigo-java">
<pre>
if (x == 10) { 
        System.out.print("x deve ser 10"); 
} else { 
        System.out.print("x não é 10"); 
}
</pre>
</div>
<br>
<div class="codigo-java">
<pre>
if ((x < 3) & (nome.equals("Code Station"))) { 
        System.out.println("Codigo"); 
}
</pre>
</div>
<p>System.out.print("essa linha rodará não importa o que aconteça");</p>