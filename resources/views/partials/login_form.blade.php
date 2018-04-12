<div class="login-form popup hidden">
    <a href="#" id="closeLoginForm"><i class="far fa-times-circle"></i></a>
    <div class="login-form-wrapper sign-in">
        <h2>@lang('index.auth.form.sign_in.sign_in')</h2>
        <div class="error-message hidden"><p>@lang('index.auth.form.sign_in.error_message')</p></div>
        <form id="signInForm">
            <div class="email form-element">
                <input type="email" name="email" placeholder="@lang('index.auth.form.sign_in.email')">
                <i class="far fa-envelope"></i>
            </div>
            <div class="password form-element">
                <input type="password" name="password" placeholder="@lang('index.auth.form.sign_in.password')">
                <i class="fas fa-lock"></i>
            </div>
            <a href="#" class="button" id="signInButton">@lang('index.auth.form.sign_in.sign_in')</a>
        </form>
        <div class="additional-links">
            <div class="remember-me">
                <input type="checkbox" id="rememberMe">
                <label for="contactChoice1" for="rememberMe">@lang('index.auth.form.sign_in.remember')</label>
            </div>
            <div class="new-user">
                <span>@lang('index.auth.form.sign_in.new_user') <a href="#"
                                                                   id="switchToSignUp">@lang('index.auth.form.sign_up.sign_up')</a></span>
            </div>
        </div>
    </div>
    <div class="login-form-wrapper sign-up hidden">
        <h2>@lang('index.auth.form.sign_up.sign_up')</h2>
        <div class="error-message hidden"><p>@lang('index.auth.form.sign_up.error_message')</p></div>
        <div class="info-message"><p>@lang('index.auth.form.sign_up.summary')</p></div>
        <form id="signUpForm">
            <div class="email form-element">
                <input type="email" name="email" placeholder="@lang('index.auth.form.sign_in.email')">
                <i class="far fa-envelope"></i>
            </div>
            <a href="#" class="button" id="signUpButton">@lang('index.auth.form.sign_up.button')</a>
        </form>
        <div class="success-message hidden"><p>@lang('index.auth.form.sign_up.success')</p></div>
        <div class="additional-links">
            <div class="new-user">
                <span>@lang('index.auth.form.sign_up.existing_user') <a href="#"
                                                                        id="switchToSignIn">@lang('index.auth.form.sign_in.sign_in')</a></span>
            </div>
        </div>
    </div>
</div>
