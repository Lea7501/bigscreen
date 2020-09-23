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
                   <input type="email" class="form-control" name="email" placeholder="lea@bigscreen.com" value="{{ old('email') }}" />
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
               <label for="genre">Entrez votre genre</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" value="Homme" class="sev_check">
                      <label class="form-check-label">Homme</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" value="Femme" class="sev_check">
                      <label class="form-check-label">Femme</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" value="no gender" class="sev_check">
                      <label class="form-check-label">Prefere ne pas répondre</label>
                  </div>
                </div>

                <div class="form-group pt-4">
                   <h4>Question 4/20 </h4>
                   <label for="foyer">Nombre de personne dans votre foyer (adulte & enfants)</label>
                   <input type="number" class="form-control" name="foyer" placeholder="1" min="0" max="10" value="{{ old('foyer') }}">
                </div>

                <div class="form-group pt-4">
                   <h4>Question 5/20 </h4>
                   <label for="profession">Votre profession</label>
                   <input type="text" class="form-control" name="profession" value="{{ old('profession') }}">
                </div>

                <div class="form-group pt-4">
                   <h4>Question 6/20 </h4>
                   <label for="casque_actuel">Quel marque de casque VR utilisez vous ?</label>
                   <select class="form-control" name="casque_actuel">
                    <option selected>Occulus Rift/s</option>
                    <option>HTC Vive</option>
                    <option>Windows Mixed Reality</option>
                    <option>PSVR</option>
                  </select>
                </div>

                <div class="form-group pt-4">
                   <h4>Question 7/20 </h4>
                   <label for="magasin_application">Sur quel magasin d’application achetez vous des contenus VR ?</label>
                   <select class="form-control" name="magasin_application">
                    <option selected>SteamVR</option>
                    <option>Occulus store</option>
                    <option>Viveport</option>
                    <option>Playstation VR</option>
                    <option>Playstation VR</option>
                    <option>Windows store</option>
                  </select>
                </div>

                <div class="form-group pt-4">
                   <h4>Question 8/20 </h4>
                   <label for="casque_futur">Quel casque envisagez vous d’acheter dans un futur proche ?</label>
                   <select class="form-control" name="casque_futur">
                    <option selected>Occulus Quest</option>
                    <option>Occulus Go</option>
                    <option>HTC Vive Pro</option>
                    <option>Autre</option>
                    <option>Aucun</option>
                  </select>
                </div>
                
                <div class="form-group pt-4">
                   <h4>Question 9/20 </h4>
                   <label for="utilisation_foyer">Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?</label>
                   <input type="number" class="form-control" name="utilisation_foyer" placeholder="0" min="0" max="10" value="{{ old('utilisation_foyer') }}">
                </div>

                <div class="form-group pt-4">
                   <h4>Question 10/20 </h4>
                   <label for="utilisation_bigscreen">Vous utilisez principalement Bigscreen pour :</label>
                   <select class="form-control" name="utilisation_bigscreen">
                    <option selected>regarder des émissions TV en direct</option>
                    <option>regarder des films</option>
                    <option>jouer en solo</option>
                    <option>jouer en team</option>
                  </select>
                </div>

                <div class="form-group pt-4">
                   <h4>Question 11/20 </h4>
                   <label for="point_image">Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?</label>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_image" value="1" checked>
                      <label class="form-check-label" >1</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_image" value="2">
                      <label class="form-check-label" >2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_image" value="3">
                      <label class="form-check-label" >3</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_image" value="4">
                      <label class="form-check-label" >4</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_image" value="5">
                      <label class="form-check-label" >5</label>
                   </div>
                </div>

                <div class="form-group pt-4">
                   <h4>Question 12/20 </h4>
                   <label for="point_confort">Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?</label>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_confort" value="1" checked>
                      <label class="form-check-label" for="inlineRadio1">1</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_confort" value="2">
                      <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_confort" value="3">
                      <label class="form-check-label" for="inlineRadio1">3</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_confort" value="4">
                      <label class="form-check-label" for="inlineRadio2">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_confort" value="5">
                      <label class="form-check-label" for="inlineRadio1">5</label>
                   </div>
                </div>

                <div class="form-group pt-4">
                   <h4>Question 13/20 </h4>
                   <label for="point_connection">Combien donnez vous de point pour la connection réseau de Bigscreen ?</label>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_connection" value="1" checked>
                      <label class="form-check-label" for="inlineRadio1">1</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_connection" value="2">
                      <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_connection" value="3">
                      <label class="form-check-label" for="inlineRadio1">3</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_connection" value="4">
                      <label class="form-check-label" for="inlineRadio2">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_connection" value="5">
                      <label class="form-check-label" for="inlineRadio1">5</label>
                   </div>
                </div>

                <div class="form-group pt-4">
                   <h4>Question 14/20 </h4>
                   <label for="point_graphisme">Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?</label>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_graphisme" value="1" checked>
                      <label class="form-check-label" for="inlineRadio1">1</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_graphisme" value="2">
                      <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_graphisme" value="3">
                      <label class="form-check-label" for="inlineRadio1">3</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_graphisme" value="4">
                      <label class="form-check-label" for="inlineRadio2">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_graphisme" value="5">
                      <label class="form-check-label" for="inlineRadio1">5</label>
                   </div>
                </div>

                <div class="form-group pt-4">
                   <h4>Question 15/20 </h4>
                   <label for="point_audio">Combien donnez vous de point pour la qualité audio dans Bigscreen ?</label>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_audio" value="1" checked>
                      <label class="form-check-label" for="inlineRadio1">1</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_audio" value="2">
                      <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_audio" value="3">
                      <label class="form-check-label" for="inlineRadio1">3</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_audio" value="4">
                      <label class="form-check-label" for="inlineRadio2">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="point_audio" value="5">
                      <label class="form-check-label" for="inlineRadio1">5</label>
                   </div>
                </div>

                <div class="form-group pt-4">
                   <h4>Question 16/20 </h4>
                   <label for="notification">Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?</label>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="notification" value="oui" checked>
                      <label class="form-check-label" for="inlineRadio1">oui</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="notification" value="non">
                      <label class="form-check-label" for="inlineRadio2">non</label>
                    </div>
                </div>

                <div class="form-group pt-4">
                   <h4>Question 17/20 </h4>
                   <label for="invitation_ami">Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?</label>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="invitation_ami" value="oui" checked>
                      <label class="form-check-label" for="inlineRadio1">oui</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="invitation_ami" value="non">
                      <label class="form-check-label" for="inlineRadio2">non</label>
                    </div>
                </div>

                <div class="form-group pt-4">
                   <h4>Question 18/20 </h4>
                   <label for="enregistrer_emission">Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?</label>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="enregistrer_emission" value="oui" checked>
                      <label class="form-check-label" for="inlineRadio1">oui</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="enregistrer_emission" value="non">
                      <label class="form-check-label" for="inlineRadio2">non</label>
                    </div>
                </div>

                <div class="form-group pt-4">
                   <h4>Question 19/20 </h4>
                   <label for="jeux_exclusifs">Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?</label>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jeux_exclusifs" value="oui" checked>
                      <label class="form-check-label" for="inlineRadio1">oui</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jeux_exclusifs" value="non">
                      <label class="form-check-label" for="inlineRadio2">non</label>
                    </div>
                </div>

                <div class="form-group pt-4">
                   <h4>Question 20/20 </h4>
                   <label for="fonctionnalité_personnelle">Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?</label>
                   <textarea class="form-control" name="fonctionnalité_personnelle" rows="3"></textarea>
                </div>

               <button class="btn btn-primary mb-4 mt-4" type="submit">Valider</button>

         </form>

@endsection