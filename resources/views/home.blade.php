@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    @include('pages.hero')
    @include('pages.about')
    @include('pages.skills')
    @include('pages.projects')
    @include('pages.experience')
    @include('pages.contact')

@endsection