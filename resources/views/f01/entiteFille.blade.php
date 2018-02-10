<div class="row" id="showProjets">
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
                <td><a href={{route('entite.projets' ,['id' => $entiteFille->ID_ENTITE])}} class="lunchShowProjects">{{ $entiteFille->NOM}} </a><</td>
                @foreach($entiteFille->entitecomptes as $compte)</td>
                <td>{{ $compte->profil->LIBELLE }}   </td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){

        $('.lunchShowProjects').on('click',function(e){
            e.preventDefault();
            url = this.getAttribute('href');
            $("#showProjets").load(url);
            return false;
        });

    });
</script>