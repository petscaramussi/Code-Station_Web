<h3> Criando e testando objetos Movie </h3>
<div class="codigo-java">
<pre>
<p>class Movie {

    String title;
    String genre;
    int rating;
    
    void platIt() {
        System.out.println("Playing the movie");
    }
}
</p>
</pre>
<p>
</div>
<div class="codigo-java"> 
<pre>
public class MovieTestDrive {
    public static void main(String[] args) {
        
        Movie one = new Movie();
        one.title = "Gone with the Stock";
        one.genre = "Tragie";
        one.rating = -2;
        Movie two = new Movie();
        two.title = "Lost in Cubicle Space";
        two.genre = "Comedy";
        two.rating = 5;
        two.playIt();
        Movie three = new Movie();
        three.title = "Byte Club";
        <text style="font-size:14.5px">three.genre = "Tragic but ultimately uplifting";</text>
        three.rating = 127;
        
    }
}
</pre>
</div>
</p>