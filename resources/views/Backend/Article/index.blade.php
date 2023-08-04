
<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('webarticle.create') }}" class="btn btn-primary btn-sm">Post Article</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SN.</th>
                            <th style="width: 40%">Title</th>
                            {{-- <th>Description</th> --}}
                            <th>Category</th>
                            <th>Posted</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($article as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    {{-- <td>{!! Str::words($item->description, 50, '...') !!}</td> --}}
                                    <td>
                                        @foreach ($item->category as $category)
                                            <span class="badge badge-warning">{{ $category->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $item->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('webarticle.edit',$item->id) }}" class="badge badge-primary"><i class="far fa-edit"></i>Edit</a>
                                        {{-- <a href="{{ route('webarticle.show',$item->id) }}" class="badge badge-success">View</a> --}}
                                        <a href="{{ route('webarticle.show',$item->id) }}" class="badge badge-success"><i class="fas fa-eye"></i>View</a>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
