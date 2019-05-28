<tr>
    <td> < {{ $max }} KG >= {{ $min }} KG </td>
    {{-- Mal F SC--}}
    <td>
        @foreach($poussin->where('weight', '<', $max)->where('weight', '>=', $min) as $p)
            @foreach($p->types as $t)
                @if($t->name == "semi-contact")
                    <small>{{$p->nom}} {{$p->prenom}} ({{$p->weight}} kg)</small>
                @endif
            @endforeach
        @endforeach
    </td>
  
    {{-- Mal F LC--}}
    <td>
        @foreach($poussin->where('weight', '<', $max)->where('weight', '>=', $min) as $p)
            @foreach($p->types as $t)
                @if($t->name == "light-contact")
                    <small> {{$p->nom}} {{$p->prenom}} ({{$p->weight}} kg)</small>
                @endif
            @endforeach
        @endforeach
    </td>
  
    {{-- Mal  FEM /  KL --}}
    <td>
        @foreach($poussin->where('weight', '<', $max)->where('weight', '>=', $min) as $p)
            @foreach($p->types as $t)
                @if($t->name == "kick-light")
                    <small> {{$p->nom}} {{$p->prenom}} ({{$p->weight}} kg)</small>
                @endif
            @endforeach
        @endforeach
    </td>
   
    {{-- Mal  FEM /  TL --}}
    <td>
        @foreach($poussin->where('weight', '<', $max)->where('weight', '>=', $min) as $p)
            @foreach($p->types as $t)
                @if($t->name == "thai-light")
                    <small> {{$p->nom}} {{$p->prenom}} ({{$p->weight}} kg)</small>
                @endif
            @endforeach
        @endforeach
    </td>
   
</tr>