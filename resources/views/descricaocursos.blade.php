@extends('template')
@section('content')


@foreach($curso as $cs)
<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">{{$cs->curso}}</span>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
             mdl-textfield--floating-label mdl-textfield--align-right">

            <div class="mdl-textfield__expandable-holder">

            </div>
        </div>
    </div>
</header>

<main class="mdl-layout__content">
    <div class="mdl-grid">
        <div class="descricao mdl-cell">
            <p> {{$cs->descricao}}</p>
            <nav id="menu">
                <ul> 
                    <li><i class="material-icons">date_range</i>  {{ date( 'd M Y' , strtotime($cs->inicio))}} 
                        
                        @if ($cs->fim !='')
                           ate {{ date( 'd M Y' , strtotime($cs->fim))}}
                        @endif
                    </li>

                    <li><i class="material-icons">alarm</i>   {{ date( 'h:m' , strtotime($cs->horainicial))}} 
                  
                           às {{ date( 'h:m' , strtotime($cs->horafinal))}}
                       
                        
                        
                    </li>
                    <li><i class="material-icons">location_on</i>{{$cs->endereco}},{{$cs->numero}},{{$cs->cidade}}</li>
                    <li><i class="material-icons">attach_money</i>{{$cs->valor}}</li>
                    <li><i class="material-icons">label</i>{{$cs->categoria}}</li>
                </ul> 
            </nav>
            <div class="button">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored ">
                Inscrição
            </button>
            </div>
        </div>
    </div>
    @endforeach
</main>

@endsection




