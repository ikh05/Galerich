@extends('layouts.main')

@section('container')
  <h1 class="text-center">Semua Foto</h1>
  @includeIf('partials.gallery', ['images' => $images])
@endsection


