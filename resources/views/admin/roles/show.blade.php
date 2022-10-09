<x-admin-layout>
    <x-slot name="headerTitle">
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
            {{ __('View Role') . ': ' . $role->name }}
        </h1>
    </x-slot>
    <x-slot name="headerActions">
        <a href="{{ route('admin.roles.index') }}" class="btn btn-sm fw-bold btn-primary">Back To Roles</a>
    </x-slot>

    <div class="card mb-5 mb-xl-8">
        <div class="card-body py-3">
            <form class="form">
                <div class="row mt-2">
                    <div class="fv-row mb-7">
                        <label class="fw-semibold fs-6 mb-2">Name</label>
                        <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="Role Name" value="{{ $role->name }}" readonly />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="fv-row">
                            <label class="fs-5 fw-bold form-label mb-2">Permissions</label>
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <tbody class="text-gray-600 fw-semibold">
                                        @foreach ($permissions as $permission)
                                            <tr>
                                                <td class="text-gray-800">{{ $permission->name }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
