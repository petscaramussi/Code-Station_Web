
<h2>Codificando um aplicativo empresarial real</h2>
<p>Colocaremos todas as suas novas aptidões em Java em uso com algo prático. Precisamos de uma classe com um método main(), um tipo int e uma variável String, um llop while e um teste if. Mais alguns retoques e você estará construindo esse back-end empresarial sem demora. Mas antes examinará o código dessa página e pensará por um instante em como você codificaria esse grande classe, "99 garrafas de cerveja".</p>

<div class="codigo-java">
<pre>
public class BeerSong {

 public static void main(String[] args) {

   int beerNum = 99;

   String word = "bottles";

   while (beerNum > 0) {

    if (beerNum == 1) {

     word = "bottle"; // no singular, como em UMA garrafa.

    }

    System.out.println(beerNum + " " + word + " " of bber on the wall ");

     System.out.println(beerNum + " " + word + " of beer.");

     System.out.println("Take one down."
      ");

      System.out.println("Pass ir around.");

      beerNum = beerNum - 1;

      if (beerNum > 0) {

       System.out.println(beerNum + " " + word + " of beer on the wall");

      } else {

       System.out.println("no more bottles of beer on the wall");

      } // fim do else

     } // fim do loop while

    } // fim do método main

   } // fim da classe
</pre>
</div>
<p>Ainda há uma pequena falha em nosso código. Ele será compilado e executado, mas a saída não está 100% perfeita. Veja se consegue identificar a falha e corrija.</p>
