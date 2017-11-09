@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
         <div class="panel-heading">
           	<h2>{{ \Auth::user()->name }}'s Message From {{ $message->sender->name}}</h2>
        </div>

        <div class="panel-body">
         @if (session('status'))
           <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        <table class="table">
        <tr>
       	<h4>{{ $message->body }}</h4>
       	</tr>
    	<br>
    	<br>
    	<a href="/create">
			<button class="btn btn-primary">CREATE NEW EVIL MESSAGE!!!</button>
		</a>
    	<br>
    	<br>
    	<a href="/home">
			<button class="btn btn-primary">BACK TO EVIL INBOX!!!</button>
		</a>
    	<br>
    	

       </div>
      </div>
     </div>
    </div>
</div>
@endsection
