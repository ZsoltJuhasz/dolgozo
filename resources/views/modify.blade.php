<div>
    <h1>A módosított dolgozók adatai megjelenítve</h1>

    <form action="{{route('edit', $worker)}}" method="POST">
        @csrf
        @method("PUT")
        <label for="name"> Név: </label>
        <input type="text" name="name" value="{{$worker->name}}">

        <label for="city"> Város: </label>
        <input type="text" name="city" value="{{$worker->city}}">

        <label for="birth"> Születési dátum: </label>
        <input type="text" name="birthdate" value="{{$worker->birthdate}}">

        <label for="salary"> Fizetés: </label>
        <input type="text" name="salary" value="{{$worker->salary}}">

        <button type="submit">Mentés</button>
    </form>

</div>