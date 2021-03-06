<!--ADD CONTACT CATEGORY ITEM-->
<div class="row margin-bottom-12">
    <div class="col-md-12">
        <a href="{!! URL::route('admin_contact_category.edit') !!}" class="btn btn-info pull-right">
            <i class="fa fa-plus"></i>{{trans('contact::contact_admin.contact_category_add_button')}}
        </a>
    </div>
</div>
<!--/END ADD CONTACT CATEGORY ITEM-->

@if( ! $contacts_categories->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <th style='width:5%'>
                {{ trans('contact::contact_admin.order') }}
            </th>

            <th style='width:10%'>
                {{ trans('contact::contact_admin.contact_categoty_id') }}
            </th>

            <th style='width:50%'>
                {{ trans('contact::contact_admin.contact_categoty_name') }}
            </th>
            
             <th style='width:50%'>
                {{ trans('contact::contact_admin.contact_categoty_cv') }}
            </th>
            
             <th style='width:50%'>
                {{ trans('contact::contact_admin.contact_categoty_sdt') }}
            </th>
            
             <th style='width:50%'>
                {{ trans('contact::contact_admin.contact_categoty_mail') }}
            </th>
            
             <th style='width:50%'>
                {{ trans('contact::contact_admin.contact_categoty_skype') }}
            </th>

            <th style='width:20%'>
                {{ trans('contact::contact_admin.operations') }}
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $contacts_categories->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($contacts_categories as $contact_category)
        <tr>
            <!--COUNTER-->
            <td>
                <?php echo $counter; $counter++ ?>
            </td>
            <!--/END COUNTER-->

            <!--CONTACT CATEGORY ID-->
            <td>
                {!! $contact_category->contact_category_id !!}
            </td>
            <!--/END CONTACT CATEGORY ID-->

            <!--CONTACT CATEGORY NAME-->
            <td>
                {!! $contact_category->contact_category_name !!}
            </td>
            <!--/END CONTACT CATEGORY NAME-->
            
            <!--CONTACT CATEGORY CONG VIEC-->
            <td>
                {!! $contact_category->contact_category_cv !!}
            </td>
            <!--/END CONTACT CATEGORY CONG VIEC-->
            
            <!--CONTACT CATEGORY SDT-->
            <td>
                {!! $contact_category->contact_category_sdt !!}
            </td>
            <!--/END CONTACT CATEGORY SDT-->
            
            <!--CONTACT CATEGORY MAIL-->
            <td>
                {!! $contact_category->contact_category_mail !!}
            </td>
            <!--/END CONTACT CATEGORY MAIL-->
            
            <!--CONTACT CATEGORY SKYPE-->
            <td>
                {!! $contact_category->contact_category_skype !!}
            </td>
            <!--/END CONTACT CATEGORY SKYPE-->

            <!--OPERATOR-->
            <td>
                <a href="{!! URL::route('admin_contact_category.edit', ['id' => $contact_category->contact_category_id]) !!}">
                    <i class="fa fa-edit fa-2x"></i>
                </a>
                <a href="{!! URL::route('admin_contact_category.delete',['id' =>  $contact_category->contact_category_id, '_token' => csrf_token()]) !!}"
                   class="margin-left-5 delete">
                    <i class="fa fa-trash-o fa-2x"></i>
                </a>
                <span class="clearfix"></span>
            </td>
            <!--/END OPERATOR-->
        </tr>
        @endforeach
    </tbody>
</table>
@else
    <!-- FIND MESSAGE -->
    <span class="text-warning">
        <h5>
            {{ trans('contact::contact_admin.message_find_failed') }}
        </h5>
    </span>
    <!-- /END FIND MESSAGE -->
@endif
<div class="paginator">
    {!! $contacts_categories->appends($request->except(['page']) )->render() !!}
</div>