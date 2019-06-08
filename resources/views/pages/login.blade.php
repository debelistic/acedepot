@extends('layout.app')

@section('content')
  <section class="overlape">
    <div class="block no-padding">
      <div data-velocity="-.1" style="background: url(images/slider2.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
      <div class="container fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-header">
              <h3>In prevailing adverse economy, we position you for growth in life, career and business</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="block remove-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            
            <div class="register_signin_wrapper">
              <div class="register_signin">
                <div class="register_form">
                  <form action="#" method="post" class="forms">
                    <div class="form_input">
                      <input type="text" name="first_name" id="first_name" required />
                      <label for="first_name" class="label_name">
                        <span class="content_name">first Name</span>
                      </label>
                    </div>
                    <div class="form_input">
                      <input type="text" name="last_name" id="last_name" required />
                      <label for="last_name" class="label_name">
                        <span class="content_name">last Name</span>
                      </label>
                    </div>
                    <div class="form_input">
                      <input type="email" name="email" id="reg_email" autocomplete="off" required />
                      <label for="email" class="label_name">
                        <span class="content_name">email</span>
                      </label>
                    </div>
                    <div class="form_input">
                      <input type="password" name="password" id="reg_password" autocomplete="off" required />
                      <label for="password" class="label_name">
                        <span class="content_name">password</span>
                      </label>
                    </div>
                    <input type="submit" value="SignUp">
                    <div class="form_p">
                      <p>have an account <span class="signup login_form">signin</span></p>
                    </div>
                  </form>
                </div>
                <div class="signin_form">
                  <form action="#" method="post" class="forms">
                    <div class="form_input">
                      <input type="email" name="email" id="email" required />
                      <label for="email" class="label_name">
                        <span class="content_name">Email</span>
                      </label>
                    </div>
                    <div class="form_input">
                      <input type="password" name="password" id="password" required />
                      <label for="password" class="label_name">
                        <span class="content_name">Password</span>
                      </label>
                    </div>
                    <input type="submit" value="Signin">
                    <div class="form_p">
                      <p >don't have an account <span class="signup">signup</span></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
              
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

