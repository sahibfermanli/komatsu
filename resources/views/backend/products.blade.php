@extends('backend.app')

@section('title', 'Products')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid">
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
                                                <label class="mr-3 mb-0 d-none d-md-block" for="category_id_for_search">Category:</label>
                                                <select class="form-control" id="category_id_for_search">
                                                    <option value="">All</option>
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
                             data-action="{{route('backend.products.list')}}"></div>
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
                <div id="add_form" data-action-add="{{route("backend.products.store")}}"
                     data-selected-row-id="0"
                     data-action-edit="{{route("backend.products.update", "")}}"
                     data-action-delete="{{route("backend.products.destroy", "")}}">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="image-input" id="kt_image_2">
                                <div class="image-input-wrapper" id="product_image_div"
                                     data-default-image="{{asset('backend/assets/media/users/blank.png')}}"
                                     style="background-image: url({{asset('backend/assets/media/users/blank.png')}})">
                                </div>
                                <label
                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Change image">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" id="image" name="image" accept=".png, .jpg, .jpeg" onchange="image_preview(this, 'product_image_div')"/>
                                    <input type="hidden" id="image_remove" name="image_remove"/>
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                      data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label for="category_id">Category:</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">None</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label for="name_az">Name (AZ):</label>
                                    <input id="name_az" type="text" class="form-control" name="name_az"
                                           placeholder="Name (AZ)"
                                           maxlength="100" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="name_en">Name (EN):</label>
                                    <input id="name_en" type="text" class="form-control" name="name_en"
                                           placeholder="Name (EN)"
                                           maxlength="100" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="name_ru">Name (RU):</label>
                                    <input id="name_ru" type="text" class="form-control" name="name_ru"
                                           placeholder="Name (RU)"
                                           maxlength="100" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="model">Model:</label>
                                    <input id="model" type="text" class="form-control"
                                           placeholder="Model"
                                           maxlength="150" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="capacity">Capacity:</label>
                                    <input id="capacity" type="text" class="form-control"
                                           placeholder="Capacity"
                                           maxlength="150" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="front">Front / rear tyres:</label>
                                    <input id="front" type="text" class="form-control"
                                           placeholder="Front / rear tyres"
                                           maxlength="150" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="travel_speed">Travel speed with / without load:</label>
                                    <input id="travel_speed" type="text" class="form-control"
                                           placeholder="Travel speed with / without load"
                                           maxlength="150" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="lifting_speed">Lifting speed with / without load:</label>
                                    <input id="lifting_speed" type="text" class="form-control"
                                           placeholder="Lifting speed with / without load"
                                           maxlength="150" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="outside_turning_radius">Outside turning radius:</label>
                                    <input id="outside_turning_radius" type="text" class="form-control"
                                           placeholder="Outside turning radius"
                                           maxlength="150" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="operating_weight">Operating weight:</label>
                                    <input id="operating_weight" type="text" class="form-control"
                                           placeholder="Operating weight"
                                           maxlength="150" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="engine_power">Engine power:</label>
                                    <input id="engine_power" type="text" class="form-control"
                                           placeholder="Engine power"
                                           maxlength="150" required/>
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
    <script src="{{asset('backend/js/ajax/products.js')}}"></script>
@endsection
