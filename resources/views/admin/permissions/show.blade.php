<x-admin-layout>
    <x-slot name="headerTitle">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('View Permission') . ': ' . $permission->name }}
        </h1>
    </x-slot>
    <x-slot name="headerActions">
        <a href="{{ route('admin.permissions.index') }}" class="btn btn-sm fw-bold btn-primary">Back To Permissions</a>
    </x-slot>

    <div class="card mb-5 mb-xl-8">
        <div class="card-body py-3">
            <form class="form">
                <div class="row mt-2">
                    <div class="fv-row mb-7">
                        <label class="fw-semibold fs-6 mb-2">Name</label>
                        <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="Permission Name" value="{{ $permission->name }}" readonly />
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
