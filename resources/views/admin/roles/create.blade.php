<x-admin-layout>
    <x-slot name="headerTitle">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('New Role') }}
        </h1>
    </x-slot>
    <x-slot name="headerActions">
        <a href="{{ route('admin.roles.index') }}" class="btn btn-sm fw-bold btn-primary">Back To Roles</a>
    </x-slot>

    <div class="card mb-5 mb-xl-8">
        <!--begin::Body-->
        <div class="card-body py-3">
            <form class="form" action="{{ route('admin.roles.store') }}" method="POST">
                @csrf
                <div class="row mt-2">
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Role Name</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="Role Name" value="" />
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        <!--end::Input-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!--begin::Permissions-->
                        <div class="fv-row">
                            <!--begin::Label-->
                            <label class="fs-5 fw-bold form-label mb-2">Role Permissions</label>
                            <!--end::Label-->
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600 fw-semibold">
                                        <tr>
                                            <td class="text-gray-800">Administrator Access
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Allows a full access to the system"></i>
                                            </td>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="kt_roles_select_all" />
                                                    <span class="form-check-label" for="kt_roles_select_all">Select
                                                        all</span>
                                                </label>
                                                <!--end::Checkbox-->
                                            </td>
                                        </tr>
                                        @foreach ($permissions as $permission)
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">{{ $permission->name }}</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>

                                                    {{-- {{ Form::checkbox('permission[]', $permission->id, false, array('class' => 'name','data-on' => 'فعال','data-off' => 'غیر فعال','data-toggle' => 'toggle','data-onstyle' => 'success','data-offstyle' => 'danger','data-size' => 'sm')) }} --}}

                                                    {{ Form::checkbox('permissions[]', $permission->id, false, array('class'=>'form-check form-check-custom form-check-solid me-5 me-lg-20')) }}
                                                    {{-- <label
                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="user_management_write" />
                                                        <span class="form-check-label">Write</span>
                                                    </label> --}}
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Permissions-->
                    </div>
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
