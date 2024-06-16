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
                        {{-- <div class="sidebar-menu-list">
                            <div class="list-group list-group-messages">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    <i data-feather="mail" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">Inbox</span>
                                    <span class="badge badge-light-primary rounded-pill float-end">3</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="send" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">Sent</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="edit-2" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">Draft</span>
                                    <span class="badge badge-light-warning rounded-pill float-end">2</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="star" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">Starred</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="info" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">Spam</span>
                                    <span class="badge badge-light-danger rounded-pill float-end">5</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i data-feather="trash" class="font-medium-3 me-50"></i>
                                    <span class="align-middle">Trash</span>
                                </a>
                            </div>
                            <!-- <hr /> -->
                            <h6 class="section-label mt-3 mb-1 px-2">Labels</h6>
                            <div class="list-group list-group-labels">
                                <a href="#" class="list-group-item list-group-item-action"><span class="bullet bullet-sm bullet-success me-1"></span>Personal</a>
                                <a href="#" class="list-group-item list-group-item-action"><span class="bullet bullet-sm bullet-primary me-1"></span>Company</a>
                                <a href="#" class="list-group-item list-group-item-action"><span class="bullet bullet-sm bullet-warning me-1"></span>Important</a>
                                <a href="#" class="list-group-item list-group-item-action"><span class="bullet bullet-sm bullet-danger me-1"></span>Private</a>
                            </div>
                        </div> --}}
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
                    <!-- Email list Area -->
                    <div class="email-app-list">
                        <!-- Email search starts -->
                        <div class="app-fixed-search d-flex align-items-center">
                            <div class="sidebar-toggle d-block d-lg-none ms-1">
                                <i data-feather="menu" class="font-medium-5"></i>
                            </div>
                            <div class="d-flex align-content-center justify-content-between w-100">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                    <input type="text" class="form-control" id="email-search" placeholder="Search email" aria-label="Search..." aria-describedby="email-search" />
                                </div>
                            </div>
                        </div>
                        <!-- Email search ends -->

                        <!-- Email actions starts -->
                        {{-- <div class="app-action">
                            <div class="action-left">
                                <div class="form-check selectAll">
                                    <input type="checkbox" class="form-check-input" id="selectAllCheck" />
                                    <label class="form-check-label fw-bolder ps-25" for="selectAllCheck">Select All</label>
                                </div>
                            </div>
                            <div class="action-right">
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" id="folder" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="folder" class="font-medium-2"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="folder">
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i data-feather="edit-2" class="font-small-4 me-50"></i>
                                                    <span>Draft</span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i data-feather="info" class="font-small-4 me-50"></i>
                                                    <span>Spam</span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i data-feather="trash" class="font-small-4 me-50"></i>
                                                    <span>Trash</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" id="tag" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="tag" class="font-medium-2"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="tag">
                                                <a href="#" class="dropdown-item"><span class="me-50 bullet bullet-success bullet-sm"></span>Personal</a>
                                                <a href="#" class="dropdown-item"><span class="me-50 bullet bullet-primary bullet-sm"></span>Company</a>
                                                <a href="#" class="dropdown-item"><span class="me-50 bullet bullet-warning bullet-sm"></span>Important</a>
                                                <a href="#" class="dropdown-item"><span class="me-50 bullet bullet-danger bullet-sm"></span>Private</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item mail-unread">
                                        <span class="action-icon"><i data-feather="mail" class="font-medium-2"></i></span>
                                    </li>
                                    <li class="list-inline-item mail-delete">
                                        <span class="action-icon"><i data-feather="trash-2" class="font-medium-2"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        <!-- Email actions ends -->

                        <!-- Email list starts -->
                        <div class="email-user-list">
                            @if (count($data) == 0)
                            <div style="padding: 1.5rem; text-align: center;">
                                <h5>No Items Found</h5>
                            </div>
                            @else
                            <ul class="email-media-list">
                                @foreach ($data as $i)
                                <li class="d-flex user-mail mail-read">
                                    <div class="mail-left pe-50">
                                    </div>
                                    <a href="{{route('tickets.show', $i->po_code)}}" class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">{{ $i->po_code }}</h5>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="me-50 bullet bullet-success bullet-sm"></span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="text-truncate mb-0">
                                                {{ $i->tic_data1 }}
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                            
                        </div>
                        <!-- Email list ends -->
                    </div>
                    <!--/ Email list Area -->

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