@extends('layouts.layout')
@section('content')
<div class="text-center py-2">
    <h3>ADD A NEW COMIC</h3>
    <form method="POST" action="{{ route('store') }}" class="py-3">

        @csrf
        @method("POST")

        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="TITLE" name="title">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="DESCRIPTION"  name="description">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="THUMB" name="thumb">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="PRICE" name="price">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="SERIES"  name="series">
            </div>
            <div class="col">
                <input type="date" class="form-control" placeholder="SALE DATE"  name="sale_date">
            </div>
             <div class="col">
                <input type="text" class="form-control" placeholder="TYPE" name="type">
            </div> 
        </div>
        <input class="btn btn-outline-primary mt-4 " type="submit" value="CREATE">
    </form>
</div>

@endsection