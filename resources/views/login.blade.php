@extends('layout.layout')

@section('title', 'Login')

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
                    <h2>Вход</h2>
                  </div>
                  <div class="content">
                    <form id="contact" action="{{ route('login_action')}}" method="post">
                      @csrf
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          @error('login')
                            <div class="alert alert-danger" role="alert">
                              {{ $message}}
                            </div>
                          @enderror
                          <fieldset>
                            <input name="email" type="text" id="email" placeholder="Ваш email" required="">
                          </fieldset>
                        </div>
                        @error('password')
                          <div class="alert alert-danger" role="alert">
                            {{ $message}}
                          </div>
                        @enderror
                        <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="password" type="text" id="email" placeholder="Ваш пароль" required="">
                            </fieldset>
                        </div>


                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button">Вход</button>
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