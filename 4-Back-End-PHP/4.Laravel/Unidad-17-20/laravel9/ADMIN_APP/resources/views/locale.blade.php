@extends('layouts.app')
@section('content')
    <h2 class="mt-3 text-center">{{ __('messages.hola mundo') }}</h2>
    <h2 class="mt-3 text-center">{{ __('messages.mi nombre es', ['name' => $name]) }} {{ trans_choice('messages.y tengo', $years, ['year' => 1991]) }}</h2> {{--Equivalencias entre trans y __ --}}
    <div class="mt-3">
        <a href="{{ route('change-locale',['locale' => 'es']) }}">{{ __('translateoptions.spanish', [], 'es') }}</a>
        <a href="{{ route('change-locale',['locale' => 'en']) }}">{{ __('translateoptions.english', [], 'en') }}</a>
    </div>
@endsection