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
                        {!! !empty($contact->contact_category_id) ? '<i class="fa fa-pencil"></i>'.trans('contact::contact_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('contact::contact_admin.form_add') !!}
                    </h3>
                </div>
                <!-- ERRORS NAME  -->
                {{-- model general errors from the form --}}
                @if($errors->has('contact_category_name') )
                    <div class="alert alert-danger">{!! $errors->first('contact_category_name') !!}</div>
                @endif
                <!-- /END ERROR NAME -->
                
                <!-- ERRORS CONG VIEC  -->
                @if($errors->has('contact_category_cv') )
                    <div class="alert alert-danger">{!! $errors->first('contact_category_cv') !!}</div>
                @endif
                <!-- /END ERROR CONG VIEC -->
                
                <!-- ERRORS SDT -->
                @if($errors->has('contact_category_sdt') )
                    <div class="alert alert-danger">{!! $errors->first('contact_category_sdt') !!}</div>
                @endif
                <!-- /END ERROR SDT -->
                
                <!-- ERRORS MAIL  -->
                @if($errors->has('contact_category_mail') )
                    <div class="alert alert-danger">{!! $errors->first('contact_category_mail') !!}</div>
                @endif
                <!-- /END ERROR MAIL -->
                
                <!-- ERRORS SKYPE  -->
                @if($errors->has('contact_category_skype') )
                    <div class="alert alert-danger">{!! $errors->first('contact_category_skype') !!}</div>
                @endif
                <!-- /END ERROR SKYPE -->
                
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
                            <!-- CONTACT CATEGORIES ID -->
                            <h4>{!! trans('contact::contact_admin.form_heading') !!}</h4>
                            {!! Form::open(['route'=>['admin_contact_category.post', 'id' => @$contact->contact_category_id],  'files'=>true, 'method' => 'post'])  !!}

                            <!--END CONTACT CATEGORIES ID  -->

                            <!-- CONTACT  TEXT-->
                            @include('contact::contact_category.elements.text', ['name' => 'contact_category_name','cv' => 'contact_category_cv','sdt' => 'contact_category_sdt','mail' => 'contact_category_mail','skype' => 'contact_category_skype'])
                            <!-- /END CONTACT  TEXT -->
                            
                            {!! Form::hidden('id',@$contact->contact_category_id) !!}

                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('admin_contact_category.delete',['id' => @$contact->id, '_token' => csrf_token()]) !!}"
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
            @include('contact::contact.admin.contact_search')
        </div>

    </div>
</div>
@stop