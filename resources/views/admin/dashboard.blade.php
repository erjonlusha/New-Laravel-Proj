@extends('layouts.app')

@section('content')
<h1>Benvenuto {{ Auth::user()->name }}</h1>
<h2>Chi sono</h2><p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
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
