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
                        {!! !empty($service->service_category_id) ? '<i class="fa fa-pencil"></i>'.trans('service::service_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('service::service_admin.form_add') !!}
                    </h3>
                </div>
                <!-- ERRORS NAME  -->
                {{-- model general errors from the form --}}
                @if($errors->has('service_category_title') )
                    <div class="alert alert-danger">{!! $errors->first('service_category_title') !!}</div>
                @endif
                <!-- /END ERROR NAME -->
                
                <!-- ERRORS ND  -->
                @if($errors->has('service_category_nd') )
                    <div class="alert alert-danger">{!! $errors->first('service_category_nd') !!}</div>
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
                            <!-- SERVICE CATEGORIES ID -->
                            <h4>{!! trans('service::service_admin.form_heading') !!}</h4>
                            {!! Form::open(['route'=>['admin_service_category.post', 'id' => @$service->service_category_id],  'files'=>true, 'method' => 'post'])  !!}
                            <!--END SERVICE CATEGORIES ID  -->

                            <!-- SERVICE TEXT-->
                            @include('service::service_category.elements.text', ['title' => 'service_category_title','nd' => 'service_category_nd'])
                            <!-- /END SERVICE TEXT -->
                            
                            {!! Form::hidden('id',@$service->service_category_id) !!}

                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('admin_service_category.delete',['id' => @$service->id, '_token' => csrf_token()]) !!}"
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