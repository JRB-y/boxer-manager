<div class="id-tatami-poussin col-md-12">
    <table class="table table-bordered table-hover text-light mt-4">
        <tr>
            <td rowspan="2"  class="text-center"><h4 class="title mt-4">Ecole</h4></td>
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
            @php
                switch ($i) {
                    case 0:
                        $max = 28;
                        $min = 0;
                        break;
                    case 1:
                        $max = 32;
                        $min = 28;
                        break;
                    case 2:
                        $max = 37;
                        $min = 32;
                        break;
                    case 3:
                        $max = 42;
                        $min = 37;
                        break;
                    case 4:
                        $max = 47;
                        $min = 42;
                        break;
                    case 5:
                        $max = 500 ;
                        $min = 47;
                        break;
                    default:
                        # code...
                        break;
                }
            @endphp
            @component('tatami.components.table-line', ['max' => $max, 'min' => $min, 'poussin' => $ecole])
            @endcomponent
        @endfor

    </table>

</div>