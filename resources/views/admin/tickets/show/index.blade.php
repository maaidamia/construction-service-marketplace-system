@extends('admin.layouts.master')

@section('content')
<div class="app-content content email-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-area-wrapper container-xxl p-0">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content email-app-sidebar">
                    <div class="email-app-menu">
                        <div class="form-group-compose text-center compose-btn">
                            <button type="button" class="compose-email btn btn-primary w-100" data-bs-backdrop="false" data-bs-toggle="modal" data-bs-target="#compose-mail">
                                Compose
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="body-content-overlay"></div>
                    <!--/ Email list Area -->
                    <!-- Detailed Email View -->
                    <div class="email-app-details show">
                        <!-- Detailed Email Header starts -->
                        <div class="email-detail-header">
                            <div class="email-header-left d-flex align-items-center">
                                <span class="go-back me-1"><i data-feather="chevron-left" class="font-medium-4"></i></span>
                                <h4 class="email-subject mb-0">{{ $code }}</h4>
                            </div>
                            <div class="email-header-right ms-2 ps-1">
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <span class="action-icon favorite"><i data-feather="star" class="font-medium-2"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Detailed Email Header ends -->

                        <!-- Detailed Email Content starts -->
                        <div class="email-scroll-area">
                            {{-- <div class="row">
                                <div class="col-12">
                                    <div class="email-label">
                                        <span class="mail-label badge rounded-pill badge-light-primary">Company</span>
                                    </div>
                                </div>
                            </div> --}}
                            @foreach ($data as $i)
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body mail-message-wrapper pt-2">
                                            <div class="mail-message">
                                                <p class="card-text">
                                                    {{$i->tic_data1}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- Detailed Email Content ends -->
                    </div>
                    <!--/ Detailed Email View -->

                    <!-- compose email -->
                    {{-- <div class="modal modal-sticky" id="compose-mail" data-bs-keyboard="false">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content p-0">
                                <div class="modal-header">
                                    <h5 class="modal-title">Compose Mail</h5>
                                    <div class="modal-actions">
                                        <a href="#" class="text-body me-75"><i data-feather="minus"></i></a>
                                        <a href="#" class="text-body me-75 compose-maximize"><i data-feather="maximize-2"></i></a>
                                        <a class="text-body" href="#" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></a>
                                    </div>
                                </div>
                                <div class="modal-body flex-grow-1 p-0">
                                    <form class="compose-form">
                                        <div class="compose-mail-form-field select2-primary">
                                            <label for="email-to" class="form-label">To: </label>
                                            <div class="flex-grow-1">
                                                <select class="select2 form-select w-100" id="email-to" multiple>
                                                    <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                                                    <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                                                    <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                                                    <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
                                                </select>
                                            </div>
                                            <div>
                                                <a class="toggle-cc text-body me-1" href="#">Cc</a>
                                                <a class="toggle-bcc text-body" href="#">Bcc</a>
                                            </div>
                                        </div>
                                        <div class="compose-mail-form-field cc-wrapper">
                                            <label for="emailCC" class="form-label">Cc: </label>
                                            <div class="flex-grow-1">
                                                <!-- <input type="text" id="emailCC" class="form-control" placeholder="CC"/> -->
                                                <select class="select2 form-select w-100" id="emailCC" multiple>
                                                    <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                                                    <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                                                    <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                                                    <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
                                                </select>
                                            </div>
                                            <a class="text-body toggle-cc" href="#"><i data-feather="x"></i></a>
                                        </div>
                                        <div class="compose-mail-form-field bcc-wrapper">
                                            <label for="emailBCC" class="form-label">Bcc: </label>
                                            <div class="flex-grow-1">
                                                <!-- <input type="text" id="emailBCC" class="form-control" placeholder="BCC"/> -->
                                                <select class="select2 form-select w-100" id="emailBCC" multiple>
                                                    <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                                                    <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                                                    <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                                                    <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
                                                </select>
                                            </div>
                                            <a class="text-body toggle-bcc" href="#"><i data-feather="x"></i></a>
                                        </div>
                                        <div class="compose-mail-form-field">
                                            <label for="emailSubject" class="form-label">Subject: </label>
                                            <input type="text" id="emailSubject" class="form-control" placeholder="Subject" name="emailSubject" />
                                        </div>
                                        <div id="message-editor">
                                            <div class="editor" data-placeholder="Type message..."></div>
                                            <div class="compose-editor-toolbar">
                                                <span class="ql-formats me-0">
                                                    <select class="ql-font">
                                                        <option selected>Sailec Light</option>
                                                        <option value="sofia">Sofia Pro</option>
                                                        <option value="slabo">Slabo 27px</option>
                                                        <option value="roboto">Roboto Slab</option>
                                                        <option value="inconsolata">Inconsolata</option>
                                                        <option value="ubuntu">Ubuntu Mono</option>
                                                    </select>
                                                </span>
                                                <span class="ql-formats me-0">
                                                    <button class="ql-bold"></button>
                                                    <button class="ql-italic"></button>
                                                    <button class="ql-underline"></button>
                                                    <button class="ql-link"></button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="compose-footer-wrapper">
                                            <div class="btn-wrapper d-flex align-items-center">
                                                <div class="btn-group dropup me-1">
                                                    <button type="button" class="btn btn-primary">Send</button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                        <span class="visually-hidden">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"> Schedule Send</a>
                                                    </div>
                                                </div>
                                                <!-- add attachment -->
                                                <div class="email-attachement">
                                                    <label for="file-input" class="form-label">
                                                        <i data-feather="paperclip" width="17" height="17" class="ms-50"></i>
                                                    </label>

                                                    <input id="file-input" type="file" class="d-none" />
                                                </div>
                                            </div>
                                            <div class="footer-action d-flex align-items-center">
                                                <div class="dropup d-inline-block">
                                                    <i class="font-medium-2 cursor-pointer me-50" data-feather="more-vertical" role="button" id="composeActions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    </i>
                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="composeActions">
                                                        <a class="dropdown-item" href="#">
                                                            <span class="align-middle">Add Label</span>
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="align-middle">Plain text mode</span>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="align-middle">Print</span>
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="align-middle">Check Spelling</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <i data-feather="trash" class="font-medium-2 cursor-pointer" data-bs-dismiss="modal"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--/ compose email -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection





{{-- CSS and JS addon --}}

@section('css-addon')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/editors/quill/katex.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/editors/quill/quill.snow.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/extensions/toastr.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/vendors/css/forms/select/select2.min.css')}}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Inconsolata&amp;family=Roboto+Slab&amp;family=Slabo+27px&amp;family=Sofia&amp;family=Ubuntu+Mono&amp;display=swap">
<!-- END: Vendor CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/plugins/forms/form-quill-editor.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('back/app-assets/css/pages/app-email.css')}}">
<!-- END: Page CSS-->
@endsection



@section('js-addon')
<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('back/app-assets/vendors/js/editors/quill/katex.min.js') }}"></script>
<script src="{{ asset('back/app-assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
<script src="{{ asset('back/app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>
<script src="{{ asset('back/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
<script src="{{ asset('back/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('back/app-assets/js/scripts/pages/app-email.js') }}"></script>
<!-- END: Page JS-->
@endsection