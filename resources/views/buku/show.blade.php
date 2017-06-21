@extends('databasebuku')
@section('content')
                    <h1>Data Buku Perpustakaan</h1>           

<div class="panel panel-default">
                    <div class="panel-heading">        
                        <h3 class="panel-title">Data Buku</h3> 
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>title</th>
                                    <th>author</th>
                                </tr>
                            </thead>
                           <tbody>
                            <tr>
                                <td>{{$ibad->id}}</td>
                                <td>{{$ibad->title}}</td>
                                <td>{{$ibad->author}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <p><a href="{{url('/buku')}}" type="button" class="btn btn-primary">Kembali</a></p>
    </div>
@endsection