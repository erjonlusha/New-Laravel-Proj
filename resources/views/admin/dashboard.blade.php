@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="txt_center">Benvenuto {{ Auth::user()->name }}</h1>
        <h2>Chi sono</h2>
        <p>Una biografia (dal greco bíos βίος "vita" e gráphein γράφειν, "scrivere") è un testo che contiene la ricostruzione complessiva della vita di una persona, scritto in forma narrativa o di saggio. Quando proviene dallo stesso soggetto, si ha una autobiografia.</p>
        <p>
            <small>«La storiografia, come ben insegna Benedetto Croce, non deve mai diventare un tribunale di fronte al quale processare gli uomini del passato per le loro azioni, onde condannarli o assolverli; i tribunali sia giuridici che morali, servono solo per gli uomini vivi, i morti, invece, hanno già sostenuto il giudizio dei tribunali del loro tempo e non possono essere assolti o condannati due volte»</small>
            <small>(A.Ventura, Romolo Caggese tra storiografia e politica (1881-1891), Rassegna di Studi Dauni, Foggia, 1981)</small>
        </p>
        <p>La storiografia dell'esistenza di una persona è variata nel corso dei secoli in funzione non solo del contesto culturale e del modello letterario, ma anche della considerazione dell'individualità e dell'incidenza delle varie fasi della vita. Attualmente si sono diffuse biografie che, sfruttando gli studi psicoanalitici, dedicano ampio spazio all'infanzia del protagonista; altre culture e civiltà, invece, si limitano a narrare i comportamenti che hanno inciso oggettivamente sulla realtà e trattano l'infanzia solo come un periodo profetico sull'avvenire del soggetto.</p>
        <small class="copyright">&copy;Wikipedia</small>
    </div>
@endsection



{{-- Esercizio conclusivo HTML/CSS/JS/LARAVEL/MYSQL
Miniportale personale.
Impostare una pagina di autenticazione (puoi aggiungere anche la registrazione, ma basta che
ci sia il login).
Effettuato l’accesso, verranno visualizzare 4 sezioni (implementare una sidebar, si può utilizzare
bootstrap) che saranno:

1. Chi sono;                    DashBbard
2. Cosa mi piace;               myFavourites
3. I miei contatti social;      mySocial
4. Contattami.                  Contact me

Per lo stile e l'impostazione dei contenuti del portale, decidi in autonomia.
La sezione Contattami dovrà contenere un modulo con i seguenti campi:
1. Nome;    
2. Cognome; 
3. Email.   
Tutti i campi presenti sul portale devono essere valorizzati con una singola chiamata POST
(passando il token di autenticazione recuperato dalla chiamata di login). --}}
