@extends('affichage')
@section('content')

    <div class="container">
        <div class="row">Liste des propositions</div><hr/>
        <form id="theform">
            <div class="row">
                <div><label for="prop1">Proposition 1</label></div>
                <div><input type="text" class="form-control" id="prop1"></div>
                <div><label for="oldprop1">Dernière proposition </label></div>
                <div><input type="text" class="form-control" id="oldprop1" value="0" readonly></div>
                <div><button type="button" class="btn btn-primary" id="button1" onclick="clickbutton(1)">Valider</button></div>
            </div>
       </form>
    </div>

    <?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>


<script type="text/javascript">

    ligne=1;

    function clickbutton(lig)
    {
        oldprop = $("#prop"+ligne).val();
        $("#button"+ligne).attr("disabled", true);
        $.ajax({
            url : 'ajax-jquery-content.php',
            type : 'POST',
            data :
            {
                ligne: ligne,
                oldprop: oldprop
            },
            datatype : 'HTML',
            success : function(codehtml,statut)
            {
                //alert(codehtml);
                $("#theform").append(codehtml);
            }
        });

        ligne++;
    };


</script>

@endsection
