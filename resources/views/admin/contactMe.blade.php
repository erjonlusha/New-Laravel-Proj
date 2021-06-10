@extends('layouts.app')

@section('content')
    <div class="conctact_me container d-flex">
        <div class="contact_form d-flex flex-column justify-content-between">
            <h2>Contattami</h2>
            
            <form action="{{route('messaggi')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form_input_message">                        
                    <!-- nome -->
                    <input for="nome" id="nome" type="text" class="form-control" name="nome"  required autocomplete="nome" autofocus placeholder="Inserisci il tuo nome"
                    value="{{ old('nome')}}">
                </div>
                @error('nome')
                        <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <div class="form_input_message">

                    <input class="form-control" name="cognome" id="cognome" rows="3" placeholder="Inserisci il cognome" required>{{ old('cognome')}}
                    @error('cognome')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form_input_message">
                    <!-- email -->
                    <input for="email" id="email" type="email" class="form-control" name="email" autocomplete="email" autofocus placeholder="Inserisci la tua email"
                    value="{{ old('nome')}}" required>
                </div>
                @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                
                <button type="submit" class="btn btn-primary">INVIO</button>
            </form>
        </div>
    </div>

@endsection
