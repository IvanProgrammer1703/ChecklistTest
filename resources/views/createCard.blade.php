@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cards</div>
                    <div class="card-body">
                        <form action = "{{route('create.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"  name = "name" class="form-control" placeholder="Enter name">
                            </div>
                            <button type="submit" class="btn btn-primary">create</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection