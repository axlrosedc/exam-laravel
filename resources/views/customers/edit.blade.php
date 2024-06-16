<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Update Customer</h3>
      <form action="{{ route('customers.update', $customer->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" class="form-control" id="first_name" name="first_name"
            value="{{ $customer->first_name }}" required>
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" id="last_name" name="last_name"
          value="{{ $customer->last_name }}" required>
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input type="text" class="form-control" id="age" name="age"
          value="{{ $customer->age }}" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email"
          value="{{ $customer->email }}" required>
        </div>
        <div class="form-group">
          <label for="dob">Date of birth</label>
          <input type="text" class="form-control" id="dob" name="dob"
          value="{{ $customer->dob }}" required>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Update Customer</button>
      </form>
    </div>
  </div>
</div>