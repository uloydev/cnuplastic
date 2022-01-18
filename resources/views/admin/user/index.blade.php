@extends('layouts.admin')

@section('header', 'Data User')

@section('content')
    <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Whatsapp Number</th>
                            <th>Date of Birth</th>
                            <th>Join at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="https://wa.me/62{{ $user->whatsapp }}"
                                    title="Click to chat user via whatsapp">
                                        {{ $user->whatsapp }}
                                    </a>
                                </td>
                                <td>{{ date_format(date_create($user->date_of_birth), 'd M Y') }}</td>
                                <td>
                                    <time datetime="{{ $user->created_at }}">
                                        {{ $user->created_at->format('d F Y') }}
                                    </time>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
