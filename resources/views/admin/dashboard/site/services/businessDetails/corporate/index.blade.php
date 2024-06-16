<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Corporate Details</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('bd.corporate.store') }}" method="POST">
                        @csrf

                        <div class="row">

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Registered Company Name</label>
                                        <input type="text" id="Full-Legal-Name" class="form-control @error('cname') error @enderror" name="cname" value="{{ old('cname') }}" placeholder="Full Legal Name" />

                                        @error('cname')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Other  Name</label>
                                        <input type="text" id="Full-Legal-Name" class="form-control @error('oname') error @enderror" name="oname" value="{{ old('oname') }}" placeholder="Any Previous Legal Name / Trading Names" />

                                        @error('oname')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Registration Number</label>
                                        <input type="text" id="Full-Legal-Name" class="form-control @error('rnumber') error @enderror" name="rnumber" value="{{ old('rnumber') }}" placeholder="Registration Number" />

                                        @error('rnumber')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Tax Registration Number</label>
                                        <input type="text" id="Full-Legal-Name" class="form-control @error('trnumber') error @enderror" name="trnumber" value="{{ old('trnumber') }}" placeholder="Tax Registration Number" />

                                        @error('trnumber')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Country Of Incorporation</label>
                                        <input type="text" id="Country-Of-Incorporation" class="form-control @error('coi') error @enderror" name="coi" value="{{ old('coi') }}" placeholder="Country Of Incorporation" />

                                        @error('coi')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Date of Incorporation</label>
                                        <input type="text" id="fp-default" class="form-control flatpickr-basic @error('doi') error @enderror" name="doi" value="{{ old('doi') }}" placeholder="YYYY-MM-DD" />

                                        @error('doi')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Corporate Status</label>
                                        <input type="text" id="Full-Legal-Name" class="form-control @error('cs') error @enderror" name="cs" value="{{ old('cs') }}" placeholder="Private Limited, Limited, Partnership Listed, ETC" />

                                        @error('cs')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Number of Employee</label>
                                        <input type="number" id="Full-Legal-Name" class="form-control @error('noemp') error @enderror" name="noemp" value="{{ old('noemp') }}" placeholder="Number of Employee" />

                                        @error('noemp')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Nature and Line Business</label>
                                        <input type="text" id="Full-Legal-Name" class="form-control @error('nalb') error @enderror" name="nalb" value="{{ old('nalb') }}" placeholder="Please State your core industry and main activity" />

                                        @error('nalb')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Website</label>
                                        <input type="text" id="Full-Legal-Name" class="form-control @error('website') error @enderror" name="website" value="{{ old('website') }}" placeholder="Website" />

                                        @error('website')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Registred Address</label>
                                        <input type="text" id="Full-Legal-Name" class="form-control @error('raddress') error @enderror" name="raddress" value="{{ old('raddress') }}" placeholder="Registred Address" />

                                        @error('raddress')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Business Address</label>
                                        <input type="text" id="Full-Legal-Name" class="form-control @error('baddress') error @enderror" name="baddress" value="{{ old('baddress') }}" placeholder="Business Address" />

                                        @error('baddress')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="telephone-info-vertical-1">Telephone Number</label>
                                        <input type="number" id="telephone-info-vertical-1" class="form-control @error('telephone_1') error @enderror" name="telephone_1" value="{{ old('telephone_1') }}" placeholder="Telephone Number" />
                                        @error('telephone_1')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-vertical-1">Email</label>
                                        <input type="email" id="email-id-vertical-1" class="form-control @error('email_1') error @enderror" name="email_1" value="{{ old('email_1') }}" placeholder="Email" />
                                        @error('email_1')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Branch (if any)</label>
                                        <input type="text" id="Full-Legal-Name" class="form-control @error('branch') error @enderror" name="branch" value="{{ old('branch') }}" placeholder="Branch (if any)" />

                                        @error('branch')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Branch Addreess</label>
                                        <input type="text" id="Full-Legal-Name" class="form-control @error('badress') error @enderror" name="badress" value="{{ old('badress') }}" placeholder="Branch Addreess" />

                                        @error('badress')
                                        <label class="error">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="form" value="corporate">

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