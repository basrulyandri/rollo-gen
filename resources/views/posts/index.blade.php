@extends('layouts.backend.master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Posts</h2>
       
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <button href="#" class="btn btn-primary" data-toggle="modal" data-target="#postModal">Add post</button>
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
                <th>title</th>
                <th>content</th>
                <th>category_id</th>
                <th>created_at</th>
                <th style="width:10%;">Actions</th>
        
                    </tr>
                </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
            <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->created_at->format("d M Y")}}</td>
                <td>
                <a class="btn btn-xs btn-white" href="{{route("posts.show",$post)}}" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i>
                </a>

                <a class="btn btn-xs btn-warning" href="{{route("posts.edit",$post)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-xs btn-danger" href="{{route("posts.destroy",$post)}}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i>
                </a>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>   
</div>

<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         {!!Form::open(['route' =>'posts.store', 'class' => 'form-horizontal'])!!}
         <div class="form-group{{$errors->has("title") ? " has-error" : ""}}">
                      {!!Form::label("title","Title",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("title",old("title"),["class" => "form-control","placeholder" => "Title"])!!}
                        @if($errors->has("title"))
                          <span class="help-block">{{$errors->first("title")}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{$errors->has("content") ? " has-error" : ""}}">
                      {!!Form::label("content","Content",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("content",old("content"),["class" => "form-control","placeholder" => "Content"])!!}
                        @if($errors->has("content"))
                          <span class="help-block">{{$errors->first("content")}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{$errors->has("category_id") ? " has-error" : ""}}">
                      {!!Form::label("category_id","Category_id",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("category_id",old("category_id"),["class" => "form-control","placeholder" => "Category_id"])!!}
                        @if($errors->has("category_id"))
                          <span class="help-block">{{$errors->first("category_id")}}</span>
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