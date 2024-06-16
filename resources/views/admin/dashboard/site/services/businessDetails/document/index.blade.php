<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Corporate Details</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('bd.document.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">SSM</label>
                                        <input type="file" id="Full-Legal-Name" class="form-control @error('ssm') error @enderror" name="ssm" />

                                        @error('ssm')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Certificates</label>
                                        <input type="file" id="Full-Legal-Name" class="form-control @error('cert') error @enderror" name="cert" />

                                        @error('cert')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="form" value="document">

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic Vertical form layout section end -->