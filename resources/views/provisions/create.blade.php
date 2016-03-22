@extends('layouts.admin')

@section('title','Provisions | AdminVlinder')
@section('header', 'Create Provisions')
@section('subheader', 'Create New Provisions')
@section('content')
<p>
    <a href="{{ url('/admin/provisions' ) }}" class="btn btn-primary"><i class="fa fa-bars"></i> View List</a>
</p>
<div class="box box-solid">
    <div class="box-header">
        <h3 class="box-title">General</h3>
    </div>
    <div class="box-body text-left">
        <form class="form-horizontal" action="{{ url('/admin/provisions') }}" method="post">
            {!! csrf_field() !!}
            @include('commons.error')

            <!-- Name -->
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" value="{{ isset($provision->name) ? $provision->name : old('name') }}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <!-- Description -->
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-2 control-label">Description</label>

                <div class="col-sm-6">
                    <textarea id="description" class="form-control" name="description" rows="8" cols="40">{{ isset($provision->description) ? $provision->description : old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <!-- Order -->
            <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                <label for="order" class="col-sm-2 control-label">Order</label>

                <div class="col-sm-6">
                    <input type="number" name="order" id="order" class="form-control" value="{{ isset($provision->order) ? $provision->order : old('order') }}">
                    @if ($errors->has('order'))
                        <span class="help-block">
                            <strong>{{ $errors->first('order') }}</strong>
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
