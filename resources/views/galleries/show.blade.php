@extends('layouts.admin')
@section('title','Galleries | AdminVlinder')
@section('header', 'Galleries Detail')
@section('subheader', '#'.$gallery->name)
@section('content')
    <p>
        <a href="{{ url('/admin/galleries/create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create new </a>
        <a href="{{ url('/admin/galleries' ) }}" class="btn btn-success"><i class="fa fa-bars"></i> View List</a>
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
                            {{ $gallery->id }}
                        </div>
                    </div>
                </div>

                <!-- Name -->
                <div class="row">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-6">
                            {{ $gallery->name }}
                        </div>
                    </div>
                </div>

                <!-- Order -->
                <div class="row">
                    <div class="form-group">
                        <label for="order" class="col-sm-2 control-label">Order</label>

                        <div class="col-sm-6">
                            {{ $gallery->order }}
                        </div>
                    </div>
                </div>

                <!-- Image Count -->
                <div class="row">
                    <div class="form-group">
                        <label for="count" class="col-sm-2 control-label">Images Count</label>

                        <div class="col-sm-6">
                            {{ count($gallery->images) }}
                        </div>
                    </div>
                </div>

                <!-- Created At -->
                <div class="row">
                    <div class="form-group">
                        <label for="client-created" class="col-sm-2 control-label">Created At</label>

                        <div class="col-sm-6">
                            {{ $gallery->created_at }}
                        </div>
                    </div>
                </div>

                <!-- Updated At -->
                <div class="row">
                    <div class="form-group">
                        <label for="client-created" class="col-sm-2 control-label">Updated At</label>

                        <div class="col-sm-6">
                            {{ $gallery->updated_at }}
                        </div>
                    </div>
                </div>

                <!-- Control -->
                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-2">
                            <form action="{{ url('/admin/galleries/' . $gallery->id) }}" method="post" style="display: inline">
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

    <div class="row">
      <div class="col-lg-6">
        <form class="form-horizontal" action="{{url('/admin/images/create')}}" method="get">
          <input type="hidden" name="gallery_id" value="{{$gallery->id}}"/>
          <button class="btn btn-success" type="submit"><i class="fa fa-file-image-o"> </i> <span> Insert New Images</span></button>
        </form>
      </div>
    </div>
    <!-- if count images > 0 -->
    @if(count($gallery->images) > 0)
    <div class="row">
    <div class="col-lg-6">
      <div class="box box-solid">
        <div class="box-header">
            <h3 class="box-title">Images</h3>
        </div>
        <div class="box-body text-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                      <!-- here -->
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:250px;height:200px;">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          {{--*/ $i = 0 /*--}}
                          @foreach($gallery->images as $image)
                            @if($i <= 0)
                              <li data-target="#carousel-example-generic" data-slide-to="{{ $i++ }}" class="active"></li>
                            @else
                              <li data-target="#carousel-example-generic" data-slide-to="{{ $i++ }}"></li>
                            @endif
                          @endforeach
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" style="width:250px;height:200px;">
                          {{--*/ $i = 1 /*--}}
                          @foreach($gallery->images as $image)
                            @if($i <= 1)
                              <div class="item active">
                            @else
                              <div class="item">
                            @endif
                            <img src="{{$image->file}}" style="width:250px;height:200px;" alt="..."/>
                            <div class="carousel-caption">
                                <h3>Edit Image #{{$i++}}</h3>
                            </div>
                            </div>
                          @endforeach
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                      </div> <!-- Carousel -->                      
                    </div>
                    <!-- endhere -->
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
  @endif
@endsection
