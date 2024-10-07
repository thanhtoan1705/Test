@extends('chat.layouts.master')
@section('title', 'Nhóm')
@section('content')
    
<!-- Start groups tab-pane -->
<div class="tab-pane fade show active" id="pills-groups" role="tabpanel" aria-labelledby="pills-groups-tab">
    <!-- Start Groups content -->
    <div>
        <div class="p-4">
            <div class="user-chat-nav float-end">
                <div  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create group">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-link text-decoration-none text-muted font-size-18 py-0" data-bs-toggle="modal" data-bs-target="#addgroup-exampleModal">
                        <i class="ri-group-line me-1 ms-0"></i>
                    </button>
                </div>

            </div>
            <h4 class="mb-4">Nhóm</h4>

            <!-- Start add group Modal -->
            <div class="modal fade" id="addgroup-exampleModal" tabindex="-1" role="dialog" aria-labelledby="addgroup-exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-size-16" id="addgroup-exampleModalLabel">Create New Group</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            </button>
                            </div>
                        <div class="modal-body p-4">
                            <form>
                                <div class="mb-4">
                                    <label for="addgroupname-input" class="form-label">Group Name</label>
                                    <input type="text" class="form-control" id="addgroupname-input" placeholder="Enter Group Name">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Group Members</label>
                                    <div class="mb-3">
                                        <button class="btn btn-light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#groupmembercollapse" aria-expanded="false" aria-controls="groupmembercollapse">
                                            Select Members
                                        </button>
                                    </div>

                                    <div class="collapse" id="groupmembercollapse">
                                        <div class="card border">
                                            <div class="card-header">
                                                <h5 class="font-size-15 mb-0">Contacts</h5>
                                            </div>
                                            <div class="card-body p-2">
                                                <div data-simplebar style="max-height: 150px;">
                                                    <div>
                                                        <div class="p-3 fw-bold text-primary">
                                                            A
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="memberCheck1" checked>
                                                                    <label class="form-check-label" for="memberCheck1">Albert Rodarte</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="memberCheck2">
                                                                    <label class="form-check-label" for="memberCheck2">Allison Etter</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="p-3 fw-bold text-primary">
                                                            C
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="memberCheck3">
                                                                    <label class="form-check-label" for="memberCheck3">Craig Smiley</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="p-3 fw-bold text-primary">
                                                            D
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="memberCheck4">
                                                                    <label class="form-check-label" for="memberCheck4">Daniel Clay</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="p-3 fw-bold text-primary">
                                                            I
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="memberCheck5">
                                                                    <label class="form-check-label" for="memberCheck5">Iris Wells</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="p-3 fw-bold text-primary">
                                                            J
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="memberCheck6">
                                                                    <label class="form-check-label" for="memberCheck6">Juan Flakes</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="memberCheck7">
                                                                    <label class="form-check-label" for="memberCheck7">John Hall</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="memberCheck8">
                                                                    <label class="form-check-label" for="memberCheck8">Joy Southern</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="p-3 fw-bold text-primary">
                                                            M
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="memberCheck9">
                                                                    <label class="form-check-label" for="memberCheck9">Michael Hinton</label>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="memberCheck10">
                                                                    <label class="form-check-label" for="memberCheck10">Mary Farmer</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="p-3 fw-bold text-primary">
                                                            P
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="memberCheck11">
                                                                    <label class="form-check-label" for="memberCheck11">Phillis Griffin</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="p-3 fw-bold text-primary">
                                                            R
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="memberCheck12">
                                                                    <label class="form-check-label" for="memberCheck12">Rocky Jackson</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="p-3 fw-bold text-primary">
                                                            S
                                                        </div>

                                                        <ul class="list-unstyled contact-list">
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="memberCheck13">
                                                                    <label class="form-check-label" for="memberCheck13">Simon Velez</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                    
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="addgroupdescription-input" class="form-label">Description</label>
                                    <textarea class="form-control" id="addgroupdescription-input" rows="3" placeholder="Enter Description"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Create Groups</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End add group Modal -->

            <div class="search-box chat-search-box">            
                <div class="input-group rounded-3">
                    <span class="input-group-text text-muted bg-light pe-1 ps-3" id="basic-addon1">
                        <i class="ri-search-line search-icon font-size-18"></i>
                    </span>
                    <input type="text" class="form-control bg-light" placeholder="Tìm nhóm..." aria-label="Search groups..." aria-describedby="basic-addon1">
                </div> 
            </div> <!-- Search Box-->
        </div>

        <!-- Start chat-group-list -->
        <div class="p-4 chat-message-list chat-group-list" data-simplebar>


            <ul class="list-unstyled chat-list">
                <li>
                    <a href="#">
                        <div class="d-flex align-items-center">
                            <div class="chat-user-img me-3 ms-0">
                                <div class="avatar-xs">
                                    <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                        G
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-0">#General</h5>
                            </div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="d-flex align-items-center">
                            <div class="chat-user-img me-3 ms-0">
                                <div class="avatar-xs">
                                    <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                        R
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-0">#Reporting <span class="badge badge-soft-danger rounded-pill float-end">+23</span></h5>
                            </div>                        
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="d-flex align-items-center">
                            <div class="chat-user-img me-3 ms-0">
                                <div class="avatar-xs">
                                    <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                        D
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-0">#Designers</h5>
                            </div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="d-flex align-items-center">
                            <div class="chat-user-img me-3 ms-0">
                                <div class="avatar-xs">
                                    <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                        D
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-0">#Developers <span class="badge badge-soft-danger rounded-pill float-end">New</span></h5>
                            </div>
                        </div>
    
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="d-flex align-items-center">
                            <div class="chat-user-img me-3 ms-0">
                                <div class="avatar-xs">
                                    <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                        P
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-0">#Project-alpha</h5>
                            </div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="d-flex align-items-center">
                            <div class="chat-user-img me-3 ms-0">
                                <div class="avatar-xs">
                                    <span class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                        B
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-0">#Snacks</h5>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End chat-group-list -->
    </div>
    <!-- End Groups content -->
</div>
<!-- End groups tab-pane -->

@endsection