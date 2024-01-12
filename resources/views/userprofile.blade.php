@extends('layouts.app')
@section('content')
@include('components.userheader')
<div class="container">
  <div class="d-flex justify-content-center align-items-center pt-5 ">
        
      <div class="register-card border-1 p-4 bg-white w-50">
        <p class="text-center alert alert-success d-none  p-1" id="msg"></p>
          <h5 >Update Profile</h5>
          <form  id="updtform" token="{{csrf_token()}}" >
              @csrf
          <div class="form-group mb-4 ">
              <label for="username">Your Name</label>
              <input type="hidden"  id="user_id"  name="user_id" value="{{$user->id}}"/>
              <input type="text"  id="name" class="form-control" name="name" 
                                autofocus placeholder="Name" value="{{$user->name}}">
                @if ($errors->has('name'))<span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group mb-4 ">
              <label for="email">Your Email</label>
              <input type="email"  id="email" class="form-control" name="email" 
                                autofocus placeholder="Email"  value="{{$user->email}}" >
                @if ($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            
            <div class="d-grid mx-auto">
              <button type="submit" class="btn btn-block btn-primary update-btn">Update</button>
          </div>
          </form>
      </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    $('.update-btn').click(function(event){
      event.preventDefault();
      var name = $('#name').val();
      var email = $('#email').val();
      var user_id = $('#user_id').val();

            const formData = new FormData();

            formData.append('name', name);
            formData.append('email', email);
            formData.append('user_id', user_id);


      if( name != '' && email != ''){
          $.ajax({
              type:'POST',
              url :"{{route('modify.profile')}}",
              headers: {
                  'X-CSRF-TOKEN': $('#updtform').attr('token')
                      },
              data:formData,
              processData: false, 
              contentType: false,
              success:function(response){
                  if (response.success) {
                    $('#msg').text(response.message).removeClass('d-none');    
                  } else {
                    $('#msg').text(error).removeClass('d-none');
                  }
              },
              error:function(xhr, status, error){
                alert("Updation failed");
              }
          });
      }
    });
  });
</script>
@endsection