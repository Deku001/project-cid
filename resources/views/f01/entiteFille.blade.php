<div class="row">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="3">LES ENTITES GEREES PAR VOTRE COMPTE</th>
        </tr>
        <tr>
            <th>Type</th>
            <th>Désignation entité</th>
            <th>Type de compte</th>
        </tr>
        </thead>
        <tbody>

        @foreach($entitesFille as $entiteFille)

            <tr>
                <td>{{ $entiteFille->typeEntite->NOM_TYPE }}</td>
                <td>{{ $entiteFille->NOM}}</td>
                @foreach($entiteFille->entitecomptes as $compte)</td>
                <td>{{ $compte->profil->LIBELLE }}   </td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>