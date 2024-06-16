<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Add a Customer</h3>
      <form action="{{ route('customers.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" class="form-control" id="first_name" name="first_name" required>
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" id="last_name" name="last_name" required>
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input type="text" class="form-control" id="age" name="age" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="dob">Date of birth</label>
          <input type="text" class="form-control" id="dob" name="dob" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Create Customer</button>
      </form>
    </div>
  </div>
</div>