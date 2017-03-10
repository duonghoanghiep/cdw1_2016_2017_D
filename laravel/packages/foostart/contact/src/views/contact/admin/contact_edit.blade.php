@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: {{ trans('contact::contact_admin.page_edit') }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        {!! !empty($contact->contact_id) ? '<i class="fa fa-pencil"></i>'.trans('contact::contact_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('contact::contact_admin.form_add') !!}
                    </h3>
                </div>
                <!-- ERRORS NAME  -->
                {{-- model general errors from the form --}}
                @if($errors->has('contact_name') )
                    <div class="alert alert-danger">{!! $errors->first('contact_name') !!}</div>
                @endif
                <!-- /END ERROR NAME -->
                
                <!-- ERRORS CONG VIEC  -->
                 @if($errors->has('contact_cv') )
                    <div class="alert alert-danger">{!! $errors->first('contact_cv') !!}</div>
                @endif
                <!-- /END ERROR CONG VIEC -->
                
                <!-- ERRORS SDT  -->
                 @if($errors->has('contact_sdt') )
                    <div class="alert alert-danger">{!! $errors->first('contact_sdt') !!}</div>
                @endif
                 <!-- /END ERROR SDT-->
                 
                 <!-- ERRORS MAIL  -->
                 @if($errors->has('contact_mail') )
                    <div class="alert alert-danger">{!! $errors->first('contact_mail') !!}</div>
                @endif
                <!-- /END ERROR MAIL-->
                
                <!-- ERRORS SKYPE  -->
                 @if($errors->has('contact_skype') )
                    <div class="alert alert-danger">{!! $errors->first('contact_skype') !!}</div>
                @endif
                <!-- /END ERROR SKYPE-->
                
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
                            <h4>{!! trans('contact::contact_admin.form_heading') !!}</h4>
                            {!! Form::open(['route'=>['admin_contact.post', 'id' => @$contact->contact_id],  'files'=>true, 'method' => 'post'])  !!}


                            <!-- CONTACT  TEXT-->
                            @include('contact::contact.elements.text', ['name' => 'contact_name','cv' => 'contact_cv','sdt' => 'contact_sdt','mail' => 'contact_mail','skype' => 'contact_skype'])                           <!-- /END SAMPLE NAME TEXT -->
                            {!! Form::hidden('id',@$contact->contact_id) !!}
                            <!-- /END CONTACT  TEXT-->

                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('admin_contact.delete',['id' => @$contact->id, '_token' => csrf_token()]) !!}"
                               class="btn btn-danger pull-right margin-left-5 delete">
                                Delete
                            </a>
                            <!-- /DELETE BUTTON -->

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
            @include('contact::contact.admin.contact_search')
        </div>

    </div>
</div>
@stop