@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователи</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Пользователи</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <table class="table table-striped table-hover mx-3 table-sm">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="text-center">{{ $user->id }}</td>
                                <td class="text-center">{{ $user->name }}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">
                                    <a href="{{ route('users.edit', $user) }}" class="text-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    &nbsp;
                                    <a href="#" class="text-danger"
                                       onclick="event.preventDefault(); document.getElementById('user-delete-{{ $user->id }}').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form action="{{ route('users.destroy', $user) }}" method="POST"
                                          id="user-delete-{{ $user->id }}">
                                        @csrf @method('delete')
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

@endsection
