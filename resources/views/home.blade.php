@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>{{ \Auth::user()->name }}'s EVIL MESSAGES!!!</h2>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                    <tr>
                        <th></th>
                        <th>From</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                    @foreach ($personal_messages as $message)
                    <tr>
                        <td>
                            @if ($message->is_starred) 
                                <strong>&#9734;</strong>
                            @endif
                        </td>
                        <td>
                            @if($message->is_read)
                                <strong>{{ $message->sender->name }}</strong>
                            @else
                                <i>{{ $message->sender->name }}</i>
                            @endif
                        </td>
                        <td>{{ $message->subject }}</td>
                        <td>
                            @if($message->is_read)
                                <strong><a href="/message/{{$message->id}}">read message</a></strong>
                            @else
                                <a href="/message/{{$message->id}}">read message</a>
                            @endif
                        </td>
                        <td>{{ $message->created_at->toDayDateTimeString() }}</td>
                    </tr>
                    @endforeach
                    <a href="/create"><button class="btn btn-primary">New Message</button></a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

