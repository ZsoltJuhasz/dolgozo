<div>
    <h1>Dolgozó kereső ID alapján</h1>

    <form action="search-worker" method="get">
        @csrf
        <input type="number" name="workerId" placeholder="Adjon meg egy ID-t a kereséshez">
        <input type="submit" value="Keresés" />
    </form>
</div>