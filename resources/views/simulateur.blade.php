@extends('affichage')
@section('content')


    <div id="simulateur">
    <div class="container d-flex">
        <div>
           <div class="card text-white bg-primary col-10">
            <h2 class="card-header">Suez :</h2>
              <div class="card-body">
                <h4 class="card-title">Lancez vous dans la chute des prix !</h4>
                   <p class="card-text">En cliquant sur ce bouton, vous serez enmener vers votre liste de devis négociable</p>
                      <a class="btn btn-primary btn-lg"  href="rules" role="button">C'est parti !</a>
           </div>
          </div>
        </div>
        <img src="../images/personal-96865_1920.jpg" style="background: center / contain no-repeat;" alt="foule" class="col-6">
    </div>
</div>
    @endsection


