<table class="table table-bordered">
    <thead>
    <tr>
        <th colspan="4"  class="text-center">LISTE DES PROJETS</th>
        <th colspan="6"  class="text-center">DEGRE D'AVANCEMENT</th>
    </tr>
    <tr>
        <th class="text-center">Réference</th>
        <th class="text-center">Date</th>
        <th class="text-center">Désignation</th>
        <th class="text-center">something</th>
        <th class="text-center">Idée</th>
        <th class="text-center">Maturation</th>
        <th class="text-center">Projet à lancer </th>
        <th class="text-center">Projet en Cours</th>
        <th class="text-center">Projet à Terminer </th>
        <th class="text-center">Projet clôturé</th>
    </tr>
    </thead>
    <tbody>

    @foreach($projets as $projet)

        <tr>
            <td>{{ $projet->REF_PROJET }}</td>
            <td>{{ $projet->DATE_DEBUT }}</td>
            <td>{{ $projet->NOM_PROJET }}</td>
            <td>{{$projet->maxdegree}} </td>
            @if ($projet->maxdegree < 1)
                <td></td>
            @elseif ($projet->maxdegree == 1)
                <td style="background-Fini: #5e5e5ek">X</td>
            @else
                <td style="background-Fini: #5e5e5ek">Fini</td>
            @endif
        <!-- ************************************-->
            @if ($projet->maxdegree < 2)
                <td></td>
            @elseif ($projet->maxdegree == 2)
                <td style="background-Fini: #5e5e5ek">En Cours</td>
            @else
                <td style="background-Fini: #5e5e5ek">Fini</td>
            @endif
        <!-- ************************************-->
            @if ($projet->maxdegree < 3)
                <td></td>
            @elseif ($projet->maxdegree == 3)
                <td style="background-Fini: #5e5e5ek">En Cours</td>
            @else
                <td style="background-Fini: #5e5e5ek">Fini</td>
            @endif
        <!-- ************************************-->
            @if ($projet->maxdegree < 4)
                <td></td>
            @elseif ($projet->maxdegree == 4)
                <td style="background-Fini: #5e5e5ek">En Cours</td>
            @else
                <td style="background-Fini: #5e5e5ek">Fini</td>
            @endif
        <!-- ************************************-->
            @if ($projet->maxdegree < 5)
                <td></td>
            @elseif ($projet->maxdegree == 5)
                <td style="background-Fini: #5e5e5ek">En Cours</td>
            @else
                <td style="background-Fini: #5e5e5ek">Fini</td>
            @endif
        <!-- ************************************-->
            @if ($projet->maxdegree < 7)
                <td></td>
            @elseif ($projet->maxdegree == 7)
                <td style="background-Fini: #5e5e5ek">En Cours</td>
            @else
                <td style="background-Fini: #5e5e5ek">Fini</td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>