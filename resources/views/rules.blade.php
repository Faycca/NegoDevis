@extends('affichage')
@section('content')

<br class="my-2">

<div class="container">
    <h3 style="font-size:1.8em" class="display-5 bg-light text-dark text-center p-3 mb-3">Réglement</h3>
    <hr class="my-1">
    <div class="my-3 bg-light">
      <div class="col-10" style="height: 80px;">
                    <p id="rules" class="mb-5" style="font-size:1.4em">Cette page va vous expliquez les regles a adopté lors d'une negociation</p>
      </div>

        <div class="my-5 row d-flex justify-content-around">
            <button class="btn btn-warning" id="back"><-precedent</button>
            <button class="btn btn-primary" id="next">suivant -></button>
        </div>
    </div>
    <hr class="my-1">
         <div class="ml-auto mr-auto d-flex align-items-center justify-content-around ">
         <span class="display-4 text-danger">&#9888;</span>
       <a class="btn btn-danger text-white mb-2" style="font-size:1.1em" href="formulaire" role="button"> En cliquant sur ce bouton, vous acceptez le règlement présenté ci-dessus et serez amené à la négociation</a>
       <span class="display-4 text-danger">&#9888;</span>
         </div>
</div>

<script>
let buttonBack = document.getElementById('back');
let buttonNext = document.getElementById('next');
let ecran = document.getElementById('rules');
let count = -1;
tab = [
    'Regle n°1',
    'Regle n°2',
    'Regle n°3',
    'Regle n°4',
    'Regle n°5'
];
function suivant(){
    ecran.textContent = tab[ count +=1 ];
    if(count > 4 ){
        ecran.textContent = tab[4];
        count = 4;
    }
    console.log(count);
}
function precedent(){
    ecran.textContent = tab[ count -=1 ];
    if(count < 1 ){
        ecran.textContent = tab[0];
        count = 0;
    }
    console.log(count);
}
buttonNext.addEventListener('click', suivant);
buttonBack.addEventListener('click', precedent);
</script>



@endsection
