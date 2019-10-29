<h2>O que você fará em Java</h2>

<p>Você criará um arquivo de código-fonte, compilará usando o compilador javac, em seguida, executará o bytecode em uma máquina virtual java</p>


<h3>Código-fonte</h3>

<p>Digite seu código-fonte. Salve como: Code Station.java</p>

<h3>Código:</h3>

<div class="codigo-java">
<pre>
package party;
import java.awt.*; 
import java.awt.event.*; 
class Party{ 
          public void buildInvite(){ 
                    Frame f = new Frame(); 
                    Label l = new Label("Meu primeiro código Java"); 
                    Button b = new Button ("Adorei"); 
                    Button c = new Button ("Quero mais"); 
                    Panel p = new Panel (); 
                    p.add(l); 
                    // você pode acrescentar mais linhas de código aqui! 
          } 
}
</pre>
</div>
<h2>Compilador</h2>

<p>Compile o arquivo Code Station.java executando o javac (aplicativo do compilador). Se não houver erros, você terá um segundo documento chamado Code Station.class. O arquivo Code Station.class gerado pelo compilador é composto de bytecodes.</p>

<h2>Saído (código)</h2>

<p>Código compilado: CodeStation.class</p>

<h2>Máquinas Virtuais</h2>

<p>Execute o programa iniciando a Java Virtual Machine (JVM) com o arquivo Code Station.class. A JVM converterá o bytecode em algo que a plataforma subjacente entenda e executará seu programa.</p>
