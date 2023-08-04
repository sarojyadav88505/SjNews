<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('webcompany.index') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('webcompany.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Company Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="eg. Sj Computer Center">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address <span class="text-danger">*</span></label>
                                <input id="address" class="form-control" type="text" name="address" placeholder="eg. Bandipur">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact">Contact <span class="text-danger">*</span></label>
                                <input id="contact" class="form-control" type="tel" name="contact" placeholder="eg. 9814896965">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input id="email" class="form-control" type="tel" name="email" placeholder="eg. sjcomputercenter.np@gmail.com">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="regno">Registration No. <span class="text-danger">*</span></label>
                                <input id="regno" class="form-control" type="tel" name="regno" placeholder="eg. 6102563210">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="logo">Company Logo</label>
                                <input id="logo" class="form-control-file" type="file" name="logo">
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
