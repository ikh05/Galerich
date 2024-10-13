
@extends('layouts.main')
@section('container')
    <div class="row">
      @foreach ($people as $i => $person)
        <div class="col-6 p-1">
            <div class="card {{ $i%2===1 ? 'text-start' : 'text-end' }} h-100 " style="background-image: url('img/{{ $person->lastImage->href }}'); background-position: center; background-repeat: no-repeat; background-blend-mode: overlay; background-size: cover;">
              <div class="card-header bg-opacity-50 bg-dark">
                <h5 class="card-title">{{ $person->name }}</h5>
                <a href="/person/{{ $person->username }}" class="link-underline link-underline-opacity-0 link-underline-opacity-75-hover">{{ '@'.$person->username }}</a>
              </div>
              <div class="card-body">
                <p class="card-text">{{ $person->identitas }}</p>
              </div>
              <div class="card-footer bg-dark bg-opacity-25">
                @foreach ($person->socialMedia as $socialMedia)
                  <a href="{{ $socialMedia->platform->url.$socialMedia->url }}" class="link-underline link-underline-opacity-0 me-2"><i class="{{ $socialMedia->platform->icon }}"></i></a>
                @endforeach
              </div>
            </div>
        </div>
      @endforeach
    </div>
@endsection
