@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: {{ trans('service::service_admin.page_edit') }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        {!! !empty($service->service_id) ? '<i class="fa fa-pencil"></i>'.trans('service::service_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('service::service_admin.form_add') !!}
                    </h3>
                </div>
                <!-- ERRORS TITLE  -->
                {{-- model general errors from the form --}}
                @if($errors->has('service_title') )
                    <div class="alert alert-danger">{!! $errors->first('service_title') !!}</div>
                @endif
                <!-- /END ERROR TITLE -->
                
                 <!-- ERRORS ND  -->
                 @if($errors->has('service_nd') )
                    <div class="alert alert-danger">{!! $errors->first('service_nd') !!}</div>
                @endif
                <!-- /END ERROR ND -->
               
                <!-- LENGTH NAME  -->
                @if($errors->has('name_unvalid_length') )
                    <div class="alert alert-danger">{!! $errors->first('name_unvalid_length') !!}</div>
                @endif
                <!-- /END LENGTH NAME -->

                {{-- successful message --}}
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                <div class="alert alert-success">{{$message}}</div>
                @endif

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <!-- SERVICE ID TEXT-->
                            <h4>{!! trans('service::service_admin.form_heading') !!}</h4>
                            {!! Form::open(['route'=>['admin_service.post', 'id' => @$service->service_id],  'files'=>true, 'method' => 'post'])  !!}
                            <!-- SERVICE ID TEXT-->

                            <!-- SERVICE NAME TEXT-->
                            @include('service::service.elements.text', ['title' => 'service_title','nd' => 'service_nd' ])                           <!-- /END SAMPLE NAME TEXT -->
                            {!! Form::hidden('id',@$service->service_id) !!}
                            <!-- /END SERVICE  TEXT-->
                            

                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('admin_service.delete',['id' => @$service->id, '_token' => csrf_token()]) !!}"
                               class="btn btn-danger pull-right margin-left-5 delete">
                                Delete
                            </a>
                            <!-- DELETE BUTTON -->

                            <!-- SAVE BUTTON -->
                            {!! Form::submit('Save', array("class"=>"btn btn-info pull-right ")) !!}
                            <!-- /SAVE BUTTON -->

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='col-md-4'>
            @include('service::service.admin.service_search')
        </div>

    </div>
</div>
@stop