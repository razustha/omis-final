@extends('omis.partials.layouts')
@section('content')
    <div class="nk-content">
        <div class="container">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-between flex-wrap gap g-2">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title">Edit Users</h1>

                            </div>
                            <div class="nk-block-head-content">
                                <ul class="d-flex">
                                    <li>
                                        <a href="{{ route('setting.users.index') }}"
                                            class="btn btn-md d-md-none btn-primary">
                                            <em class="icon ni ni-plus"></em>
                                            <span>View Cities</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="nk-block">

                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('setting.users.update', [$data->users_id]) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-lg-6">
                                            {{ createText('user_type', 'user_type', 'User Type', '', $data->user_type) }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('company_id', 'company_id', 'Company Id', '', $data->company_id) }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('branch_id', 'branch_id', 'Branch Id', '', $data->branch_id) }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('name', 'name', 'Name', '', $data->name) }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('mobile', 'mobile', 'Mobile', '', $data->mobile) }}
                                        </div>
                                        <div class="col-lg-6">{{ createText('email', 'email', 'Email', '', $data->email) }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('email_verified_at', 'email_verified_at', 'Email Verified At', '', $data->email_verified_at) }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('password', 'password', 'Password', '', $data->password) }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('remember_token', 'remember_token', 'Remember Token', '', $data->remember_token) }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('created_by', 'created_by', 'Created By', '', $data->created_by) }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('updated_by', 'updated_by', 'Updated By', '', $data->updated_by) }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ customCreateSelect('status', 'status', '', 'Status', ['1' => 'Active', '0' => 'Inactive'], $data->status) }}
                                        </div>
                                        <div class="col-lg-6">
                                            {{ createText('is_deleted', 'is_deleted', 'Is Deleted', '', $data->is_deleted) }}
                                        </div>
                                        <div class="col-md-12"><?php createButton('btn-primary', '', 'Submit'); ?>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
