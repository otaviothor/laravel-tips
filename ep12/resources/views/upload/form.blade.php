<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <p>
        <input type="file" name="arquivo" />
    </p>
    <p>
        <button type="submit">Enviar</button>
    </p>
</form>
