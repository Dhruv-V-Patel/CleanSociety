<!-- Modal -->
<div class="modal fade" id="SignupModal" tabindex="-1" aria-labelledby="SignupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="SignupModalLabel">Signup to CleanSociety Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label"><i class="fa-solid fa-user"></i> Name</label>
                        <div class="input-group">
                            <div class="form-floating">
                                <input type="text" aria-label="First name" class="form-control" id="FName" name="FName"
                                    required placeholder="First Name">
                                <label for="floatingInput">First Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" aria-label="Middle name" class="form-control" id="MName" name="MName"
                                    required placeholder="Middle Name">
                                <label for="floatingInput">Middle Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" aria-label="Last name" class="form-control" id="LName" name="LName"
                                    required placeholder="Last Name">
                                <label for="floatingInput">Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 mb-3">
                            <label for="exampleInputEmail1" class="form-label"><i class="fa-solid fa-envelope"></i>
                                Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="col-4 mb-3">
                            <label for="exampleInputMobile1" class="form-label"><i class="fa-solid fa-phone"></i>
                                Phone</label>
                            <input type="text" class="form-control" id="Mobile" name="Mobile" placeholder="9999555111"
                                required>
                            <div id="emailHelp" class="form-text text-muted">Phone should be of only 10 digit.</div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="mb-3">
                    <label for="exampleInputName" class="form-label"><i class="fa-solid fa-location-dot"></i> City & Pincode</label>
                        <div class="input-group">
                            <div class="form-floating">
                                <input type="text" aria-label="City" class="form-control" id="city" name="city" required
                                    placeholder="Enter City Name">
                                <label for="floatingInput">City Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" aria-label="Pincode" class="form-control" id="pin" name="pin"
                                    required placeholder="Enter pincode">
                                <label for="floatingInput">Pincode</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="exampleInputPassword1" class="form-label"><i class="fa-solid fa-lock"></i>
                            Password</label>
                        <input type="password" class="form-control" id="Password">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="exampleInputPassword1" class="form-label"><i class="fa-solid fa-lock"></i>
                            Confirm Password</label>
                        <input type="password" class="form-control" id="C_Password">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="Singup">Create Account</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </form>
    </div>
</div>
</div>