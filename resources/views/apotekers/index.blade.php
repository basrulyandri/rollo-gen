@extends('layouts.backend.master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Apotekers</h2>
       
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <button href="#" class="btn btn-primary" data-toggle="modal" data-target="#apotekerModal">Add apoteker</button>
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
                <th>nama</th>
                <th>alamat</th>
                <th>telpon</th>
                <th style="width:10%;">Actions</th>
        
                    </tr>
                </thead>
            <tbody>
            @foreach($apotekers as $apoteker)
            <tr>
            <td>{{$apoteker->id}}</td>
                    <td>{{$apoteker->nama}}</td>
                    <td>{{$apoteker->alamat}}</td>
                    <td>{{$apoteker->telpon}}</td>
                    <td>
                <a class="btn btn-xs btn-white" href="{{route("apotekers.show",$apoteker)}}" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i>
                </a>

                <a class="btn btn-xs btn-warning" href="{{route("apotekers.edit",$apoteker)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>
                </a>
                <a class="btn btn-xs btn-danger" href="{{route("apotekers.destroy",$apoteker)}}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i>
                </a>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            {{ $apotekers->links() }}
        </div>
    </div>   
</div>

<div class="modal fade" id="apotekerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Apoteker</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         {!!Form::open(['route' =>'apotekers.store', 'class' => 'form-horizontal'])!!}
         <div class="form-group{{$errors->has("nama") ? " has-error" : ""}}">
                      {!!Form::label("nama","Nama",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("nama",old("nama"),["class" => "form-control","placeholder" => "Nama"])!!}
                        @if($errors->has("nama"))
                          <span class="help-block">{{$errors->first("nama")}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{$errors->has("alamat") ? " has-error" : ""}}">
                      {!!Form::label("alamat","Alamat",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("alamat",old("alamat"),["class" => "form-control","placeholder" => "Alamat"])!!}
                        @if($errors->has("alamat"))
                          <span class="help-block">{{$errors->first("alamat")}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{$errors->has("telpon") ? " has-error" : ""}}">
                      {!!Form::label("telpon","Telpon",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("telpon",old("telpon"),["class" => "form-control","placeholder" => "Telpon"])!!}
                        @if($errors->has("telpon"))
                          <span class="help-block">{{$errors->first("telpon")}}</span>
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