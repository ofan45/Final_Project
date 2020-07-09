@extends('layouts/master')
@section('content')  

  <div class="card card-info">
    <div class="card-header ">
      <h3 class="card-title">Input Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form  action="/pertanyaan" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Input Judul">
            </div>
            <div class="form-group">
              <label for="isi">Pertanyaan</label>
              <textarea id="isi" name="isi"></textarea>
            </div>
           
            <div class="form-group">
                <label for="tag">Tag</label>
                <input type="tag" class="form-control" id="tag" name="tag" placeholder="Tag">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
    </form>
  </div>
@stop

@push('scripts')
<script src="{{asset('/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script type='text/javascript'> 
   tinymce.init({
        selector: 'textarea#isi',
    });
</script>
@endpush