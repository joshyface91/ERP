@extends ('layout')

@section ('content')
<div id="login">    
    <form id="login_form">
        <div class="field_container">
        <input type="text" placeholder="Email Address">
        </div>
        
        <div class="field_container">
        <input type="Password" placeholder="Password">
        </div>

        <!-- code for inserting button to stay logged into the system -->
        <!-- <div id="remember_me_container">
            <input name="user[remember_me]" type="hidden" value="0"><input id="user_remember_me" name="user[remember_me]" type="checkbox" value="1">
            <label class="login_link" for="user_remember_me" id="remember_me_label">stay signed in</label>
        </div> -->

        <button id="sign_in_button">
            <span class="button_text">Sign In</span>
        </button>
    </form>
</div>
@endsection