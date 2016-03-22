@extends('layouts.admin')
@section('title','Provisions | AdminVlinder')
@section('header', 'Provisions')
@section('subheader', 'Provisions List')
@section('content')
<p>
    <a href="{{ url('/admin/provisions/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create new</a>
</p>
<div class="box box-solid">
    <div class="box-body">
        @include('commons.success')
        <p>
            <form action="{{ url('/admin/provisions') }}" method="get">
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
                @if(count($provisions) == 0)
                    <tr>
                        <td colspan="5" align="center">No data found ...</td>
                    </tr>
                @else
                    @foreach($provisions as $provision)
                        <tr>
                            <td>{{ $provision->name }}</td>
                            <td>{{ $provision->order }}</td>
                            <td>{{ date('d M Y H:i:s', strtotime($provision->created_at)) }}</td>
                            <td>{{ date('d M Y H:i:s', strtotime($provision->updated_at)) }}</td>
                            <td>
                                <a href="{{ url('/admin/provisions/'.$provision->id) }}" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                <a href="{{ url('/admin/provisions/'.$provision->id.'/edit') }}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                <form action="{{ url('/admin/provisions/'.$provision->id.'') }}" method="post" style="display:inline">
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
{!! $provisions->links() !!}
@endsection
