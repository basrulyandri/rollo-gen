@extends('layouts.backend.master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Categories</h2>
       
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <button href="#" class="btn btn-primary" data-toggle="modal" data-target="#categoryModal">Add category</button>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content">
	<div class="ibox float-e-margins">
        
        <div class="ibox-content">
            <table class="table">
                <thead>
                    <tr>
                    <th>id</th>
                <th>name</th>
                <th>created_at</th>
                <th style="width:10%;">Actions</th>
        
                    </tr>
                </thead>
            <tbody>
            @foreach($categories as $category)
            <tr>
            <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at->format("d M Y")}}</td>
                <td>
                <a class="btn btn-xs btn-white" href="{{route("categories.show",$category)}}" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i>
                </a>

                <a class="btn btn-xs btn-warning" href="{{route("categories.edit",$category)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-xs btn-danger" href="{{route("categories.destroy",$category)}}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i>
                </a>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            {{ $categories->links() }}
        </div>
    </div>   
</div>

<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         {!!Form::open(['route' =>'categories.store', 'class' => 'form-horizontal'])!!}
         <div class="form-group{{$errors->has("name") ? " has-error" : ""}}">
                      {!!Form::label("name","Name",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("name",old("name"),["class" => "form-control","placeholder" => "Name"])!!}
                        @if($errors->has("name"))
                          <span class="help-block">{{$errors->first("name")}}</span>
                        @endif
                      </div>
                    </div>
                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save">
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>
@stop