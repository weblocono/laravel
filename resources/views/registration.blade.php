@extends('layout.layout')

@section('title', 'Registration')

@section('content')
<section class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="down-contact">
            <div class="row">
              <div class="col-lg-12">
                <div class="sidebar-item contact-form">
                  <div class="sidebar-heading">
                    <h2>Login</h2>
                  </div>
                  <div class="content">
                    <form id="contact" action="{{ route("registration_action")}}" method="POST" enctype="multipart/form-data">
                      <div class="row">
                        @csrf
                        <div class="col-md-12 col-sm-12">
                          @include('components.alerts.error', ['error' => 'username'])
                          <fieldset>
                            <input value="{{ old('username') }}" name="username" type="text" id="name" placeholder="Ваше имя" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12 col-sm-12">
                          @include('components.alerts.error', ['error' => 'email'])
                          <fieldset>
                            <input value="{{ old('email') }}" name="email" type="text"  placeholder="Ваш email" required="">
                          </fieldset>
                        </div>
                        @include('components.alerts.error', ['error' => 'password'])
                        <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="password" type="text"  placeholder="Ваш пароль" required="">
                            </fieldset>
                        </div>



                        <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="re_password" type="text"  placeholder="Повторите ваш пароль" required="">
                            </fieldset>
                        </div>

                        <div class="col-md-12 col-sm-12">
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"
                                      id="inputGroupFileAddon01">Upload</span>
                              </div>
                              <div class="custom-file">
                                  <input type="file" name="photo" class="custom-file-input"
                                      id="inputGroupFile01"
                                      aria-describedby="inputGroupFileAddon01"
                                      >
                                  <label class="custom-file-label"
                                      for="inputGroupFile01">Choose file (*.jpg, *.jpeg, *.png)</label>
                              </div>
                          </div>
                        </div>


                        <div class="col-lg-12">
                          @include('components.alerts.error', ['error' => 'policy'])
                          <fieldset style="display: flex; align-items: center; justify-content: flex-start;">
                              <input
                                  style="width: auto; height: auto; margin: 0 10px 0 0;"
                              
                              type="checkbox" name="policy" />
                              <p>I agree to the privacy policy</p>
                          </fieldset>
                        </div>

                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button">Registration</button>
                          </fieldset>
                        </div>
                        
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection