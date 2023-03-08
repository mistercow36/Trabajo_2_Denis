@extends ("layout")
@section("menu")
    <x-layout.menu class="justify-start">
        <x-form.a_href href="{{route('facturas.create')}}" class="mx-2">Crear factura</x-form.a_href>
        <x-form.a_href href="{{route('main')}}" class="mx-2">Volver</x-form.a_href>

    </x-layout.menu>
@endsection
@section("contenido")
    <table>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Telefono</td>
        </tr>
        @foreach ($filas as $fila)
            <tr>
                <td>{{$fila->id}}</td>
                <td>{{$fila->nombre}}</td>
                <td>{{$fila->telefono}}</td>
            </tr>
        @endforeach
    </table>
    {{ $filas->links()}}

@endsection
