
<h2> As matrizes também são objetos </h2>

<p>A biblioteca padrão Java inclui várias estruturas de dados sofisticadas incluindo mapas, árvores e conjuntos
(consulte o Apêndice B), mas as matrizes servirão bem quando você quiser apenas obter uma lista de coisas
de maneira rápida, ordenada e eficiente. As matrizes lhe concederão acesso aleatório rápido, 
permitindo que você use a posição de um índice para acessar qualquer elemento existente nelas.</p>

<p>Todo elemento de uma matriz é apenas uma variável. Em outras palavras, um dos oitos tipos primitivos
de variável ou uma variável de referência. Qualquer coisa que você inserir em uma variável desse tipo
poderá ser atribuída a um elemento de matriz do mesmo tipo. Portanto, em uma matriz de tipo int (int[]),
cada elemento pode conter um inteiro. Em uma atriz Dog (Dog[]) cada elemento pode conter... um objeto Dog?
Não, lembre-se de que uma variável de referência só armazena uma referência (um controle remoto)
e não o próprio objeto. Logo, em uma matriz Dog, cada elemento pode conter o controle remoto de um objeto Dog.
É claro que ainda teremos que criar os objetos Dog... E você verá tudo isso na próxima página. </p>

<p>Não deixe de observar um item-chave no cenário acima - a matriz será um objeto, mesmo se tiver variáveis primitivas.</p> 

<p>As matrizes são sempre objetos, não importando se foram declaradas para conter tipos primitivos ou 
referências de objetos. Mas você pode ter um objeto de matriz que tenha sido declarado para conter valores primitivos.
Em outras palavras, o objeto de matriz pode ter elementos que sejam primitivos, mas a matriz propriamente dita 
nunca e de um tipo primitivo. Independentemente do que a matriz armazenar, ela sempre será um objeto!</p>
