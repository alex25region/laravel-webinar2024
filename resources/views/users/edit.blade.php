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
                            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Пользователи</a></li>
                            <li class="breadcrumb-item active">Редактирование пользователя</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        @include('users.form', [
                            'action' => route('users.update', $user),
                            'method' => 'put',
                        ])
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
