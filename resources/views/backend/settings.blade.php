@extends('backend.app')

@section('title', 'Site settings')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"
                             data-action="{{route('backend.settings.list')}}"></div>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection

@section('modal')
    <div class="modal fade" id="add-modal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div style="clear: both;"></div>
                <div class="modal-header">
                    <h5 class="modal-title">Update settings</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div id="add_form"
                     data-selected-row-id="0"
                     data-action-edit="{{route("backend.settings.update")}}">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="image-input" id="kt_image_2">
                                <div class="image-input-wrapper" id="logo_div"
                                     data-default-image="{{asset('backend/assets/media/users/blank.png')}}"
                                     style="background-image: url({{asset('backend/assets/media/users/blank.png')}})">
                                </div>
                                <label
                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Change image">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" id="logo" name="logo" accept=".png, .jpg, .jpeg" onchange="image_preview(this, 'logo_div')"/>
                                    <input type="hidden" id="logo_remove" name="logo_remove"/>
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                      data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                            <div class="image-input" id="kt_image_2" style="margin-left: 50px;">
                                <div class="image-input-wrapper" id="logo_footer_div"
                                     data-default-image="{{asset('backend/assets/media/users/blank.png')}}"
                                     style="background-image: url({{asset('backend/assets/media/users/blank.png')}})">
                                </div>
                                <label
                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Change image">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" id="logo_footer" name="logo" accept=".png, .jpg, .jpeg" onchange="image_preview(this, 'logo_footer_div')"/>
                                    <input type="hidden" id="logo_footer_remove" name="logo_footer_remove"/>
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                      data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label for="title">Title:</label>
                                    <input id="title" type="text" class="form-control" placeholder="Title"
                                           maxlength="100" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="phone">Phone:</label>
                                    <input id="phone" type="tel" class="form-control" placeholder="Phone"
                                           maxlength="100" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="email">E-mail:</label>
                                    <input id="email" type="email" class="form-control" placeholder="E-mail"
                                           maxlength="100" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="address">Address:</label>
                                    <input id="address" type="text" class="form-control" placeholder="Address"
                                           maxlength="100" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="meta_keywords">Meta keywords:</label>
                                    <input id="meta_keywords" type="text" class="form-control" placeholder="Meta keywords"
                                           maxlength="100" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="meta_description">Meta description:</label>
                                    <input id="meta_description" type="text" class="form-control" placeholder="Meta description"
                                           maxlength="100" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="google_site_verification">Google site verification:</label>
                                    <input id="google_site_verification" type="text" class="form-control" placeholder="Google site verification"
                                           maxlength="100" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-warning font-weight-bold text-uppercase">Reset</button>
                        <button type="button" id="form_submit_button" onclick="send_data(this);"
                                class="btn btn-primary font-weight-bold text-uppercase">Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')
    <script src="{{asset('backend/js/ajax/settings.js')}}"></script>
@endsection
