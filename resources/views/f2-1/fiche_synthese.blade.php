@extends("Layouts/mainLayout")
@section('content')

    <table class="table table-bordered" >
        <thead>
        <tr>
           <th colspan="12" class="text-center">Fiche de présentation du projet</th>
        </tr>
        </thead>
        
        <tbody>
        
          <tr>
            <th colspan="12">Référence projet : {{ $projet->REF_PROJET }}</th>
          </tr>
          <tr>
            <th colspan="12">Désignation du projet : {{ $projet->NOM_PROJET }}</th>
          </tr>
          <tr>
            <td colspan="12">Date Début : {{ $projet->DATE_DEBUT }}</td>
          </tr>
          <tr>
            <td colspan="12">Description du projet : {{ $projet->DESC_PROJET }}</td>
          </tr>
          <tr>
            <td colspan="6">Equipe projet : 
            <ul>
            @foreach($projet->comptes as $compte)
            <li>{{ $compte->NOM }}   </li>
            @endforeach
            </ul>
            </td>
            <td colspan="6">Principaux livrables : {{ $projet->LIVRABLES }}</td>
          </tr>
          <tr>
            <td colspan="6">Personnel impliqué : {{ $projet->PERSONNEL }}</td>
            <td colspan="6">Partenaires externes impliqués : {{ $projet->PARTENAIRES }}</td>
          </tr>
          <tr>
            <td colspan="12">Budget prévisionnel : {{ $projet->BUDGET_PREV }}</td>
          </tr>
          <tr>
            <td colspan="12"> Durée prévisionnelle : {{ $projet->DUREE_PREV }}</td>
          </tr>
          <tr>
            <td colspan="3">Périodicité suivi</td>
            <td colspan="3">Délais de première relance</td>
            <td colspan="3">Délais de seconde relance</td>
            <td colspan="3">Délais de troisième relance</td>
          </tr>

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