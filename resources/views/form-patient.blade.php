@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Submit a link</h1>
            <form action="/submit-form-patient" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name...">
                </div>
                <div class="form-group">
                    <label for="url">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Age...">
                </div>
                <div class="form-group">
                    <label for="description">Chuan doan</label>
                    <textarea class="form-control" id="temp" name="temp" placeholder="temp"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection