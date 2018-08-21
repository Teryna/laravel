@extends('layouts.app')

@section('content')
<a href="{{ route('contacts.create') }}"><h2>Добавить контакт</h2></a>

<div>
    <table>
        <thead>
            <th>ФИО</th>
            <th>Номер телефона</th>
            <th>Действие</th>
        </thead>
        <tbody>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->phone }}</td>
                <td>
                    <form mathod="POST" action="{{ route('contacts.edit', ['contact' => $contact->id]) }}">
                    <button type="submit">Изменить</button>
                    </form>
                    <form method="POST" action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}" >
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>
@endsection




</html>