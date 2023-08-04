<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('webad.index') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('webad.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Ad Title <span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="link">Company Link <span class="text-danger">*</span></label>
                                <input id="link" class="form-control" type="text" name="link">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="category_id">Ad Type <span class="text-danger">*</span></label>
                                <select id="category_id" class="form-control select2" name="ad_type">
                                    <option value="header">Header Ad (1200 x 300)</option>
                                    <option value="section">Section Ad (1900 x 400)</option>
                                    <option value="side">Side Ad (400 x 400)</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Upload Ad Image</label>
                                <input id="image" class="form-control-file" type="file" name="image">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Save Record</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
