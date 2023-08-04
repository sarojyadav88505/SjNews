<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('webarticle.index') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('webarticle.update',$article->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title" value="{{ $article->title }}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category_id">Category <span class="text-danger">*</span></label>
                                <select id="category_id" class="form-control select2" name="category_id[]" multiple>
                                    @foreach ($categories as $item)
                                            <option value="{{ $item->id }}" @foreach ($article->category as $category)
                                                {{ $item->id == $category->id ? 'selected' :''}}
                                            @endforeach>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                           <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" class="form-control summernote" name="description" rows="3">{{ $article->description }}</textarea>
                           </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Featured Image</label>
                                <input id="image" class="form-control-file" type="file" name="image">
                            </div>
                        </div>

                        <div>
                            <img src="{{ asset($article->image) }}" alt="Featured image" width="120">
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Update Record</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
