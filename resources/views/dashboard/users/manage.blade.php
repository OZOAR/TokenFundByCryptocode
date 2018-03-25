@extends('layouts.dashboard', ['pageTitle' => __('dashboard.users.title')])

@section('content')
    <!-- Showing users here -->
    @foreach($users as $user)
        {{ $user->getName() }}
    @endforeach
@endsection
