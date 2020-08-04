<form action="{{ route('thong-so.delete') }}" method="POST" class="form-delete">
        @csrf
        @method('DELETE')

        <input type="hidden" name="id" value="{{ $data->id }}">
        <a href="{{ route('thong-so.edit', ['id' => $data->id]) }}" class="btn btn-info waves-effect waves-light">
                <i class="far fa-edit"></i></a>
        <button type="submit" class="btn btn-danger waves-effect waves-light delete-thong-so"><i class="far fa-trash-alt"></i></button>
</form>