@if($address_collection && $address_collection->data != null)
	@foreach($address_collection->data as $key => $address)
	<div class="form-check mb-1">
	  	<input class="form-check-input address-checkbox" name="address_id" type="radio" id="addr-{{ $address->id }}" value="{{ $address->id }}" {{ $key == 0 ? 'required':'' }}>
	  	<label class="form-check-label" for="addr-{{ $address->id }}">
	  		<span>{{ $address->address }}</span>,
	        <span>{{ $address->city }}</span>,
	        <span>{{ $address->province }}</span>,
	        <span>{{ $address->district }}, {{ $address->zip }}</span>
	        <span>中国</span>
	        <br>
	        <span class="mt-2">{{ $address->contact_name }}</span>
	        <span>{{ $address->contact_phone }}</span>
	  	</label>
	</div>
	@endforeach
@endif