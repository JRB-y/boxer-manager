<tr>
    <td> < {{ $max }} KG >= {{ $min }} KG </td>
    {{-- Mal F SC--}}
    <td>
        @foreach($poussin->where('weight', '<', $max)->where('weight', '>=', $min) as $p)
            @foreach($p->types as $t)
                @if($t->name == "semi-contact")
                    <div>{{$p->nom}}</div>
                @endif
            @endforeach
        @endforeach
    </td>
  
    {{-- Mal F LC--}}
    <td>
        @foreach($poussin->where('weight', '<', $max)->where('weight', '>=', $min) as $p)
            @foreach($p->types as $t)
                @if($t->name == "light-contact")
                    <div>{{$p->nom}}</div>
                @endif
            @endforeach
        @endforeach
    </td>
  
    {{-- Mal  FEM /  KL --}}
    <td>
        @foreach($poussin->where('weight', '<', $max)->where('weight', '>=', $min) as $p)
            @foreach($p->types as $t)
                @if($t->name == "kick-light")
                    <div>{{$p->nom}}</div>
                @endif
            @endforeach
        @endforeach
    </td>
   
    {{-- Mal  FEM /  TL --}}
    <td>
        @foreach($poussin->where('weight', '<', $max)->where('weight', '>=', $min) as $p)
            @foreach($p->types as $t)
                @if($t->name == "thai-light")
                    <div>{{$p->nom}}</div>
                @endif
            @endforeach
        @endforeach
    </td>
   
</tr>