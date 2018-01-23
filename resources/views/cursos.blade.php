@extends('template')
@section('content')

    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">Cursos</span>
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                 mdl-textfield--floating-label mdl-textfield--align-right">
                <label class="mdl-button mdl-js-button mdl-button--icon"
                       for="fixed-header-drawer-exp">
                    <i class="material-icons">search</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                    <form  role="search" method="post" action="{{url("pesquisa")}}">
                        {!!csrf_field()!!}
                        <input class="mdl-textfield__input" type="text" name="texto"
                               id="fixed-header-drawer-exp">
                    </form>
                </div>
            </div>
        </div>
    </header>

    <main class="mdl-layout__content">
        <div class="mdl-grid">
            @foreach($cursos as $curso)
            <div class="coluna mdl-cell">
                <div class="categoria">{{$curso->categoria}}</div>
                <div class="curso">
                    <a href="{{url("/descricao/$curso->id")}}"><span>{{$curso->curso}}</span></a>
                </div>
                <div class="cidade">
                    <span class="">{{$curso->cidade}}</span>

                </div>    

                <hr>
                <div id="data"> 
                    @if ($curso->fim !='')
                    {{ date( 'd/m' , strtotime($curso->inicio))}}
                    ate {{ date( 'd/m/Y' , strtotime($curso->fim))}}
                    @else
                    {{ date( 'd M Y' , strtotime($curso->inicio))}}
                    @endif<i class="material-icons">date_range</i>
                </div>
            </div>
            @endforeach
        </div>
    

    </main>
    @endsection
</div>


