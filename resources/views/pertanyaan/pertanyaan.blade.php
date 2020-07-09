@extends('layouts/master')

@section('content')  

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pertanyaan Terbaru</h6>
    </div>
    <div class="card-body">
      <div>
        <a href="/pertanyaan/create" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Tambah Baru</a>
      </div>
        
        <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th style="width: 20%;">Opsi</th>
                <th>Judul Pertanyaan</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data as $p)
                   <tr>
                       <td>
                           <a href="/pertanyaan/{{$p->id}}/edit" class="btn btn-primary btn-sm" role="button">Edit</a>
                          <form action="/artikel/{{$p->id}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" class="btn btn-danger">Hapus</button>
                          </form>
                       </td> 
                       <td>
                            <table style="width: 100%; border: none; ">
                              <tr >
                                <td style="border: none;">{{ $p->judul }}></td>
                              </tr>
                              <tr >
                                <td style="border: none;">asasa</td>
                              </tr>
                            </table>
                       </td>
                   </tr>
               @endforeach
               </tbody>
          </table>
        </div>
    </div>
</div>

@stop
