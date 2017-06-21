@extends('databasebuku')
@section('content')
    <title>Form di Bootstrap</title>
<style>
    html {
        position: relative;
        min-height: 100%;
    }
    body {
        margin-bottom: 60px;
    }
    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 60px;
        background-color: #f5f5f5;
    }
    body > .container{
        padding: 60px 15px 0;
    }
    .container .text-muted{
        margin: 20px 0;
    }
    .footer > .container{
        padding-right: 15px;
        padding-left: 15px;
    }
    code {
        font-size: 80%;
    }
</style>
</head>

<div class="panel panel-default">
	<div class="panel-heading">
          <h3 class="panel-title">Edit data buku : {{$ibad->author}}</h3> 
     </div>
                    <div class="panel-body">
                        <form method="POST" action="{{url('buku/'.$ibad->id)}}" accept-charset="UTF-8">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="exampleTextInput">Title</label>
                                <input name="title" value="{{$ibad->title}}" class="form-control" placeholder="title">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextArea">Author</label>
                                <input name="author" value="{{$ibad->author}}" class="form-control" placeholder="author">
                            </div>
                            <p>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="{{url('/buku')}}" type="button" class="btn btn-primary">Batal</a>
        </p>
            
	</div> 

       <!--  <div class="row"> -->
         <!--    <div class="col-sm-4">  -->
                   

@endsection