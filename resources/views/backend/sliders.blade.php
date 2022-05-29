@extends('backend.app')

@section('title', 'Sliders')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title"></div>
                        <div class="card-toolbar">
                            <button onclick="show_add_modal();" class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<svg width="24px"
                                                     height="24px" viewBox="0 0 24 24">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<circle fill="#000000" cx="9" cy="15" r="6"/>
														<path
                                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                                            fill="#000000" opacity="0.3"/>
													</g>
												</svg>
											</span>Add
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Search Form-->
                        <div class="mb-7">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-xl-8">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="d-flex align-items-center">
                                                <label class="mr-3 mb-0 d-none d-md-block">Is active?</label>
                                                <select class="form-control" id="is_active_search">
                                                    <option value="1">All</option>
                                                    <option value="2">Enable</option>
                                                    <option value="3">Disable</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 my-2 my-md-0">
                                            <div class="input-icon">
                                                <input type="text" class="form-control" placeholder="Search..."
                                                       id="kt_datatable_search_query"/>
                                                <span>
																	<i class="flaticon2-search-1 text-muted"></i>
																</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Search Form-->
                        <!--begin: Datatable-->
                        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"
                             data-action="{{route('backend.sliders.list')}}"></div>
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
                    <h5 class="modal-title">Add new item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div id="add_form" data-action-add="{{route("backend.sliders.store")}}"
                     data-selected-row-id="0"
                     data-action-edit="{{route("backend.sliders.update", "")}}"
                     data-action-delete="{{route("backend.sliders.destroy", "")}}">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="image-input" id="kt_image_2">
                                <div class="image-input-wrapper" id="slider_image_div"
                                     data-default-image="{{asset('backend/assets/media/users/blank.png')}}"
                                     style="background-image: url({{asset('backend/assets/media/users/blank.png')}})">
                                </div>
                                <label
                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Change image">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" id="image" name="image" accept=".png, .jpg, .jpeg" onchange="image_preview(this, 'slider_image_div')"/>
                                    <input type="hidden" id="image_remove" name="image_remove"/>
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                      data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label for="is_active">Is active?</label>
                                    <select name="is_active" id="is_active" class="form-control">
                                        <option value="1">Enable</option>
                                        <option value="0">Disable</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label for="title_az">Title (AZ):</label>
                                    <input id="title_az" type="text" class="form-control" name="title_az"
                                           placeholder="Title (AZ)"
                                           maxlength="100" required/>
                                </div>
                                <div class="col-lg-12">
                                    <label for="description_az">Description (AZ):</label>
                                    <textarea id="description_az" cols="30" rows="10" maxlength="1000" class="form-control" required placeholder="Description (AZ)"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <label for="title_en">Title (EN):</label>
                                    <input id="title_en" type="text" class="form-control" name="title_en"
                                           placeholder="Title (EN)"
                                           maxlength="100" required/>
                                </div>
                                <div class="col-lg-12">
                                    <label for="description_en">Description (EN):</label>
                                    <textarea id="description_en" cols="30" rows="10" maxlength="1000" class="form-control" required placeholder="Description (EN)"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <label for="title_ru">Title (RU):</label>
                                    <input id="title_ru" type="text" class="form-control" name="title_ru"
                                           placeholder="Title (RU)"
                                           maxlength="100" required/>
                                </div>
                                <div class="col-lg-12">
                                    <label for="description_ru">Description (RU):</label>
                                    <textarea id="description_ru" cols="30" rows="10" maxlength="1000" class="form-control" required placeholder="Description (RU)"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-warning font-weight-bold text-uppercase">Reset</button>
                        <button type="button" id="form_submit_button" data-action-type="add" onclick="send_data(this);"
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
    <script src="{{asset('backend/js/ajax/sliders.js')}}"></script>
@endsection
