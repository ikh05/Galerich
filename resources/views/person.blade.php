@extends('layouts.main')

@section('container')
  <div class="row">
    <div class="card border-light px-0">
      <div class="card-header">
        <h1>{{ $person->name }}</h1>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-4">Username</div>
          <div class="col-1">:</div>
          <div class="col">{{ $person->username }}</div>
        </div>
        <div class="row">
          <div class="col-4">Email</div>
          <div class="col-1">:</div>
          <div class="col">{{ $person->email }}</div>
        </div>
        <div class="row">
          <div class="col-4">Collection</div>
          <div class="col-1">:</div>
          <div class="col">{{ count($person->image) }}</div>
        </div>
      </div>
      <div class="card-footer d-flex justify-content-end">
        @foreach ($person->socialMedia as $socialMedia)
          <a href="{{ $socialMedia->platform->url.$socialMedia->url }}" class="link-underline link-underline-opacity-0 me-2"><i class="{{ $socialMedia->platform->icon }}"></i></a>
        @endforeach
      </div>
    </div>
  </div>
  @includeIf('partials.gallery', ['images' => $person->image])
@endsection


