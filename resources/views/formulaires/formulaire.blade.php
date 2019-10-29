@extends('affichage')
@section('content')


<div class="jumbotron text-center">
      <form>
            <fieldset>
              <h1 class="display-5">Formulaire de saisies de paramétres</h1>
              <hr class="my-4">

              <div class="row">
              <div class="col-7 m-auto">
                    <label class="col-form-label" for="inputDefault">Numéro de Devis</label>
                    <input class="form-control" name="quoteNb" placeholder="Entrez votre Numéro de Devis" id="inputDefault" type="text" required>
                  </div>


              <div class="col-6">
                    <label class="control-label">Prix de base</label>
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <input class="form-control" type="text" placeholder="Prix de base de votre devis" name="price">
                        <div class="input-group-append">
                                <span class="input-group-text">€</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-6">
                        <label class="control-label">Prix minimum</label>
                        <div class="form-group">
                          <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Le prix minimum que vous souhaitez" name="priceMin">
                            <div class="input-group-append">
                                    <span class="input-group-text">€</span>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="col-6">
                            <label class="form-label" for="inputDefault">Durée (minutes)</label>
                         <select class="custom-select" id="inputGroupSelect02" name="rounds">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                          </select>
                        </div>



      <div class="col-6">
          <label class="form-label" for="inputDefault">Nombre de tours</label>
       <select class="custom-select" id="inputGroupSelect02" name="rounds">
          <option selected>avant fin des negociation</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
        </select>
      </div>
    </div>
    <hr class="my-3">
              <button type="submit" class="btn btn-primary">Envoyer</button>
            </fieldset>
          </form>
        </div>

        <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th class="bg-warning" >Prix de Depart</th>
                    <th class="bg-primary" >Prix acheteur</th>
                    <th class="bg-danger">Offre disponible</th>
                    <th class="bg-success">Taux De Frappe</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Round 1</th>
                    <td>35000</td>
                    <td>31000</td>
                    <td>33250</td>
                  </tr>
                </tbody>
              </table>

        @endsection



