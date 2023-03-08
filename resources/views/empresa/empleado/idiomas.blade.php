@extends ("layout")
@section("contenido")
    <x-layout.menu class="justify-start">
        <x-form.a_href href="{{route('facturas.create')}}" class="mx-2">Crear factura</x-form.a_href>
        <x-form.a_href href="{{route('main')}}" class="mx-2">Volver</x-form.a_href>

    </x-layout.menu>
@endsection
@section("contenido")
    <h1>Idiomas</h1>
    <tabla rol="" consulta="" filas_serializadas='@json($filas)' campos_serializados='@json($campos)' nombre_tabla="Idiomas">
    </tabla>
@endsection
