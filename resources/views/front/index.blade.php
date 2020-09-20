@extends('layout.master')

@section('content')
<div class='pb-5 pt-3 text-center mx-auto'>
  <h2>Bonjour !</h2>
  <h4>Merci de repondre a toutes les questions et de valider le formulaire en bas de page</h4>
</div>
        <form method="post" action="/validate_message" class="col-md-4 mx-auto">
            {{ csrf_field() }}
                <div class="form-group pt-2">
                   <h4>Question 1/20 </h4> 
                   <label for="email">Entrez votre mail</label>
                   <input type="email" class="form-control" name="email" placeholder="pierre.giraud@edhec.com" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                      <p class="invalid-feedback">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="form-group pt-4">
                   <h4>Question 2/20 </h4>
                   <label for="age">Entrez votre age</label>
                   <input type="number" class="form-control" name="age" placeholder="42" min="0" max="99" value="{{ old('age') }}">
               </div>

              <div class="form-group pt-4">
               <h4>Question 3/20 </h4>
               <label for="genre">Entrez votre sexe</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" value="0" checked>
                      <label class="form-check-label">Homme</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" value="1">
                      <label class="form-check-label">Femme</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" value="3">
                      <label class="form-check-label">Prefere ne pas répondre</label>
                  </div>
                </div>
               <button class="btn btn-primary mt-4" type="submit">Valider</button>
         </form>

@endsection