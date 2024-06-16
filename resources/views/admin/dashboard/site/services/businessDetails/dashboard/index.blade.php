<section id="list-group-number-icons">
    <div class="row match-height">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Register Service Provider</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-numbered">
                        <li class="list-group-item">
                            @if (empty(Auth::user()->bdCorporate()->first()->id))
                            <a href="{{route('bd.corporate')}}">
                                <span>Corporate Form <b>*Please Fill The Form</b></span>
                            </a>
                            @else
                            <a href="{{route('bd.corporate.show', Auth::user()->bdCorporate()->first()->id)}}">
                                <span>Corporate Form</span>
                            </a>
                            @endif
                        </li>
                        <li class="list-group-item">
                            @if (empty(Auth::user()->bdContact()->first()->id))
                            <a href="{{route('bd.contact')}}">
                                <span>Contact Form <b>*Please Fill The Form</b></span>
                            </a>
                            @else
                            <a href="{{route('bd.contact.show', Auth::user()->bdContact()->first()->id)}}">
                                <span>Contact Form</span>
                            </a>
                            @endif
                        </li>
                        <li class="list-group-item">
                            @if (empty(Auth::user()->bdDocument()->first()->id))
                            <a href="{{route('bd.document')}}">
                                <span>Document Form <b>*Please Upload The File</b></span>
                            </a>
                            @else
                            <a href="{{route('bd.document.show', Auth::user()->bdDocument()->first()->id)}}">
                                <span>Contact Form</span>
                            </a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>