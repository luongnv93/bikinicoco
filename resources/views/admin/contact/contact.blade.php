@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{url('admin/assets/css/fileinput.min.css')}}"/>
@stop
@section('breadcrumb')
   <li>
      <i class="fa fa-home"></i>
      <a href="{{url('/admin/dashboard')}}">Home</a>
      <i class="fa fa-angle-right"></i>
   </li>
   <li>
   <a href="{{url('admin/contacts/contact')}}">Contact</a>
   <i class="fa fa-angle-right"></i>
   </li>

@stop
@section('content')
	<div class="row" ng-controller="ContactController">
		<div class="col-md-12">
		    <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-phone font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Contact</span>
                        <span class="caption-helper">view all</span>
                    </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                    </div>
                </div>
                    <div class="portlet-body">
                        <div class="row" ng-show="msg.success == '1'">
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                    <strong>Success!</strong> @{{msg.msg}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <strong>Search</strong><input type="text" class="form-control input-sm" ng-model="search" placeholder="Search..."/>
                            </div>
                            <div class="col-md-3">
                                <strong>Contact per page</strong><input type="text" class="form-control input-sm" ng-model="pageSize"/>
                            </div>
                        </div>
                        <div style="height: 20px;"></div>
                        <div class="row">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Content</th>
                                    <th>Del</th>
                                </thead>
                                <tbody>
                                    <tr dir-paginate="contact in contacts | itemsPerPage:pageSize |filter:search" current-page="currentPage">
                                        <td>1</td>
                                        <td>@{{ contact.first_name }} @{{ contact.last_name }}</td>
                                        <td>@{{ contact.email }}</td>
                                        <td>@{{ contact.phone }}</td>
                                        <td>@{{ contact.subject }}</td>
                                        <td>@{{ contact.content }}</td>
                                        <td><button ng-really-message="Are you sur?" ng-really-click="DeleteContact($index,contact.id)" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="clearfix">
                                <div class="pull-right">
                                    <div ng-controller="OtherController" class="other-controller">
                                         <div class="text-center">
                                             <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template_url="/admin/angular-js/html/phantrang.html">
                                             </dir-pagination-controls>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                </div>
            </div>
		</div>
	</div>
@stop
@section('script')
<script src="{{url('/admin/assets/js/jquery.slugify.js')}}"></script>
<script src="{{url('/admin/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{url('admin/assets/js/fileinput.min.js')}}"></script>
	<script>
	$("#input-4").fileinput();
    // with plugin options
    $("#input-4").fileinput({'showUpload':false, 'previewFileType':'any'});
	</script>
	<script>
    	$("#input-image").fileinput();
        // with plugin options
        $("#input-image").fileinput({'showUpload':false,'showFilename':false, 'previewFileType':'any'});
    	</script>
	<script>
	$('#slug').slugify('#name');
	</script>
@stop