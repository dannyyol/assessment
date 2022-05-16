@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                {{-- @dd($countries) --}}


                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>S/N</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>LGA</th>
                            <th>Ward</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($countries as $key => $value)
                            <tr>
                                <td scope="row">{{ $key + 1 }}</td>
                                <td>{{ $value->name }}</td>
                                {{ $value->states->count() }}
                                <td>
                                    {{ $value->states->count() }}
                                </td>
                                <td>
                                    {{ $value->lgas_count }}

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
