<!-- Start of popup for registration -->
<div class="popup" id="popup">
                        <img src="{{url('images/logo.png')}}" class="rlogo">
                        <h2>Registration Form</h2>
                        <form action="{{route('registration')}}" method="post">
                                @If(Session::has('success'))
                                    <div class="alert-message green">
                                        {{Session::get('success')}}
                                    </div>
                                @endif
                                @If(Session::has('fail'))
                                    <div class="alert-message red">
                                        {{Session::get('fail')}}
                                    </div>
                                @endif
                                @csrf
                                <div class="grid">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" id="username" placeholder="Username" value="{{old('phone_number')}}" required><br>
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{old('phone_number')}}" required><br>
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}" required><br>
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" placeholder="Password" value="{{old('password')}}" required><br>
                                        <label for="cpassword">Confirm Password</label>
                                        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" value="" required><br>
                                    
                                </div>
                                <button type="submit" onclick="closePopup()">Sign Up</button><br>
                                <p>Have an account? <a href="/login">Sign In here</a></p><br>
                            </form>
                    </div>