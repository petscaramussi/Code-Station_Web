
<h3>Seja o compilador</h3> 
  <p>Cada um dos arquivos Java dessa página representam um arquivo-fonte completo. Sua tarefa é personificar o compilador e determinar se cada um deles pode ser compilado. Se não puderem ser compilados, como você os corrigiria, e se eles forem compilados, qual seria sua saída?</p>
<div class="codigo-java">
<pre>
class TapeDeck {

        boolean canRecord = false;

        void playTape() {
            System.out.println("tape playing");
        }

        void recordTape() {
            System.out.println("tape recording");
        }

        class TapeDeckTestDrive {

            public static void main(String[] args) {
                t.canRecord = true;
                t.playTape();

                if (t.canRecord == true) {
                    t.recordTape();
                }
            }
        }
    }
</pre>
</div>
<br><br>
<div class="codigo-java">
<pre>
      class DVDPlayer {

        boolean canRecord = false;

        void recordDVD() {
            System.out.println("DVD recording");
        }

        class DVDTestDrive {

            public static void main(String[] args) {

                DVDPlayer d = new DVDPlayer();
                d.canRecord = true;
                d.playTape();

                if (d.canRecord == true) {
                    d.recordTape();
                }
            }
        }

    }
</div>
</pre>