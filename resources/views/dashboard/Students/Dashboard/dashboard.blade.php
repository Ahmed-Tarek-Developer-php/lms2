@extends('layouts.master')
@section('css')
    @livewireStyles
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">@lang('words.welcome') {{ Auth::user()->name }}</h2>
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->
@endsection
@section('content')
    <livewire:calendar-student />
@endsection
@section('js')
    @livewireScripts
    @stack('scripts')
@endsection
