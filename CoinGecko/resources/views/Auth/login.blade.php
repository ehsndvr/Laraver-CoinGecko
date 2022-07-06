<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ mix('css/index.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/public.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ mix('js/jquery.min.js') }}" type="text/javascript" defer></script>
    @livewireStyles
</head>

<body>
    <div class="modal show" id="signInModal" style="padding-right: 17px; display: block;" aria-modal="true">
        <div class="modal-dialog h-sm-100 sm-m-0">
            <div class="modal-content h-sm-100 rounded-3">
                @if ($errors->any())
                <div id="unobtrusive-flash-messages" class="mt-2">
                    <div class="unobtrusive-flash-message-wrapper unobtrusive-flash-alert">
                        <div class="unobtrusive-flash-message" data-gtm-vis-recent-on-screen-52934946_45="599" data-gtm-vis-first-on-screen-52934946_45="599" data-gtm-vis-total-visible-time-52934946_45="100" data-gtm-vis-has-fired-52934946_45="1" data-gtm-vis-recent-on-screen-52934946_55="601" data-gtm-vis-first-on-screen-52934946_55="601" data-gtm-vis-total-visible-time-52934946_55="100" data-gtm-vis-has-fired-52934946_55="1" data-gtm-vis-recent-on-screen-52934946_80="603" data-gtm-vis-first-on-screen-52934946_80="603" data-gtm-vis-total-visible-time-52934946_80="100" data-gtm-vis-has-fired-52934946_80="1">{{ implode("\n", $errors->all(':message')) }}</div>
                    </div>
                </div>
                @endif
                <div class="modal-body mx-2">
                    <div class="tw-flex flex-column h-sm-100" data-controller="user-login-modal">
                        <div class="my-2">
                            <span class="h4 font-light text-black"><a href="{{ route('home') }}">Home</a></span>
                        </div>
                        <br>
                        <div class="my-2">
                            <span class="text-2xl text-black font-semibold">Log in</span>
                        </div>
                        <form class="new_user" id="signInModalForm" data-target="user-login-modal.form csrf-meta.form" action="auth/login" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓">
                            @csrf
                            <div class="my-2">
                                <div class="form-group">
                                    <label class="text-sm text-black font-semibold">Email</label>
                                    <input class="form-control modal-input sign-in-modal" style="height: 48px" data-target="user-login-modal.email" id="email" type="email" value="" name="email">
                                </div>
                                <div class="form-group">
                                    <label class="text-sm text-black font-semibold">Password</label>
                                    <input class="form-control modal-input sign-in-modal" style="height: 48px" data-target="user-login-modal.password" id="password" type="password" name="password">
                                </div>
                            </div>
                            <div class="my-1">
                                <div class="tw-flex tw-justify-between">
                                    <div>
                                        <input type="hidden" value="0"><input type="checkbox" value="1" checked="checked" name="remember_me" id="user_remember_me"> <label for="user_remember_me">Remember me</label>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                        <a href="#" class="text-sm" data-modal-id="resetPasswordModal" data-action="user-login-modal#openModal">Forgot your password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2">
                                <button id="sign-in-button" data-action="user-login-modal#submit" type="submit" data-view-component="true" class="dark:focus:tw-outline-none dark:focus:tw-text-white dark:hover:tw-bg-primary-400 dark:hover:tw-text-white dark:tw-text-white disabled:tw-opacity-50 focus:tw-outline-none focus:tw-text-white hover:tw-bg-primary-700 hover:tw-text-white tw-bg-primary-500 tw-border tw-border-transparent tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-white tw-justify-center tw-flex tw-w-full tw-py-3.5 tw-text-sm">
                                    Login
                                </button>
                            </div>
                            <input type="hidden" name="authenticity_token" value="ZKtCyz9D0KpRdI4rVUXs5uTi1tCrmcwiwaD81xbzLu9SsqzJ7ZlQmnjdOOtpJPXG5Y2dBoTMx9hI+qPNvq6Hvw==">
                        </form>
                        <div class="mt-2">
                            <small class="form-text text-center text-black text-sm">Don't have an account?
                                <a data-dismiss="modal" data-toggle="modal" data-target="#signUpModal" href="{{route('register')}}">Sign up</a>
                            </small>
                            <hr>
                        </div>
                        <div>
                            <small class="form-text text-center text-black text-sm">Didn't receive confirmation instructions?<a href="#" data-modal-id="resendConfirmationModal" data-action="user-login-modal#openModal"> Resend confirmation instructions</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>