<form action="#" method="" class="form-delete">
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    <a href="{{ route('khach-hang.edit', ['id' => $data->id]) }}" class="btn btn-info waves-effect waves-light"><i
            class="far fa-edit"></i></a>
    <button type="submit" class="btn btn-danger waves-effect waves-light" ><i class="far fa-trash-alt"></i></a>
</form>