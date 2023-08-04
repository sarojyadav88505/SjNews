
<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                @if (empty($company))
                <a href="{{ route('webcompany.create') }}" class="btn btn-primary btn-sm">Add Company</a>
                @else
                <h5>Company Information</h5>
                @endif
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @if (!empty($company))
                        <tr>
                            <td><img src="{{ asset($company->logo) }}" width="120" alt="company Logo"></td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->address }}</td>
                            <td>{{ $company->contact }}</td>
                            <td>
                                <a href="{{ route('webcompany.edit', $company->id) }}" class="badge badge-warning"><i class="far fa-edit"></i>Edit</a>

                            </td>
                        </tr>
                       @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
