<div class="id-tatami-poussin col-md-12">
    <table class="table table-bordered table-hover text-light mt-4">
        <tr>
            <td class="text-center"><h4 class="title ">{{ $name }}</h4></td>
            <td class="text-center"><b>Semi Contact</b></td>
            <td class="text-center"><b>Light Contact</b></td>
            <td class="text-center"><b>Kick Light</b></td>
            <td class="text-center"><b>Thai Light</b></td>
        </tr>

        {{-- -23 KG --}}
        @for ($i = 0; $i < $length; $i++)
            @component('tatami.components.table-line-no-sex', ['max' => $weights[$i]['max'], 'min' => $weights[$i]['min'], 'poussin' => $boxers])
            @endcomponent
        @endfor

    </table>

</div>