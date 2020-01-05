<!--PARAMETTRES DE LA NEGOCIATION-->
@extends('layouts.app')
@section('content')
<div id="containerparam" class="col-9 pb-5 pt-4 rounded text-center ml-auto mr-auto mt-5 bg-primary" >
        <h2 id="parameters-title" class="font-weight-bold text-center">Création d'un Devis</h2>

        <hr class="mt-3 mb-4 border-dark col-8">

    <form method="post" action="" class="needs-validation" novalidate>
        <div class="farm row m-auto">

                <div class="cardinput col-4 m-auto">
                        <label for="numberQuote" class="titi control-label">Numéro du devis :</label>
                        <div class="input-group">
                        <input type="text" class="form-control field" id="numberQuote" placeholder="Entrez le numéro de devis" value="" required>
                       </div>
                        <div class="valid-feedback">
                          Validé !
                        </div>
                      </div>

                      <div class="cardinput col-4 m-auto">
                            <label for="userMailQuote" class="titi control-label">Nom de l'utilisateur :</label>
                            <div class="input-group">
                            <input type="text" class="form-control field" id="userMailQuote" placeholder="Entrez le nom de l'utilisateur" value="" required>
                           </div>
                            <div class="valid-feedback">
                              Validé !
                            </div>
                          </div>

                          <hr class="my-3 col-10">


                <div class="cardinput col-4">
                  <label for="validationCustom01" class="titi control-label">Prix du devis :</label>
                  <div class="input-group">
                  <input type="text" class="form-control field" id="validationCustom01" placeholder="Entrez votre prix initial" value="" required>
                  <div class="input-group-append">
                    <span class="input-group-text unit">€</span>
                  </div>
                </div>
                  <div class="valid-feedback">
                    Validé !
                  </div>
                </div>

          <div class="cardinput col-4">
            <label for="validationCustom02" class="titi">Nombre de trappes</label>
            <input type="number" class="form-control field nbt" id="validationCustom02" placeholder="Entrez votre nombre d'essais" value="" required>
            <div class="valid-feedback">
                Validé !
            </div>
          </div>

          <div class="cardinput col-4">
            <label for="validationCustom03" class="titi">Taux de la trappe</label>
            <div class="input-group mb-3">
            <input type="number" class="form-control field" id="validationCustom03" placeholder="Entrez le taux de trappe" value="" required>
            <div class="input-group-append">
              <span class="input-group-text unitpour">%</span>
            </div>
        </div>
            <div class="valid-feedback">
                Validé !
            </div>
          </div>

          <hr class="my-3 col-10">

          <div class="cardinput col-4">
            <label for="validationCustom04" class="titi">Nombre de tours</label>
            <input type="number" class="form-control field" id="validationCustom04" placeholder="Entrez votre nombre de tours" value="" required>
            <div class="valid-feedback">
                Validé !
            </div>
          </div>

          <div class="cardinput col-4">
            <label for="validationCustom05" class="titi">Prix minimum de vente</label>
            <div class="input-group">
            <input type="text" class="form-control field" id="validationCustom05" placeholder="Entrez votre prix minimum" value="" required>
            <div class="input-group-append">
              <span class="input-group-text unitmin">€</span>
            </div>
        </div>
            <div class="valid-feedback">
                Validé !
            </div>
            </div>

          <div class="cardinput col-4">
            <label for="validationCustom06" class="titi">Temps de négociation (en min)</label>
            <input type="number" class="form-control field" id="validationCustom06" placeholder="Entrez la durée de négociation" value="" required>
            <div class="valid-feedback">
                Validé !
            </div>
          </div>
        </div>
    <!--/////////////////////CARD CONFIRM////////////////////////////////-->
    <!--ptit popup qui s'affiche pour confirmer la validation des donnés du tableau-->
    <div class="card text-white bg-secondary mt-4 col-5" id="confirm"style="display:none;">
        <div class="card-body">
            <h4 class="card-title font-weight-bold">Validation</h4>
            <p class="card-text font-weight-bold">Voulez-vous confirmer ces paramètres ?</p>
            <div class="d-flex justify-content-between">
            <a href="#" class="width_button btn btn-success font-weight-bold" id="conf">Je confirme</a>
            <a href="#" class="width_button btn btn-warning text-white font-weight-bold" id="back">Retour</a>
            </div>
        </div>
    </div>
      <button class="btn btn-success text-white font-weight-bold rounded-pill mr-auto ml-auto mt-5 mb-5 p-2" type="submit" id="valid">Valider vos paramètres</button>
        </form>
    </div>
    @endsection
