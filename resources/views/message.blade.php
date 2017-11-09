@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
         <div class="panel-heading">
           	{{ \Auth::user()->name }}'s Message From {{ $message->sender->name}}
        </div>

        <div class="panel-body">
         @if (session('status'))
           <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        <table class="table">
        <tr>
       	{{ $message->body }}
       	</tr>
    	<br>
    	<br>
    	<a href="/create">Compose New Evil Message</a>
    	<br>
    	<br>
    	<a href="/home">Back to {{ \Auth::user()->name }}'s Messages</a>
    	<br>
    	

       </div>
      </div>
     </div>
    </div>
</div>
@endsection
