@extends('layouts.admin')

@section('title','Clients | AdminVlinder')
@section('header', 'Create Clients')
@section('subheader', 'Create New Clients')
@section('content')
<p>
    <a href="{{ url('/admin/clients' ) }}" class="btn btn-primary"><i class="fa fa-bars"></i> View List</a>
</p>
<div class="box box-solid">
    <div class="box-header">
        <h3 class="box-title">General</h3>
    </div>
    <div class="box-body text-left">
        <form class="form-horizontal" action="{{ url('/admin/clients') }}" method="post">
            {!! csrf_field() !!}
            @include('commons.error')

            <!-- Name -->
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" value="{{ isset($client->name) ? $client->name : old('name') }}">
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
                    <input type="number" name="order" id="order" class="form-control" value="{{ isset($client->order) ? $client->order : old('order') }}">
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
