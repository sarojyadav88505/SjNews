<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('webcategory.index') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('webcategory.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Category Name <span class="text-danger">*</span></label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="eg. Politics">
                    </div>
                    @error('name')
                        {{-- <div class="text-danger">{{ $message }}</div> --}}
                        <?php
                        Alert::error('Category Name', 'Name Field is required');
                        ?>
                    @enderror
                    <button type="submit" class="btn btn-success btn-sm">Save Record</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
