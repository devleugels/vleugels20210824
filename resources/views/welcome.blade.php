@extends('layouts.vleugelslayout')

@section('content')


<div class="container-fluid" style="width:100%">
    <div class="modal fade" role="dialog" aria-hidden="false">
        <!-- include('cookieConsent::index') -->
    </div>   
    <!-- include('partials.flash') -->

    @php
    // dd( session()->all());
    @endphp
    
    <h1 class="text-center w-screen">welkom</h1>

    <x-test></x-test>
</div>

@endsection
