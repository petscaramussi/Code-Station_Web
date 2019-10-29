<pre>
    
<h3> Executando o jogo de adivinhação </h3>
<div class="codigo-java">
 public class player {
  int number = 0; // onde entra o palpite

  public void guess() {
   number = (int)(Math.random() * 10);
   System.out.println( * Estou pensando em "+ number);)
  }
 }

 public void gues() {
  public static void main(String[] args) {
   GuessGame game = new GuessGame();
   game.startGAME();

  }
 }
</div>
Saída do programa: (Será diferente a cada vez que você executar)

Estou pensando em um número entre 0 e 9...
O número a adivinhar e 7
Estou pensando em 1 
Estou pensando em 9
Estou pensando em 9
O jogador um fornece o palpite 1
O jogador dois forneceu o palpite 9
O jogador três forneceu o palpite 9
Os jogadores terão que tentar novamente.
O número a adivinhar e 7
Estou pensando em 3
Estou pensando em 0
Estou pensando em 9
O jogador um forneceu o palpite 3
O jogador dois forneceu o palpite 0
O jogador dois forneceu o palpite 9
Os jogadores terão que tentar novamente.
O número a adivinhar e 7
Estou pensando em 7
Estou pensando em 5
Estou pensando em 0
O jogador um forneceu o palpite 7
O jogador dois forneceu o palpite 5
O jogador três forneceu o palpite 0
Temos um vencedor!
O jogador um acertou? Verdadeiro
O jogador dois acertou? Falso
O jogador três acertou? Falso
Fim do jogo.
</pre>