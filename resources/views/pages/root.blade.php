@extends('layouts.app')

@section('content')
    <form action="{{ route('person.show') }}" method="post">
        {{ csrf_field() }}
        <label for="method">查询方法：</label>
        <select name="method" id="method">
            <option value="0">学号</option>
            <option value="1">姓名</option>
        </select>
        <label for="value">内容：</label>
        <input type="text" name="value" id="value">
    </form>
@endsection