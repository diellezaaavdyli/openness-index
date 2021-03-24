@extends('dashboard.base')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Questionnaire</div>

                    <div class="card-body">
                        <form action="/questionnaires" method="post">

                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Enter title">
                                <small id="titleHelp" class="form-text text-muted">Give your quesstionare a title!</small>

                                @error('title')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class=" form-group">
                                <label for="category">Category</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Enter category">
                                <small id="titleHelp" class="form-text text-muted">Choose the category.</small>
                                @error('category')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Create Questionnaire</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
