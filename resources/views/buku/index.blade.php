@extends('databasebuku')

@section('content')
<div class="starter-template">
        <h1>Data Buku Perpustakaan</h1>    
      </div>
      <div class="flash-message">
        @foreach(['danger', 'warning', 'success', 'info'] as $pesan)
        @if(Session::has('alert-'.$pesan))
        <p class="alert alert-{{$pesan}}">
            {{Session::get('alert-'.$pesan)}}
            <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times;</a>
            </p>
            @endif
            @endforeach
            </div>
            
       <div class="panel panel-default">
                    <div class="panel-heading">                   
                        <h3 class="panel-title">Data Buku</h3> 
                    </div>
                    <div class="panel-body">
                        <p>Data Buku di Program Studi teknik Informatika</p>
                        <a href="buku/create"><button type="button" class="btn btn-primary" onclick="window.open('mahasiswa/cetak', 'newwindow', 'width=700, height=400');return false;"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</button></a>
                        <a href="buku/cetak"><button type="button" id="printpagebutton" class="btn btn-default"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak</button></a><br><br>
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            @foreach($ibad as $bukuku)
                            <tbody>
                            <tr>
                                <td>{{$bukuku->id}}</td>
                                <td>{{$bukuku->title}}</td>
                                <td><a href={{url('buku/'.$bukuku->id)}}>{{$bukuku->author}}</a></td>
                                 <td>
                                <form method="POST" action="{{('buku/'.$bukuku->id)}}">
                                {{method_field('Delete')}}
                                {{csrf_field()}}
                                
                                <a href={{url('buku/'.$bukuku->id).('/edit')}}><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button></a>
                                
                                <button type="submit"type="button" class="btn btn-danger" onclick="var x = confirm('Hapus?');if(x) {return true;} else {return false;}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus</button>
                                 </form>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach  
                            </table>
               
@endsection