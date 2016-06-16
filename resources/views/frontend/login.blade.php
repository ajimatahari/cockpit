<form (submit)="login($event, email.value, password.value)">
  <div class="panel panel-body login-form">
    <div class="text-center">
      <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
      <h5 class="content-group">
        Login to your account
        <small class="display-block">Enter your credentials below</small>
      </h5>
    </div>

    <div class="form-group has-feedback has-feedback-left" [class.has-error]="hasEmailError">
      <input #email name="email" type="text" class="form-control" placeholder="E-Mail">
      <div class="form-control-feedback">
        <i class="icon-user text-muted"></i>
      </div>
      <span class="help-block" *ngIf="hasEmailError">
          <strong>These credentials do not match our records.</strong>
      </span>
    </div>

    <div class="form-group has-feedback has-feedback-left" [class.has-error]="hasPasswordError">
      <input #password name="password" type="password" class="form-control" placeholder="Password">
      <div class="form-control-feedback">
        <i class="icon-lock2 text-muted"></i>
      </div>
    </div>

    {{--<div class="form-group">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember"> Remember Me
        </label>
      </div>
    </div>--}}

    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
    </div>

    <div class="text-center">
      <a href="{{url('/password/reset')}}">Forgot password?</a>
    </div>
  </div>
</form>
