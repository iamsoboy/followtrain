<div>
    <div class="formbox-square">
        @if (count($errors) > 0 )
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <ul class="nav nav-tabs margin-bottom-20">
            <li class="active"><a data-toggle="tab" href="#train">Book Train Tickets</a></li>
            <li><a data-toggle="tab" href="#ride">Book Ride</a></li>
            <li><a data-toggle="tab" href="#cargo">Cargo</a></li>
        </ul>
        <br><br><br>
        <div class="tab-content">
            <div id="train" class="tab-pane fade in active">
                <div class="pnl-header">

                    <p class=""> Book instant train tickets across Nigeria </p>
                </div>
                <div class="pnl-body">
                    <form method="post" action="{{ route('booking.create') }}">
                        @csrf

                        <div class="form-field icon-location srcby-counter">
                            <label>from</label>
                            <select class="inputype1 @error('from') is-invalid @enderror" name="from" wire:model="from">
                                <option value="">Select your Location</option>
                                @foreach($locations as $location)
                                    <option value="{{$location->name}}">{{$location->name}}</option>
                                @endforeach
                                    <!--<option value="" disabled selected>Not Available</option>-->
                            </select>
                            @error('from')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>

                        {{count($destinations)}}

                        @if(!empty($destinations))
                        <div class="form-field icon-location srcby-counter ">
                            <label>to</label>
                            <select class="inputype1 @error('to') is-invalid @enderror" name="to" wire:model="to">
                                <option value="">Select your Destination</option>-->
                                @forelse($destinations as $destination)
                                    <option value="{{$destination->name}}">{{$destination->name}}</option>
                                @empty
                                    <option value="" disabled selected>Not Available</option>
                                @endforelse
                            </select>
                            @error('to')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                        @endif

                        <div data-date-picker data-date-picker-type="single"
                             class="form-field icon-calendar bx--date-picker bx--date-picker--single ">
                            <svg data-date-picker-icon class="bx--date-picker__icon"></svg>
                            <label>departure</label>
                            <input type="text" id="date-picker-6" class="inputype1 bx--date-picker__input form-control @error('departure_date') is-invalid @enderror"
                                   pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy" name="departure_date" data-date-picker-input />
                            @error('departure_date')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>


                        <!--<div data-date-picker data-date-picker-type="single" class="form-field icon-calendar bx--date-picker bx--date-picker--single">
                            <svg data-date-picker-icon class="bx--date-picker__icon"></svg>
                            <label>return</label>
                            <input type="text" id="date-picker-4" class="inputype1 bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy" data-date-picker-input />
                        </div>-->

                        <div class="form-field icon-passenger srcby-counter ">
                            <label>Passengers</label>
                            <select class="inputype1 @error('passenger') is-invalid @enderror" name="passenger">
                                @for ($i=1; $i <= 3; $i++)
                                    <option value="{{$i}}">{{$i}} person(s) </option>
                            @endfor
                            <!--    <option value="2">2 adult</option>
                                            <option value="3">3 adult</option>
                                            <option value="4">4 adult</option>
                                            <option value="5">5 adult </option>
                                            <option value="6">6 adult</option> -->
                            </select>
                            @error('passenger')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>

                        <div class="form-field icon-catagory srcby-counter ">
                            <label>class</label>
                            <select class="inputype1 @error('ticket_class') is-invalid @enderror" name="ticket_class">
                                @foreach($tickets as $ticket)
                                    <option value="{{$ticket->ticket_class}}">{{$ticket->ticket_class}}</option>
                                @endforeach
                            </select>
                            @error('ticket_class')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>

                        <div class="btn-group">
                            <!--<div class="btn-avdsrc"><a href="#"><span>advance search</span></a></div>-->
                            <button class="btn btn-trpsrc" data-os-animation="fadeInRight">search now</button>
                        </div>
                    </form>

                </div>
            </div>
            <div id="ride" class="tab-pane fade">
                <div class="pnl-header">
                    <p class=""> BOOK A RIDE TO AND FROM ALL TRAIN STATIONS </p>
                </div>
                <div class="pnl-body">
                    <form>

                        <div class="form-field icon-location srcby-counter">
                            <label>from</label>
                            <input type="text" placeholder="Your Location" name="ride_location">
                        </div>


                        <div class="form-field icon-location srcby-counter">
                            <label>to</label>
                            <input type="text" placeholder="Your Destination" name="ride_location">
                        </div>

                        <div data-date-picker data-date-picker-type="single"
                             class="form-field icon-calendar bx--date-picker bx--date-picker--single">
                            <svg data-date-picker-icon class="bx--date-picker__icon"></svg>
                            <label>date</label>
                            <input type="text" id="date-picker-3" class="inputype1 bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy" data-date-picker-input />
                        </div>


                        <div class="btn-group">
                            <a class="btn btn-trpsrc btn-right" href="#" >search now</a>
                        </div>
                    </form>

                </div>
            </div>
            <div id="cargo" class="tab-pane fade">
                <div class="pnl-header">
                    <p class=""> CARGO HANDLING </p>
                </div>
                <div class="pnl-body">
                    <form>

                        <div class="form-field icon-location srcby-counter">
                            <label>from</label>
                            <input type="text" placeholder="Your Location" name="ride_location">
                        </div>


                        <div class="form-field icon-location srcby-counter">
                            <label>to</label>
                            <input type="text" placeholder="Your Destination" name="ride_location">
                        </div>

                        <div data-date-picker data-date-picker-type="single"
                             class="form-field icon-calendar bx--date-picker bx--date-picker--single">
                            <svg data-date-picker-icon class="bx--date-picker__icon"></svg>
                            <label>date</label>
                            <input type="text" id="date-picker-3" class="inputype1 bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy" data-date-picker-input />
                        </div>


                        <div class="btn-group">
                            <a class="btn btn-trpsrc btn-right" href="#" >search now</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>



    </div>
</div>
