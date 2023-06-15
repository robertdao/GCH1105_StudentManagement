@extends('layout.layout')
@section('title','Edit Major')
@section('content')
<form action="/major/{{$major->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Major Name</label>
        <input type="text" class="form-control" id="name" value="{{$major->name}}" name="name" placeholder="Major Name">
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Major Subject</label>
        <input type="text" class="form-control" id="subject" value="{{$major->subject}}" name="subject" placeholder="Major Subject">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</form>

@endsection