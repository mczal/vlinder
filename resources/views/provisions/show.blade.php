@extends('layouts.admin')
@section('title','Provisions | AdminVlinder')
@section('header', 'Provision Detail')
@section('subheader', '#'.$provision->name)
@section('content')
    <p>
        <a href="{{ url('/admin/provisions/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create new </a>
        <a href="{{ url('/admin/provisions' ) }}" class="btn btn-success"><i class="fa fa-bars"></i> View List</a>
    </p>
    <div class="box box-solid">
        <div class="box-header">
            <h3 class="box-title">General</h3>
        </div>
        <div class="box-body text-left">
            <div class="container">
                <!-- ID -->
                <div class="row">
                    <div class="form-group">
                        <label for="id" class="col-sm-2 control-label">ID</label>

                        <div class="col-sm-6">
                            {{ $provision->id }}
                        </div>
                    </div>
                </div>

                <!-- Name -->
                <div class="row">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-6">
                            {{ $provision->name }}
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="row">
                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Description</label>

                        <div class="col-sm-6">
                            {{ $provision->description }}
                        </div>
                    </div>
                </div>

                <!-- Order -->
                <div class="row">
                    <div class="form-group">
                        <label for="order" class="col-sm-2 control-label">Order</label>

                        <div class="col-sm-6">
                            {{ $provision->order }}
                        </div>
                    </div>
                </div>

                <!-- Created At -->
                <div class="row">
                    <div class="form-group">
                        <label for="provision-created" class="col-sm-2 control-label">Created At</label>

                        <div class="col-sm-6">
                            {{ $provision->created_at }}
                        </div>
                    </div>
                </div>

                <!-- Updated At -->
                <div class="row">
                    <div class="form-group">
                        <label for="provision-created" class="col-sm-2 control-label">Updated At</label>

                        <div class="col-sm-6">
                            {{ $provision->updated_at }}
                        </div>
                    </div>
                </div>

                <!-- Control -->
                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-2">
                            <form action="{{ url('/admin/provisions/' . $provision->id) }}" method="post" style="display: inline">
                                {!! csrf_field() !!}
                                {!! method_field('DELETE') !!}

                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this item?')"><i class="fa fa-trash-o"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
