<div>
    @include("search")
    @if(count($workers))

    <h1>Dolgozók adatainak a törlése és módosításaT</h1>
    <table>
        <tr>
            <th>Név</th>
            <th>Város</th>
            <th>Születési dátum</th>
            <th>Fizetés</th>
        </tr>
        @foreach($workers as $worker)
        <tr>
            <td>{{$worker->name}}</td>
            <td>{{$worker->city}}</td>
            <td>{{$worker->birthdate}}</td>
            <td>{{$worker->salary}}</td>

            <form action="{{route('modify', $worker)}}" method="GET">
                <td><button>Módosítás</button></td>
            </form>

            <form action="{{route('delete', $worker)}}" method="POST">
                @method('DELETE')
                @csrf
                <td><input type="submit" value="Törlés" /></td>
            </form>
        </tr>
        @endforeach
    </table>
    @else
    <p>Nincs még dolgozó</p>
    @endif
</div>