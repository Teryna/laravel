@extends('layouts.app')

@section('content')
  <form action="{{ route('contacts.store') }}" method="POST">
<div>
    {{ csrf_field() }} 
    <p>ФИО</p>
    <input type="text" name="name" id="" value="{{ old('name') }}">
</div>

<div>
    <p>Номер телефона (без пробелов)</p>
    <input type="text" name="phone" id="" value="{{ old('phone') }}">
</div>

<div>
    <button type="submit">Добавить</button>
   
</div>
</form>
@endsection
