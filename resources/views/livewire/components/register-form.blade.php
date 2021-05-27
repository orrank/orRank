<div>
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" id="email" name="email" required autofocus>
        {!! $errors->first('email', "<span class='text-danger'>:message</span>") !!}
    </div>

    <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control {{ $error }}" wire:model="username" type="text" id="username" name="username"
            autocomplete="off" required>
        {!! $message !!}
        {!! $errors->first('username', "<span class='text-danger'>:message</span>") !!}
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" id="password" name="password" required>
        {!! $errors->first('password', "<span class='text-danger'>:message</span>") !!}
    </div>

    <div class="form-group">
        <div class="checkbox checkbox-success pt-1 pl-1">
            <input name="terms" id="terms" type="checkbox" required>
            <label for="terms" class="mb-0">I accept <a href="#">Terms and
                    Conditions</a></label>
        </div>
    </div>

    <div class="form-group account-btn text-center mt-2">
        <div class="col-12">
            <button class="btn width-md btn-bordered btn-dark waves-effect waves-light" type="submit"
                {{ $btnstatus }}>Sign Up</button>
        </div>
    </div>
</div>
