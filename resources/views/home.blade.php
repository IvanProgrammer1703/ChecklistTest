@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Карточки</div>
                    <div class="card-body">
                        <form>
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter name">
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
