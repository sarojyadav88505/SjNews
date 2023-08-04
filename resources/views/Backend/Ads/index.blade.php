
<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('webad.create') }}" class="btn btn-primary btn-sm">New Ad</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN.</th>
                            <th style="width: 40%">Title</th>
                            <th>Ad</th>
                            <th>link</th>
                            <th>Posted</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ads as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td><img src="{{ asset($item->image) }}" class="img-fluid w-50" alt="{{ $item->title }}" ></td>
                                    <td><a href="{{ $item->link }}">{{ $item->link }}</a></td>

                                    <td>{{ $item->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('webad.edit',$item->id) }}" class="badge badge-primary"><i class="far fa-edit"></i>Edit</a>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
