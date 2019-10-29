
<h2>E quanto ao método rotate() de Amoeba?</h2>
<p>Larry: Não é esse o problema aqui - que a forma de ameba tinha um procedimento de rotação e produção de som totalmente diferentes?</p>

<p>Brand: Método.</p>

<p>Larry: Não importa. Como a ameba pode fazer algo diferente se ela "herda" sua funcionalidade da SHape?</p>

<p>Brand: Essa é a última etapa. A classe Amoeba sobrepõe os métodos da classe Shape. Portanto, no tempo de execução, a JVM saberá exatamente que método rotate() executar quando alguém solicitar que o objeto Amoeba gire.</p>

<p>4. Fiz com que a classe Amoeba sobrepusesse os métodos rotate() e playSound() da superclasse Shape. Sobrepor significa apenas que uma subclasse redefinirá um de seus métodos herdados quando precisar alterar ou estender o comportamento desse método.</p>
<div class="codigo-java">
<pre>
Shape
rotate()
playSound()
</pre>
</div>
<p>Amoeba</p>
<div class="codigo-java">
<pre>
        int x point;
        int y point;
        rotate() {
            // código de rotação
            // especifico da ameba
        }
        
        playSound() {
            // código de reprodução
            // especifico da ameba
        }
</pre>
</div>
<p>Larry: como você "diria" a um objeto Amoeba para fazer algo? Não é preciso chamar o procedimento, desculpe - método, e, em seguida, lhe informa que item girar?</p>

<p>Brad: Isso é o que há de mais interessante na OO. QUando for hora, digamos, de o triângulo girar, o código do programa referenciará (chamará) o método rotate() no objeto Triângulo. O resto do programa não saberá ou se importará realmente em como o Triângulo o fará. E quando você precisar adicionar algo novo ao programa, apenas criará uma nova classe para o novo tipo de objeto, para que os novos objetos tenham seu próprio comportamento.</p>

<h3>O poder do cérebro </h3>
<p>Você acabou de ler uma história sobre um programa de procedimentos competindo com um programador orientado a objetos. Tivemos uma breve visão geral de alguns conceitos-chave da OO, que incluiu as classes, métodos e atributos. Passaremos o resto do capítulo examinando as classes e objetos (retornaremos à herança e à sobreposição em capítulos posteriores).

Baseado no que você viu até agora (e no que deve saber de alguma linguagem orientada a objetos com a qual já trabalhou), faça uma pausa para pensar nessas perguntas:

Quais são os itens fundamentais que você terá que considerar quando projetar uma classe Java? Que perguntas terá que fazer para você mesmo? Se pudesse projetar uma lista de conferência para usar quando estiver projetando uma classe, o que incluiria nela?
</p>