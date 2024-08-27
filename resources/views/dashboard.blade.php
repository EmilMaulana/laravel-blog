@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4"> Welcome back, {{ auth()->user()->name }}</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>                
@endsection