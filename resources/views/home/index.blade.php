@extends('layouts.app')

@section('page-title')
    {{ __('LTMD Networks - Nodes') }}
@endsection

@section('content')
    <div class="container py-5">
        @include('messages')
        <div class="card-grid-container">
            <div class="card px-0 border-0 rounded-0 card-max-width">
                <img src="{{ asset('assets/network.jpg') }}" class="card-img-top rounded-0" alt="{{ __('Network') }}">
                <div class="card-body text-center p-4 bg-white">
                    <h3 class="card-title pb-4 pt-3">{{ __('Tinklų paslaugos') }}</h5>
                    <p class="card-text text-muted pb-4" style="font-size: 17px">
                        {{ __('Tinklų planavimas ir projektavimas') }}<br>
                        {{ __('Saugumo auditas ir rizikos valdymas') }}<br>
                        {{ __('LIR atstovavimas ir valdymas') }}<br>
                        {{ __('IPT sprendimai') }}<br>
                        {{ __('Srauto formavimas ir optimizavimas') }}<br>
                        {{ __('VPN sprendimai') }}<br>
                        {{ __('Domenų administravimas') }}<br>
                    </p>
                </div>
            </div>
            <div class="card px-0 border-0 rounded-0 card-max-width">
                <img src="{{ asset('assets/programming.jpg') }}" class="card-img-top rounded-0" alt="{{ __('Programming') }}">
                <div class="card-body text-center p-4 bg-white">
                    <h3 class="card-title pb-4 pt-3">{{ __('Programavimas') }}</h5>
                    <p class="card-text text-muted pb-4" style="font-size: 17px">
                        {{ __('IT konsultacijos, analitika, mokymai') }}<br>
                        {{ __('Programinės įrangos kūrimas') }}<br>
                        {{ __('Interneto svetainių kūrimas') }}<br>
                        {{ __('Mobiliųjų aplikacijų kūrimas') }}<br>
                        {{ __('DB projektavimas ir administravimas') }}<br>
                        {{ __('Didžiųjų duomenų (Big Data) analizė') }}<br>
                        {{ __('Sistemų integravimas ir optimizavimas') }}<br>
                    </p>
                </div>
            </div>
            <div class="card px-0 border-0 rounded-0 card-max-width">
                <img src="{{ asset('assets/cloud.jpg') }}" class="card-img-top rounded-0" alt="{{ __('Cloud') }}">
                <div class="card-body text-center p-4 bg-white">
                    <h3 class="card-title pb-4 pt-3">{{ __('Debesų kompiuterija') }}</h5>
                    <p class="card-text text-muted pb-4" style="font-size: 17px">
                        {{ __('Sistemų architektūra') }}<br>
                        {{ __('Priegloba (hostingas)') }}<br>
                        {{ __('Amazon Web Service platforma') }}<br>
                        {{ __('Debesies architektūra') }}<br>
                        {{ __('Openstack pagrindo privatūs debesys') }}<br>
                        {{ __('Microsoft Azure platforma ir servisai') }}<br>
                        {{ __('Talpinimas (kolokacija) duomenų centre') }}<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        :root {
            --transition: all 400ms ease;
        }

        .card-grid-container {
            display: grid; 
            grid-template-columns: repeat(3, fit-content(400px)); 
            justify-content: center;
            gap: 30px; 
        }

        .card-max-width {
            max-width: 400px;
        }

        @media only screen and (max-width: 1440px) {
            .card-grid-container {
                grid-template-columns: repeat(2, fit-content(400px)); 
            }
        }

        @media only screen and (max-width: 768px) {
            .card-grid-container {
                grid-template-columns: fit-content(500px); 
            }

            .card-max-width {
                max-width: 100%;
            }
        }

        .card {
            box-shadow: 1px 5px 15px rgb(240, 240, 240);
            transition: var(--transition);
        }

        .card .card-img-top {
            transition: var(--transition);
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
        }

        .card:hover {
            box-shadow: 1px 5px 30px rgb(202, 202, 202);
        }

        .card:hover .card-img-top {
            -webkit-filter: grayscale(0%);
            filter: grayscale(0%);
        }
    </style>
@endpush