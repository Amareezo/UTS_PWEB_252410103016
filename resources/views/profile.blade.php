@extends('layouts.app')

@section('title', 'My Profile')

@section('content')

    <section class="page-header">
        <h1>My Profile</h1>
        <p>Manage your personal information.</p>
    </section>

    <section class="profile-information">
        <h2>Account Information</h2>

        <div class="profile-item">
            <h3>Username</h3>
            <p>{{ $username }}</p>
        </div>
    </section>

@endsection
