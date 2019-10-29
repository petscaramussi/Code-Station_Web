<h3> O Java coleta o lixo </h3>
  <p>
  Sempre que um objeto é criado em Java, ele vai para em uma área da memória conhecida como Heap. 
  Todos os objetos - independente de quando, onde eu como sejam criados - residem no heap. 
  Mas não se trata simplesmente de qualquer memória heap Java se chama Pilha de Lixo Coletável. 
  Quando você criar um objeto, a Java alocará espaço na memória heap de acordo com esse com quanto esse objeto 
  com apenas duas variáveis de instância. Mas o que acontecerá quando você precisar reclamar esse espaço?
  Como você tirará um objeto pode nunca mais ser usado, ele se tornará qualificado para a coleta de lixo, e se você estiver ficando com um pouco de espaço na memória, 
  o Coletor de Lixo será executado, eliminará os objetos inalcançáveis e libertará o espaço, 
  para que esse possa ser reutilizado. 
  Em capítulos posteriores você aprenderá mais sobre como isso funciona.
  </p>