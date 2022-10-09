<x-admin-layout>
    <x-slot name="headerTitle">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('New Permission') }}
        </h1>
    </x-slot>
    <x-slot name="headerActions">
        <a href="{{ route('admin.permissions.index') }}" class="btn btn-sm fw-bold btn-primary">Back To Permissions</a>
    </x-slot>

    <div class="card mb-5 mb-xl-8">
        <!--begin::Body-->
        <div class="card-body py-3">
            <form class="form" action="{{ route('admin.permissions.store') }}" method="POST">
                @csrf
                <div class="row mt-2">
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Permission Name</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="Permission Name" value="" />
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        <!--end::Input-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
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
