@extends('layouts.admin')
@section('title','Galleries | AdminVlinder')
@section('header', 'Galleries')
@section('subheader', 'Galleries List')
@section('content')
<p>
    <a href="{{ url('/admin/galleries/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create new</a>
</p>
<div class="box box-solid">
    <div class="box-body">
        @include('commons.success')
        <p>
            <form action="{{ url('/admin/galleries') }}" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" name="name" value="" id="name" placeholder="Enter Name to search ....">
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-flat" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </p>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Order</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
            </thead>
            <tbody>
                @if(count($galleries) == 0)
                    <tr>
                        <td colspan="5" align="center">No data found ...</td>
                    </tr>
                @else
                    @foreach($galleries as $gallery)
                        <tr>
                            <td>{{ $gallery->name }}</td>
                            <td>{{ $gallery->order }}</td>
                            <td>{{ date('d M Y H:i:s', strtotime($gallery->created_at)) }}</td>
                            <td>{{ date('d M Y H:i:s', strtotime($gallery->updated_at)) }}</td>
                            <td>
                                <a href="{{ url('/admin/galleries/'.$gallery->id) }}" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                <a href="{{ url('/admin/galleries/'.$gallery->id.'/edit') }}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                <form action="{{ url('/admin/galleries/'.$gallery->id.'') }}" method="post" style="display:inline">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this item?')"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
{!! $galleries->links() !!}
@endsection
