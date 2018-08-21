@extends('layouts.app')

@section('content')
	<form action="{{ route('contacts.update', [$contact->id]) }}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
		<input type="text" name="name" value="{{ $contact->name }}">
		<input type="text" name="phone" value="{{ $contact->phone }}">
		<input type="hidden" name="id" value="{{ $contact->id }}">
		<button type="submit">Изменить</button>
	</form>

	<form action="{{ route('contacts.destroy', [$contact->id]) }}" method="POST">
	    {{ csrf_field() }}
		{{ method_field('DELETE') }}
		<input type="hidden" name="id" value="{{ $contact->id }}">
		<button type="submit">Удалить</button>
	</form>
	
	<div>
	    <h3><a href="{{ route('contacts.index') }}">Вернуться назад</a></h3>
	</div>
@endsection
