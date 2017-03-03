@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: {{ trans('sample::faq_admin.page_edit') }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        {!! !empty($faq->faq_id) ? '<i class="fa fa-pencil"></i>'.trans('sample::faq_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('sample::faq_admin.form_add') !!}
                    </h3>
                </div>

                {{-- model general errors from the form --}}
                @if($errors->has('faq_title') )
                    <div class="alert alert-danger">{!! $errors->first('faq_title') !!}</div>
                @endif
                @if($errors->has('faq_nd') )
                    <div class="alert alert-danger">{!! $errors->first('faq_nd') !!}</div>
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
                            <h4>{!! trans('sample::faq_admin.form_heading') !!}</h4>
                            {!! Form::open(['route'=>['admin_faq.post', 'id' => @$faq->faq_id],  'files'=>true, 'method' => 'post'])  !!}


                            <!-- SAMPLE NAME -->
                            <div class="form-group">
                                <?php $faq_title= $request->get('faq_titlename')?$request->get('faq_title'):@$faq->faq_title ?>
                                {!! Form::label('faq_title', trans('sample::faq_admin.title').':') !!}
                                {!! Form::text('faq_title', $faq_title, ['class' => 'form-control', 'placeholder' => trans('sample::faq_admin.title').'']) !!}
                            </div>
                            <div class="form-group">
                                <?php $faq_nd= $request->get('faq_titlename')?$request->get('faq_nd'):@$faq->faq_nd ?>
                                {!! Form::label('faq_nd', trans('sample::faq_admin.nd').':') !!}
                                {!! Form::text('faq_nd', $faq_nd, ['class' => 'form-control', 'placeholder' => trans('sample::faq_admin.nd').'']) !!}
                            </div>
                            <!-- /SAMPLE NAME -->



                            {!! Form::hidden('id',@$faq->faq_id) !!}


                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('admin_faq.delete',['id' => @$faq->id, '_token' => csrf_token()]) !!}"
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
            @include('sample::faq.admin.faq_search')
        </div>

    </div>
</div>
@stop