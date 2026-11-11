@extends('layouts.app')

@section('title', 'Character Management')

@section('content')

    <section class="page-header">
        <h1>Character Management</h1>
        <p>Manage and organize your characters, {{ $username }}.</p>
    </section>

    <section class="character-management">

        <h2>Character Directory</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Entity Type</th>
                    <th>Species</th>
                    <th>Project</th>
                    <th>Role</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($characters as $character)
                    <tr>
                        <td>{{ $character['id'] }}</td>
                        <td>{{ $character['name'] }}</td>
                        <td>{{ $character['type'] }}</td>
                        <td>{{ $character['species'] }}</td>
                        <td>{{ $character['project'] }}</td>
                        <td>{{ $character['role'] }}</td>
                        <td>{{ $character['status'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </section>

@endsection
