@extends ("layout");
@section("contenido")
    <fieldset class=" p-5 m-40 border border-yellow-800 w-1/2">
    <form   class="text-3xl" action="{{route('facturas.update',[$factura])}}" method="POST">
        @method('PUT')
        @csrf
        <label for="pedido">Pedido</label>
        <input class="border m-2 border-green-800 text-3xl text-blue-700" type="text" name="id"
               disabled value="{{$factura->id}} "><br />
        <label for="pedido">Pedido</label>
        <input class="border m-2 border-green-800 text-3xl text-blue-700" type="text" name="pedido"
               value="{{$factura->pedido}}"><br />
        <label for="pedido">Producto</label>
        <input class="border m-2 border-green-800 text-3xl text-blue-700"type="text" name="producto"
               value="{{$factura->producto}}"><br />
        <label for="pedido">Cliente</label>
        <select class="border m-2 border-green-800 text-3xl text-blue-700" name="cliente" id="">

            @foreach($clientes as $cliente)
                @php
                    $selected=null;
                @endphp
                @if ($factura->cliente == $cliente->id)
                    @php
                      $selected="selected"
                    @endphp
                @endif
                <option {{$selected}} value="{{$cliente->id}}">{{$cliente->id}}</option>
            @endforeach
        </select>
        <br />
        <label for="pedido">Unidades</label>
        <input class="border m-2 border-green-800 text-3xl text-blue-700" type="number" name="unidades"
               value="{{$factura->unidades}}"><br />
        <label for="pedido">Precio base</label>
        <input class="border m-2 border-green-800 text-3xl text-blue-700" type="number" name="precio_base"
               value="{{$factura->precio_base}}"><br />
        <label for="pedido">total</label>
        <input class="border m-2 border-green-800 text-3xl text-blue-700" type="number" name="total"
               value="{{$factura->total}}"><br />

        <input  class="border m-2 border-green-800 text-3xl text-blue-700" type="submit" value="Actualizar">
    </form>
    </fieldset>
@endsection
