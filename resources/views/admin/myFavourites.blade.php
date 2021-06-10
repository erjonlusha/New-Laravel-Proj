@extends('layouts.app')

@section('content')
    <div class="favourites">
        <h1>Le mie passioni</h1>
        <div class="container">
            <ol>
                <li>
                    <h3>Street photography</h3>
                    {{-- <div class="d-flex"> --}}
                        {{-- </div> --}}
                    <div class="fst_p d-flex flex-column">
                        <p>La street photography ("fotografia di strada") è un genere fotografico che vuole riprendere i soggetti in situazioni reali e spontanee in luoghi pubblici al fine di evidenziare aspetti della società nella vita di tutti i giorni. Tuttavia, la street photography non necessita la presenza di una strada o dell'ambiente urbano. Il termine “strada” si riferisce infatti ad un luogo generico ove sia visibile l'attività umana, un luogo da osservare per catturarne le interazioni sociali. Di conseguenza il soggetto può anche essere del tutto privo di persone o addirittura un ambiente dove un oggetto assume delle caratteristiche umane. Molti fotografi di strada proprio per questo tipo di reportage sociale rientrano in quella che è stata definita: scuola umanista.</p>
                        <div class="d-flex photo_container">
                            <img id="photo" src="https://upload.wikimedia.org/wikipedia/commons/7/75/Jk-kensington.jpg" alt="">                        
                            <img id="photo" src="https://www.fotonerd.it/wp-content/uploads/2020/03/fotonerd-street-photography-1.jpg" alt="">                        
                            <img id="photo" src="https://arte.sky.it/wp-content/uploads/2018/03/Martha-Cooper-New-York-1978-9-620x388.jpg" alt="">                        
                        </div>
                            <p>L'inquadratura e il tempismo sono degli aspetti chiave di quest'arte; lo scopo principale infatti consiste nel realizzare immagini colte in un momento decisivo o ricco di pathos. In alternativa, uno street photographer può ricercare un ritratto più banale di una scena come forma di documentario sociale.</p>
                    </div>
                </li>
                
                <li>
                    <h3>Videogame</h3>
                    <div class="fst_p d-flex flex-column">
                        <p>Il videogioco è un gioco gestito da un dispositivo elettronico che consente di interagire con le immagini di uno schermo. Il termine generalmente tende a identificare un software, ma in alcuni casi può riferirsi anche a un dispositivo hardware dedicato a uno specifico gioco. In italiano è detto anche, con anglicismo, videogame, sebbene il termine inglese corretto sia video game. Colui che utilizza un videogioco viene chiamato videogiocatore o gamer ("giocatore" in inglese) e si serve di una o più periferiche di input chiamate controller, come per esempio il gamepad, il joystick, il mouse e la tastiera di un computer.</p>
                        <iframe id="ytplayer" type="text/html" width="480" height="270" src="https://www.youtube.com/embed/2ShnOuSFJsA" frameborder="0" allowfullscreen>
                    </div>
                </li>
                <li>
                </li>
            </ol>
        </div>
    </div>

@endsection

