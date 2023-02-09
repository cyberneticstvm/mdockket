@extends("clinic.base")
@section("content")
<div class="account-box mt-5">
    <div class="container">
        <h5 class="title text-center mb-3">Services</h5>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
        <div class="row">
            <form method="post" action="{{ route('clinic.services.update') }}">
                @csrf                
                <div class="row">
                    @error('service')
                    <small class="text-danger">{{ $errors->first('service') }}</small>
                    @enderror
                    @php $checked = '' @endphp
                    @forelse($services as $key => $service)
                        @foreach($clinic_services as $k => $c)
                            @if($service->id == $c->service_id)
                                @php $checked = 'checked'; @endphp
                                @break
                            @else
                                @php $checked = ''; @endphp
                            @endif
                        @endforeach
                        <div class="col d-flex justify-content-between align-items-center">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="service[]" value="{{ $service->id }}" id="flexCheckChecked{{ $service->id }}" {{ $checked }}>
								<label class="form-check-label" for="flexCheckChecked{{ $service->id }}">
                                {{ $service->name }}
								</label>
							</div>
						</div>
                    @empty
                    @endforelse
                </div>
                <div class="input-group mt-3">
                    <button type="submit" class="btn mt-2 btn-primary w-100 btn-rounded">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection