@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dernière étape</div>
                <div class="panel-body">

                    @if(!$user->hasCotisation())
                        <p>Pour l’année 2017, la cotisation a été fixé à 15€ par foyer.
                        Si vous le souhaitez, vous pouvez augmenter ce montant pour soutenir nos actions et faciliter le développement de l’association.</p>
                        <p>Afin de finaliser votre adhésion, il ne vous reste plus qu'à nous faire parvenir votre cotisation, de préférence par virement :</p>
                        <p style="text-align: center;"><img src="{{ url('/images/administratif/rib_fourmiliere.png') }}"></p><br><br>
                        <p>Ou par chèque à :<br>
                        Hélène SCHERMESSER<br>
                        18 rue Champs Verts<br>
                        67880 KRAUTERGERSHEIM</p>
                        <p>Vous recevrez aussi un mail avec nos coordonnées bancaires et postales.</p>
                        <br>
                        <p>La cotisation est valable pour 2 membres d'un même foyer. Vous pouvez nous indiquer quel membre rajouter à votre cotisation en cliquant sur le bouton ci-dessous et en renseignant les noms et prénoms de la personne concernée.</p>
                        <p><a href="{{ url('/account/addpartner') }}"  class="btn btn-primary">Ajouter un partenaire</a></p>
                    @endif

                    @if(!$user->hasvalidemail())
                    <br><br>
                            <p>Vous n'avez pas encore validé votre mail.<br />
                            Pour cela, merci de cliquer sur le lien  présent dans le mail que nous vous avons envoyé.<br />
                            Si vous n'arrivez pas à valider votre mail, merci de nous contacter à l'adresse : contact@laforumilière.org</p>
                    @endif
                    <br><br>
                    <p>Fourmilièrement vôtre</p>

                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection
