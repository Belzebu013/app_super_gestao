@extends('app.layouts.basico')

@section('titulo', 'Cliente')

@section('conteudo')

<div class="conteudo-pagina">
   <div class="titulo-pagina-2">
         <p>Adicionar Pedido ao Produto</p> 
   </div>

   <div class="menu">
      <ul>
         <li><a href="{{ route('pedido.index') }}">Voltar</a></li>
         <li><a href="">Consulta</a></li>
      </ul>
   </div>
   
   <div class="informacao-pagina">

            <h4>Detalhes do Pedido</h4>
            <p>Id do Pedido: {{ $pedido->id }}</p>
            <p>Cliente {{ $pedido->cliente_id }}</p>

      <div style="width: 30%; margin-left: auto; margin-right: auto;">
           <h4>Itens do Pedido</h4>
           <table border="1" width="100%">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nome do Produto</td>
                          <td>Data de inclusão do item no pedido</td>
                    </tr>
                </thead>
                <tbody>
                @foreach ($pedido->produtos as $produto)
                     <tr>
                        <td>{{ $produto->id}}</td>
                        <td>{{ $produto->nome}}</td>
                        <td>{{ $produto->pivot->created_at->format('d/m/Y')}}</td>
                    </tr>
                @endforeach
                </tbody>
           </table>
           @component('app.pedido_produto._components.form_create', ['pedido'=>$pedido, 'produtos'=>$produtos])
           @endcomponent
      </div>
   </div>
</div> 

@endsection