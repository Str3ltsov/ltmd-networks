@extends('layouts.app')

@section('page-title')
    {{ __('LTMD Networks - Contact') }}
@endsection

@section('content')
    <div class="container py-5">
        @include('messages')
        <div class="px-4 px-sm-0">
            <h2 class="mb-4">{{ __('Contact') }}</h4>
            @include('contact.form')
        </div>
    </div>
@endsection