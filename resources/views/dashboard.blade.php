@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <section class="page-header">
        <h1>Dashboard</h1>
        <p>Welcome back, {{ $username }}!</p>
    </section>

    
    <section class="statistics">
        <div class="stat-card">
            <h3>Total Characters</h3>
            <p>{{ $totalCharacters }}</p>
        </div>

        <div class="stat-card">
            <h3>Total Projects</h3>
            <p>{{ $totalProjects }}</p>
        </div>
    </section>

    <section class="recent-characters">
        <h2>Recently Added Characters</h2>

        @foreach ($characters as $character)
            <div class="character-item">
                <h3>{{ $character['name'] }}</h3>
                <p>{{ $character['type'] }} | {{ $character['role'] }}</p>
            </div>
        @endforeach
    </section>

    <section class="quick-access">
        <h2>Quick Access</h2>

        <a href="{{ route('pengelolaan', ['username' => $username]) }}">
            Manage Characters
        </a>
    </section>

@endsection
