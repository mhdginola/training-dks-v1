@extends('layout.sidebarAdmin')

@section('content')
<div class="container">
    <h1>Add/Update</h1>
    <form action="/admin/materi/add" method="post" enctype="multipart/form-data">
        @csrf

				<div class="mb-3">
					<label for="day-dropdown">Day</label>
					<select id="day-dropdown" name="id_day" class="form-select" aria-label="Default select example" required>
						<option value="" selected>Open this select menu</option>
						@for ($i = 1; $i <= 15; $i++)							
						<option value="{{ $i }}">Day {{ $i }}</option>
						@endfor
					</select>
				</div>

				<div class="mb-3">
					<label for="sub-day-dropdown">Sub</label>
					<select id="sub-day-dropdown" name="sub_day" class="form-select" aria-label="Default select example" required>

					</select>
				</div>

				<div class="form-group mb-3">
					<label for="video">Upload Video</label>
					<input type="file" name="video" id="video" class="form-control @error('video') is-invalid @enderror">
					@error('video')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
				</div>

        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>    

<script src="{{ asset('js/jquery.min.js') }}"></script>

<script>
$(document).ready(function () {
  $('#day-dropdown').on('change', function () {
      var idCountry = this.value;
      $("#sub-day-dropdown").html('');
      $.ajax({
          url: "{{url('api/fetch-sub-day')}}",
          type: "POST",
          data: {
              day_id: idCountry,
              _token: '{{csrf_token()}}'
          },
          dataType: 'json',
          success: function (result) {
              $('#sub-day-dropdown').html('<option value="">-- Select State --</option>');
              $.each(result.data, function (key, value) {
                  $("#sub-day-dropdown").append('<option value="' + value.sub + '">' + value.sub + '</option>');
              });
							console.log(result);
          }
      });
  });
});
</script>
@endsection