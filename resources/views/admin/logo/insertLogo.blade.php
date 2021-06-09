@extends('admin.layout.master')
@section('title', 'Add Logo')
@section('pageTitle') <a href="{{route('logo.add')}}">Add Logo</a> @endsection
@section('parentPageTitle') <a href="{{route('logo.view')}}">Logo</a> @endsection


@section('content')
<div class="row clearfix">
    <div class="col-sm-12 col-md-12 col-lg-12 card">

            <div class="body">
                <div id="errorElement "></div>

                <form action="{{route('logo.store')}}" method="post" class="form-horizontal" id="form" enctype="multipart/form-data">

                @csrf


                    <div class="form-group row">
                        <label for="image" class="col-sm-3 text-right control-label col-form-label">Logo Image</label>
                        <div class="col-md-6">
                            <input name="image" type="file" class="form-control  @error('image') is-invalid @enderror" id="image">

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>
@stop
