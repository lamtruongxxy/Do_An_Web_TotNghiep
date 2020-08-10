<form action="{{ route('admin-delete') }}" method="POST" class="form-delete">
    @csrf
    @method('DELETE')

    <input type="hidden" name="id" value="{{ $data->id }}">
    <a href="{{ route('admin-chi-tiet', ['id' => $data->id]) }}" class="btn btn-primary waves-effect waves-light" @if ($data->trang_thai
        !=0) {{ 'hidden' }} @endif ><i class="far fa-eye"></i></a>

    <input type="hidden" name="id" value="{{ $data->id }}">
    <a href="{{ route('admin-edit', ['id' => $data->id]) }}" class="btn btn-info waves-effect waves-light" @if ($data->trang_thai
        !=0) {{ 'hidden' }} @endif ><i class="far fa-edit"></i></a>

    <button type="submit" class="btn btn-danger waves-effect waves-light delete-admin" @if ($data->trang_thai
        !=0) {{ 'disabled' }} @endif ><i class="far fa-trash-alt"></i></a>
</form>