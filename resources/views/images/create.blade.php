@extends('layouts.admin')

@section('title','Images | AdminVlinder')
@section('header', 'Create Images')
@section('subheader', 'Create New Images')
@section('content')
<p>
    <a href="{{ url('/admin/galleries' ) }}" class="btn btn-primary"><i class="fa fa-bars"></i> View List</a>
</p>
<div class="box box-solid">
    <div class="box-header">
        <h3 class="box-title">General</h3>
    </div>
    <div class="box-body text-left">
        <form class="form-horizontal" enctype="multipart/form-data" action="{{ url('/admin/images') }}" method="post">
            {!! csrf_field() !!}
            @include('commons.error')
            <input type="hidden" name="gallery_id" value="{{$gallery_id}}">

            <!-- Name -->
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" value="{{ isset($image->name) ? $image->name : old('name') }}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <!-- Order -->
            <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                <label for="order" class="col-sm-2 control-label">Order</label>

                <div class="col-sm-6">
                    <input type="number" name="order" id="order" class="form-control" value="{{ isset($image->order) ? $image->order : old('order') }}">
                    @if ($errors->has('order'))
                        <span class="help-block">
                            <strong>{{ $errors->first('order') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <!-- File -->
            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                <label for="file" class="col-sm-2 control-label">File</label>

                <div class="col-sm-6">
                    <input type="file" name="file" id="file" value="{{ isset($image->file) ? $image->file : old('file') }}">
                    @if ($errors->has('file'))
                        <span class="help-block">
                            <strong>{{ $errors->first('file') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-3 col-sm-offset-2">
                    <button type="submit" name="button" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>
    </div><!-- /.box-body -->
</div>
@endsection
