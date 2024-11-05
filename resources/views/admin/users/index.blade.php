@extends("layouts.app")
@section("body")
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h4  class="card-title m-0 p-0">{{ __("users.users_list")}}</h4>
                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary float-end">{{ __("users.create_user")  }}</a>
                </div><!--end col-->
            </div>  <!--end row-->
        </div><!--end card-header-->
        <div class="card-body pt-0">
            <div class="table-responsive">
                <table class="table datatable" id="datatable_1">
                    <thead class="table-light">
                    <tr>
                        <th>{{ __("users.photo")}}</th>
                        <th>{{ __("users.name")}}</th>
                        <th>{{ __("users.role")}}</th>
                        <th>{{ __("users.number")}}</th>
                        <th>{{ __("users.email")}}</th>
                        <th data-type="date" data-format="YYYY/DD/MM">{{ __("users.created_at")}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->profile_photo  }}</td>
                            <td>{{ $user->name  }}</td>
                            <td>{{ $user->roles  }}</td>
                            <td>{{ $user->phone_number  }}</td>
                            <td>{{ $user->email  }}</td>
                            <td>{{ $user->created_at  }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--end card-body-->
    </div><!--end card-->
@endsection
