@extends('Layouts.main')

@section('content')

@section('title', ' | League Page')

<p class="default-text"> {{ $data['intro'] }}</p>
<p class="default-text"> {{ $data['sport'] }}</p>

@endsection