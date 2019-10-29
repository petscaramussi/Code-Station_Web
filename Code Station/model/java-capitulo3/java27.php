
<h3> Seja o compilador </h3>

<p>Cada um dos arquivos Java dessa página representa um arquivo-fonte completo. Sua tarefa e personificar o
compilador e determinar se cada um deles pode ser compilado. Se não puderem ser compilados, como você os corrigiria?</p>

    
<h3>A</h3>
<div class="codigo-java">
<pre>

class Books {
	String title;
	String author;
}

class BooksTestDrive {
	public static void main(String [] args) {
		Books [] myBooks = new Books[3];
		int x = 0;
		myBooks[0].title = "The Grapes of Java";
		myBooks[1].title = "The Java Gatsby";
		myBooks[2].title = "The Java Cookbook";
		myBooks[0].author = "bob";
		myBooks[1].author = "sue";
		myBooks[2].author = "ian";

		while (x < 3) {
			System.out.println(myBook[x].title);
			System.out.println(" by ");
			System.out.println(myBooks[x].author);
			x = x + 1;
		}
	}
}
</pre>
</div>
<h3>B</h3>
<div class="codigo-java">
<pre>
class Hobbits {
	String nome;

	public static void main(String [] args){
		Hobbits [] h = new Hobbits[3];
		int z = 0;

		while (z < 4) {
			z = z + 1;
			h[z] = new Hobbits();
			h[z].name = "bilbo";
			if (z == 1) {
				h[z].name = "frodo";
			}
			if (z == 2) {
				h[z].name = "sam";
			}
			System.out.println(h[z].name + " is a ");
			System.out.println("good Hoobit name");
		}
	}
}
</pre>
</div>
<br>