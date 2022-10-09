<x-admin-layout>
    <x-slot name="headerTitle">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('New User') }}
        </h1>
    </x-slot>
    <x-slot name="headerActions">
        <a href="{{ route('admin.users.index') }}" class="btn btn-sm fw-bold btn-primary">Back to Users</a>
    </x-slot>

    <div class="card mb-5 mb-xl-8">
        <!--begin::Body-->
        <div class="card-body py-3">
            <form class="form" action="{{ route('admin.users.store') }}" method="POST">
                <div class="row mt-2">
                    <div class="col-md-8">
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Full Name</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Full name" value="Emma Smith" />
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="example@domain.com" value="smith@kpmg.com" />
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="col-md-4 fv-row mb-7 text-center">
                        <!--begin::Label-->
                        <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                        <!--end::Label-->
                        <!--begin::Image placeholder-->
                        <style>
                            .image-input-placeholder {
                                background-image: url('assets/media/svg/files/blank-image.svg');
                            }

                            [data-theme="dark"] .image-input-placeholder {
                                background-image: url('assets/media/svg/files/blank-image-dark.svg');
                            }
                        </style>
                        <!--end::Image placeholder-->
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-125px h-125px"
                                style="background-image: url(assets/media/avatars/300-6.jpg);"></div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->
                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Cancel-->
                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Hint-->
                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                        <!--end::Hint-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fw-semibold fs-6 mb-2">Phone</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="user_phone" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="+98 902 382 4525" value="" />
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Password</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="password" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="********" value="" />
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Confirm Password</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="password" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="********" value="" />
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fv-row mb-7">
                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                            <textarea class="form-control form-control-solid mb-3 mb-lg-0" id="exampleFormControlTextarea1" rows="7"></textarea>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">

                    </div>
                </div> --}}
                <div class="mb-7">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-5">Role</label>
                    <!--end::Label-->
                    <!--begin::Roles-->
                    @foreach ($roles as $role)
                        <!--begin::Input row-->
                        <div class="d-flex fv-row">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="user_role" type="radio" value="{{ $role->name }}"
                                    id="kt_modal_update_role_option_{{ $role->id }}" {{ ($role->name == "user") ? "checked='checked'" : "" }} />
                                <!--end::Input-->
                                <!--begin::Label-->
                                <label class="form-check-label" for="kt_modal_update_role_option_{{ $role->id }}">
                                    <div class="fw-bold text-gray-800">{{ $role->name }}</div>
                                </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Radio-->
                        </div>
                        <!--end::Input row-->
                        <div class='separator separator-dashed my-5'></div>
                    @endforeach
                    <!--end::Roles-->
                </div>
                <!--begin::Actions-->
                <div class="text-center pt-15">
                    <button type="reset" class="btn btn-light me-3">Discard</button>
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Create</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
        </div>
        <!--begin::Body-->
    </div>
</x-admin-layout>
