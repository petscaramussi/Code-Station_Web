<h3> O Jogo de adivinhação </h3> 
<h4> Resumo: </h4>
<p>
O jogo de adivinhação envolve um objeto "game" e três objetos 'player'.
O jogo gera um número aleatório entre 0 e 9, e os três objetos player tentam adivinhá-lo
(Não dissemos que seria um jogo divertido).
</p>
<p>

Classes:<br>
GuessGame.class Player.class GameLauncher.class<br>
<br><br>
A lógica:
1) É na classe GameLauncher que o aplicativo é iniciado; ela tem o método main().
<br><br>
2) No método main(), um objeto GuessGame é criado e seu método starGame() é chamado.
<br><br>
3) É no método starGame(), um objeto GuessGame que o jogo inteiro se desenrola. Ele cria três jogadores e,
em seguida, "pensa" em número aleatório (aquele que os jogadores têm que adivinhar).
Depois de solicitar a cada jogador que adivinhe, verifica o resultado e exibe informações sobre o(s) jogador(es) vencedor(es) ou pede que adivinhem novamente.
</p>

<p> GameLauncher </p>
<pre>
<div class="codigo-java">
 main(String[] args)

 GuessGame
 p1
 p2
 p3
 starGame( )

Player
número
guess()

public class GuessGame {
 Player p1;
 Player p2;
 Player p3;

 public void starGame() {
  p1 = new Player();
  p2 = new Player();
  p3 = new Player();

  int guessp1 = 0;
  int guessp2 = 0;
  int guessp3 = 0;

  boolean p1isRight = false;
  boolean p2isRight = false;
  boolean p3isRight = false;

  int targetNumber = (int)(Math.random() * 10);
  System.out.println("Estou pensando em um número entre 0 e 9...");

  while (ture) {
   System.out.println("O número a adivinhar é " + targetNumber);

   p1.guess();
   p2.guess();
   p3.guess();

   guessp1 = p1.number;
   System.out.println("O jogador um forneceu o palpite " + guessp1);
   guessp2 = p2.number;
   System.out.println("O jogador dois forneceu o palpite " + guessp2);
   guessp3 = p3.number;
   System.out.println("O jogador dois forneceu o palpite " + guessp2);

   if (guessp1 == targetNumber) {
    p1isRight = true;
   }

   if (guessp2 == targetNumber) {
    p2isRight = true;
   }

   if (guessp3 == targetNumber) {
    p3isRight = true;
   }

   if (p1isRught || p2isRight || p3isRight) {

    System.out.println("Temos um vencedor!");
    System.out.println("O Jogador um acertou? " + p1isRight)
    System.out.println("O Jogador dois acertou?" + p2isRight)
    System.out.println("O Jogador três acertou?" + p3isRight)
    System.out.println("O Jogador quatro acertou?" + p4isRight)
    System.out.println("Fim do jogo.");
    break : // fim do jogo, portanto saia do loop

   } else {
    // devemos continuar porque ninguém acertou!
    System.out.println("Os jogadores terão que tentar novamente.");
   } // fim de if/else
  } // fim de else
 } //fim de if/else 
} //fim do método
} // fim da classe

}
</div>
</pre>