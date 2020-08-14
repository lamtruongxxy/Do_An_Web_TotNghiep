<form action="{{ route('san-pham.delete') }}" method="POST">
    @csrf
    @method('DELETE')

    <input type="hidden" name="id" value="{{ $data->id }}">
    <a href="{{ route('san-pham.chi-tiet-thong-so', ['id' => $data->id]) }}" class="btn btn-primary waves-effect waves-light"><i class="far fa-eye"></i></a>

    <input type="hidden" name="id" value="{{ $data->id }}">
    <a href="{{ route('san-pham.edit-sp', ['id' => $data->id]) }}" class="btn btn-info waves-effect waves-light" target="_blank"><i class="far fa-edit"></i></a>
    
    <!-- <input type="hidden" name="id" value="{{ $data->id }}">
    <a href="#" class="btn btn-success waves-effect waves-light"><i class="icon-settings"></i></a> -->

    <button type="submit" class="btn btn-danger waves-effect waves-light delete-san-pham" @if ($data->trang_thai
        === 1) {{ 'disabled'}}@endif><i class="far fa-trash-alt"></i></a>
</form>