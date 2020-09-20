@extends('layout.master')

@section('content')
<h3>Merci de repondre a toutes les questions et de valider le formulaire en bas de page</h3>
        <form method="post" action="/validate_message" class="col-md-4 mx-auto">
            {{ csrf_field() }}
                <div class="form-group">
                   <h3>Question 1/20 </h3> 
                   <label for="email">Entrez votre mail</label>
                   <input type="email" class="form-control" name="email" placeholder="pierre.giraud@edhec.com" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                      <p class="invalid-feedback">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="form-group">
                   <h3>Question 2/20 </h3>
                   <label for="age">Entrez votre age</label>
                   <input type="number" class="form-control" name="age" placeholder="42" min="0" max="99" value="{{ old('age') }}">
                   @if ($errors->has('age'))
                      <p class="invalid-feedback">{{ $errors->first('age') }}</p>
                   @endif
               </div>

              <div class="form-group">
               <h3>Question 3/20 </h3>
               <label for="genre">Entrez votre sexe</label>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="genre" value="1" class="custom-control-input" checked>
                    <label>Homme</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="genre" value="2" class="custom-control-input">
                    <label>Femme</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="genre" value="3" class="custom-control-input">
                    <label>Prefere ne pas repondre</label>
                  </div>
                  @if ($errors->has('genre'))
                    <p class="invalid-feedback">{{ $errors->first('genre') }}</p>
                  @endif
               </div>
               <button class="btn btn-primary" type="submit">Valider</button>
         </form>

@endsection