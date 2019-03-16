@extends('layouts.app')

@section('content')
    <table>
        <tr>
            <th>姓名</th>
            <th>学号</th>
            <th>院系</th>
        </tr>
        @foreach($people as $person)
            <tr>
                <td>{{ $person->name }}</td>
                <td>{{ $person->user_id }}</td>
                <td>{{ $person->department }}</td>
            </tr>
        @endforeach
    </table>
@endsection