<div class="id-tatami-poussin col-md-12">
    <table class="table table-bordered table-hover text-light mt-4">
        <tr>
            <td rowspan="2"  class="text-center"><h4 class="title mt-4">{{ $name }}</h4></td>
            <td colspan="2" class="text-center"><b>Semi Contact</b></td>
            <td colspan="2" class="text-center"><b>Light Contact</b></td>
            <td colspan="2" class="text-center"><b>Kick Light</b></td>
            <td colspan="2" class="text-center"><b>Thai Light</b></td>
        </tr>
        <tr>
            <td  class="text-center">M</td>
            <td class="text-center">F</td>
            <td class="text-center">M</td>
            <td class="text-center">F</td>
            <td class="text-center">M</td>
            <td class="text-center">F</td>
            <td class="text-center">M</td>
            <td class="text-center">F</td>
        </tr>
        {{-- -23 KG --}}
        @for ($i = 0; $i < 6; $i++)
            @component('tatami.components.table-line', ['max' => $ages[$i]['max'], 'min' => $ages[$i]['min'], 'poussin' => $boxers])
            @endcomponent
        @endfor

    </table>

</div>