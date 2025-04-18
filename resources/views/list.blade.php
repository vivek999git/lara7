@extends('layouts.app')

@section('title', 'List')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">List</h2>

    <table class="table table-bordered table-hover mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                
                                                <th>Name</th>
                                                 <th>Email</th>
                                                
                                                <th>Phone</th>
                                                <th>Country</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($users as $user)
                                        <tr>
                                                <td> {{ $user->name }}</td>
                                                <td> {{ $user->email }}</td>
                                                <td> {{ $user->phone }}</td>
                                                <td> {{ $user->company }}</td>

                                        </tr>
                                        @empty
                                            <li class="list-group-item">No users found.</li>
                                        @endforelse
                                        </tbody>
                                    </table>

   
</div>
@endsection
