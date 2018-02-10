@extends("Layouts/mainLayout")
@section('content')

    <table class="table table-bordered" >
        <thead>
        <tr>
           <th colspan="3" class="text-center">LES ENTITES GEREES PAR VOTRE COMPTE</th>
        </tr>
        <tr>
            <th class="text-center">Type</th>
            <th class="text-center">Désignation entité</th>
            <th class="text-center">Type de compte</th>
        </tr>
        </thead>
        <tbody>

        @foreach($entitesMere as $entiteMere)

            <tr>
                <td class="text-center">{{ $entiteMere->typeEntite->NOM_TYPE }}</td>
                <td class="text-center"><a href={{route('entite.filles' ,['id' => $entiteMere->ID_ENTITE])}} class="lunchShowEntiteFille">{{ $entiteMere->NOM}} ( {{ $entiteMere->entites_fille }}  entité(s) gérée(s) par votre compte ) </a></td>
           @foreach($entiteMere->entitecomptes as $compte)
                <td class="text-center">{{ $compte->profil->LIBELLE }}   </td>
           @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>

    <div id="showEntitesFille">

        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){

            $('.lunchShowEntiteFille').on('click',function(e){
                e.preventDefault();
                url = this.getAttribute('href');
                $("#showEntitesFille").load(url);
                return false;
            });




        });
    </script>
@endsection