@extends('backend.app')

@section('title', 'Users')

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
                                            <div class="input-icon">
                                                <input type="text" class="form-control" placeholder="Search..."
                                                       id="kt_datatable_search_query"/>
                                                <span>
																	<i class="flaticon2-search-1 text-muted"></i>
																</span>
                                            </div>
                                        </div>
                                        {{--                                        <div class="col-md-4 my-2 my-md-0">--}}
                                        {{--                                            <div class="d-flex align-items-center">--}}
                                        {{--                                                <label class="mr-3 mb-0 d-none d-md-block">Status:</label>--}}
                                        {{--                                                <select class="form-control" id="kt_datatable_search_status">--}}
                                        {{--                                                    <option value="">All</option>--}}
                                        {{--                                                    <option value="1">Pending</option>--}}
                                        {{--                                                    <option value="2">Delivered</option>--}}
                                        {{--                                                    <option value="3">Canceled</option>--}}
                                        {{--                                                    <option value="4">Success</option>--}}
                                        {{--                                                    <option value="5">Info</option>--}}
                                        {{--                                                    <option value="6">Danger</option>--}}
                                        {{--                                                </select>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div class="col-md-4 my-2 my-md-0">--}}
                                        {{--                                            <div class="d-flex align-items-center">--}}
                                        {{--                                                <label class="mr-3 mb-0 d-none d-md-block">Type:</label>--}}
                                        {{--                                                <select class="form-control" id="kt_datatable_search_type">--}}
                                        {{--                                                    <option value="">All</option>--}}
                                        {{--                                                    <option value="1">Online</option>--}}
                                        {{--                                                    <option value="2">Retail</option>--}}
                                        {{--                                                    <option value="3">Direct</option>--}}
                                        {{--                                                </select>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                    </div>
                                </div>
                                {{--                                <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">--}}
                                {{--                                    <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                        <!--end::Search Form-->
                        <!--begin: Datatable-->
                        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"
                             data-action="{{route('backend.users.list')}}"></div>
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
                <div id="add_form" data-action-add="{{route("backend.users.store")}}"
                     data-selected-row-id="0"
                     data-action-edit="{{route("backend.users.update", "")}}"
                     data-action-delete="{{route("backend.users.destroy", "")}}">
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-lg-4">
                                    <label for="name">Name:</label>
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Name"
                                           maxlength="100" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="surname">Surname:</label>
                                    <input id="surname" type="text" class="form-control" name="surname"
                                           placeholder="Surname" maxlength="100" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="username">Username:</label>
                                    <input id="username" type="text" class="form-control" name="username"
                                           placeholder="Username" maxlength="100" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="email">E-mail:</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                           placeholder="E-mail" maxlength="255" required/>
                                </div>
                                <div class="col-lg-4">
                                    <label for="password">Password:</label>
                                    <input id="password" type="password" class="form-control" name="password"
                                           placeholder="Password" minlength="8" required/>
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
    <script src="{{asset('backend/js/ajax/users.js')}}"></script>
@endsection
