@extends('databasebuku')
@section('content')
    <div class="panel panel-primary">
        <div class="panel-heading">
        Data Buku
        </div> <!--panel heading-->
    <div class="panel-body">
        <div class="col-md-12">
        Data Buku Perpustakaan Jurusan Elektro<br><br>
        <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>author</th>
        </tr>
        @foreach($ibad as $bukuku)
        <tr>
            <td>{{$bukuku->id}}</td>
            <td>{{$bukuku->title}}</td>
            <td>{{$bukuku->author}}</td>
        </tr>
        @endforeach
        </table>
        </div>
    </div> <!--panel body-->
    </div> <!--panel class-->
        <span id="halaman"></span><br>
        <a id="printbutton" type="button" class="btn btn-default btn-md" onclick="printpage();"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>Cetak</a>
        <a id="tutup" type="button" class="btn btn-primary btn-md" onclick="window.close();"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Batal</a>
        <script type="text/javascript">
        function printpage()
            var printbutton = document.getElementById("printpagebutton");
            var tutup = document.getElementById("tutup");
            var halaman = document.getElementById("halaman");
             window.print();

@endsection