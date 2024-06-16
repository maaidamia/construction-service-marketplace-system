<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Contact Details</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('bd.contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="contact-info-vertical-1">Primary Contact Person</label>
                                    <input type="number" id="contact-info-vertical-1" class="form-control @error('primary_1') error @enderror" name="primary_1" placeholder="Phone Number" value="{{ old('primary_1') }}"/>
                                    @error('primary_1')
                                    <label class="error">{{ $message }}</label>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="department-vertical-1">Department</label>
                                    <input type="text" id="department-vertical-1" class="form-control @error('department_1') error @enderror" name="department_1" placeholder="Department" value="{{ old('department_1') }}"/>
                                    @error('department_1')
                                    <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="telephone-info-vertical-1">Telephone Number</label>
                                    <input type="number" id="telephone-info-vertical-1" class="form-control @error('telephone_1') error @enderror" name="telephone_1" placeholder="Telephone Number" value="{{ old('telephone_1') }}"/>
                                    @error('telephone_1')
                                    <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-vertical-1">Email</label>
                                    <input type="email" id="email-id-vertical-1" class="form-control @error('email_1') error @enderror" name="email_1" placeholder="Email" value="{{ old('email_1') }}"/>
                                    @error('email_1')
                                    <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-1">
                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="secondary-info-vertical-2">Secondary Contact Person</label>
                                    <input type="number" id="secondary-info-vertical-2" class="form-control @error('secondary_2') error @enderror" name="secondary_2" placeholder="Phone Number" value="{{ old('secondary_2') }}"/>
                                    @error('secondary_2')
                                    <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="department-vertical-2">Department</label>
                                    <input type="text" id="department-vertical-2" class="form-control @error('department_2') error @enderror" name="department_2" placeholder="Department" value="{{ old('department_2') }}"/>
                                    @error('department_2')
                                    <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="telephone-info-vertical-2">Telephone Number</label>
                                    <input type="number" id="telephone-info-vertical-2" class="form-control @error('telephone_2') error @enderror" name="telephone_2" placeholder="Telephone Number" value="{{ old('telephone_2') }}"/>
                                    @error('telephone_2')
                                    <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-vertical-2">Email</label>
                                    <input type="email" id="email-id-vertical-2" class="form-control @error('email_2') error @enderror" name="email_2" placeholder="Email" value="{{ old('email_2') }}"/>
                                    @error('email_2')
                                    <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="form" value="contact">

                        <div class="row mt-1">
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