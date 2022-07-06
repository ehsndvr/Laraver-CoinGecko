<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{ mix('css/index.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/public.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ mix('js/jquery.min.js') }}" type="text/javascript" defer></script>
    @livewireStyles
</head>

<body>
    <div class="modal show" id="signUpModal" style="padding-right: 17px; display: block;" aria-modal="true">
        <div class="modal-dialog h-sm-100 sm-m-0">
            <div class="modal-content h-sm-100 rounded-3" data-controller="captcha sign-up" data-lang="en">
                @if ($errors->any())
                <div id="unobtrusive-flash-messages" class="mt-2">
                    <div class="unobtrusive-flash-message-wrapper unobtrusive-flash-alert">
                        <div class="unobtrusive-flash-message" data-gtm-vis-recent-on-screen-52934946_45="599" data-gtm-vis-first-on-screen-52934946_45="599" data-gtm-vis-total-visible-time-52934946_45="100" data-gtm-vis-has-fired-52934946_45="1" data-gtm-vis-recent-on-screen-52934946_55="601" data-gtm-vis-first-on-screen-52934946_55="601" data-gtm-vis-total-visible-time-52934946_55="100" data-gtm-vis-has-fired-52934946_55="1" data-gtm-vis-recent-on-screen-52934946_80="603" data-gtm-vis-first-on-screen-52934946_80="603" data-gtm-vis-total-visible-time-52934946_80="100" data-gtm-vis-has-fired-52934946_80="1">{{ implode("\n", $errors->all(':message')) }}</div>
                    </div>
                </div>
                @endif
                <form class="new_user" id="new_user" style="padding-bottom: 15px; padding-top: 15px; margin: 0px 20px;" data-target="csrf-meta.form" action="/auth/register" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓">
                    @csrf
                    <div class="my-2">
                        <span class="h4 font-light text-black"><a href="{{ route('home') }}">Home</a></span>
                    </div>
                    <br>
                    <div class="my-2">
                        <span class="text-2xl text-black font-semibold">
                            Sign Up To Continue
                        </span>
                    </div>
                    <div class="my-2">
                        <div class="form-group">
                            <label class="text-sm text-black font-semibold left">Email</label>
                            <input style="height: 48px" placeholder="Email" class="form-control modal-input sign-up-modal" data-action="focus->captcha#loadCaptcha" type="email" name="email" id="user_email">
                        </div>
                        <div class="form-group">
                            <label class="text-sm text-black font-semibold">Password</label>
                            <input class="form-control modal-input sign-up-modal" style="height: 48px" placeholder="Password" data-target="sign-up.password" data-action="input->sign-up#onInputChanged" data-withcaptcha="true" type="password" name="password" id="user_password">
                            <span data-action="click->sign-up#showPassword" class="text-xl far fa-eye show-password-icon"></span>
                            <label class="mt-1 text-sm text-black font-semibold" id="PasswordStrong">
                                Password Strength:
                                <span class="tw-text-red-700 tw-hidden" data-target="sign-up.weakPassword sign-up.passwordIndicator" id="weak_password">Weak - Stronger password required!</span>
                                <span class="tw-text-primary-800 dark:tw-text-primary-500 tw-hidden" data-target="sign-up.mediumPassword sign-up.passwordIndicator" id="medium_password">Medium - Works. But could be better!</span>
                                <span class="tw-text-green-700 tw-hidden" data-target="sign-up.strongPassword sign-up.passwordIndicator" id="strong_password">Strong - Good to go!</span>
                            </label>
                            <label class="text-sm tw-text-red-700" data-target="sign-up.errorMessage"></label>
                        </div>
                    </div>
                    <div class="my-2 center">
                        <div id="captcha" data-sitekey="d7b4358f-5390-46d4-a479-eb9a1fa28033" data-target="captcha.captchaForm">
                        </div>
                    </div>
                    <div class="my-2">
                        <button id="sign-up-button" data-target="captcha.submit sign-up.submit" type="submit" data-view-component="true" class="dark:focus:tw-outline-none dark:focus:tw-text-white dark:hover:tw-bg-primary-400 dark:hover:tw-text-white dark:tw-text-white disabled:tw-opacity-50 focus:tw-outline-none focus:tw-text-white hover:tw-bg-primary-700 hover:tw-text-white tw-bg-primary-500 tw-border tw-border-transparent tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-white tw-justify-center tw-flex tw-w-full tw-py-3.5 tw-text-sm">
                            Sign up
                        </button>
                    </div>
                    <div class="mt-2">
                        <small class="form-text text-center text-black text-sm">Already have an account?
                            <a data-dismiss="modal" data-toggle="modal" data-target="#signInModal" href="{{route('login')}}">Login</a><br>
                        </small>
                        <hr>
                    </div>
                    <div>
                        <small class="form-text text-center text-black text-sm">
                            <a href="/account/confirmation/new?locale=en">Didn't receive confirmation instructions?</a><br>
                        </small>
                    </div>
                    <input type="hidden" name="authenticity_token" value="ZKtCyz9D0KpRdI4rVUXs5uTi1tCrmcwiwaD81xbzLu9SsqzJ7ZlQmnjdOOtpJPXG5Y2dBoTMx9hI+qPNvq6Hvw==">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    var WeakSpan = document.getElementById("weak_password");
    var MediumSpan = document.getElementById("medium_password");
    var StrongSpan = document.getElementById("strong_password");
    document.getElementById("user_password").addEventListener("input", (input) => {
        StrengthChecker(input.target.value)
    })

    function StrengthChecker(PasswordParameter) {
        if (new RegExp(/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})/).test(PasswordParameter)) {
            WeakSpan.classList.add("tw-hidden")
            MediumSpan.classList.add("tw-hidden")
            StrongSpan.classList.remove("tw-hidden")
        } else if (new RegExp(/^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/).test(PasswordParameter)) {
            WeakSpan.classList.add("tw-hidden")
            MediumSpan.classList.remove("tw-hidden")
            StrongSpan.classList.add("tw-hidden")
        } else {
            WeakSpan.classList.remove("tw-hidden")
            MediumSpan.classList.add("tw-hidden")
            StrongSpan.classList.add("tw-hidden")
        }
    }
</script>