@extends('layouts.admin')
@section('title','Clients | AdminVlinder')
@section('header', 'Client Detail')
@section('subheader', '#'.$client->name)
@section('content')
    <p>
        <a href="{{ url('/admin/clients/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create new </a>
        <a href="{{ url('/admin/clients' ) }}" class="btn btn-success"><i class="fa fa-bars"></i> View List</a>
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
                            {{ $client->id }}
                        </div>
                    </div>
                </div>

                <!-- Name -->
                <div class="row">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-6">
                            {{ $client->name }}
                        </div>
                    </div>
                </div>

                <!-- Order -->
                <div class="row">
                    <div class="form-group">
                        <label for="order" class="col-sm-2 control-label">Order</label>

                        <div class="col-sm-6">
                            {{ $client->order }}
                        </div>
                    </div>
                </div>

                <!-- Created At -->
                <div class="row">
                    <div class="form-group">
                        <label for="client-created" class="col-sm-2 control-label">Created At</label>

                        <div class="col-sm-6">
                            {{ $client->created_at }}
                        </div>
                    </div>
                </div>

                <!-- Updated At -->
                <div class="row">
                    <div class="form-group">
                        <label for="client-created" class="col-sm-2 control-label">Updated At</label>

                        <div class="col-sm-6">
                            {{ $client->updated_at }}
                        </div>
                    </div>
                </div>

                <!-- Control -->
                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-2">
                            <form action="{{ url('/admin/clients/' . $client->id) }}" method="post" style="display: inline">
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
