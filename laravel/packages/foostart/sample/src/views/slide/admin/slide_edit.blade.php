@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: {{ trans('sample::slide_admin.page_edit') }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        {!! !empty($slide->slide_id) ? '<i class="fa fa-pencil"></i>'.trans('sample::slide_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('sample::slide_admin.form_add') !!}
                    </h3>
                </div>

                {{-- model general errors from the form --}}
                @if($errors->has('slide_img') )
                    <div class="alert alert-danger">{!! $errors->first('slide_img') !!}</div>
                @endif
                

                @if($errors->has('name_unvalid_length') )
                    <div class="alert alert-danger">{!! $errors->first('name_unvalid_length') !!}</div>
                @endif

                {{-- successful message --}}
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                <div class="alert alert-success">{{$message}}</div>
                @endif

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <h4>{!! trans('sample::slide_admin.form_heading') !!}</h4>
                            {!! Form::open(['route'=>['admin_slide.post', 'id' => @$slide->slide_id],  'files'=>true, 'method' => 'post'])  !!}


                            <!-- SAMPLE NAME -->
                            <div class="form-group">
    {!! Form::label('Product Image') !!}
    {!! Form::file('image', null) !!}</div>
                            
                            <!-- /SAMPLE NAME -->



                            {!! Form::hidden('id',@$slide->slide_id) !!}


                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('admin_slide.delete',['id' => @$slide->id, '_token' => csrf_token()]) !!}"
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
            @include('sample::slide.admin.slide_search')
        </div>

    </div>
</div>
@stop