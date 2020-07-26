<form action="{{ route('loai-san-pham.delete') }}" method="POST" class="form-delete">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{ $data->id }}">
    <a href="{{ route('loai-san-pham.edit', ['id' => $data->id]) }}" class="btn btn-info waves-effect waves-light"><i
            class="far fa-edit"></i></a>
    <button type="submit" class="btn btn-danger waves-effect waves-light delete-loai-sp"><i class="far fa-trash-alt"></i></a>
</form>
