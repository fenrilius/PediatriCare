<div style="padding-left: 30%">

    <h2> <b>Create Account</b> </h2>
    <br>
    <form action="<?= base_url('registcontroller/register') ?>" method="POST">
        <p>Full Name</p>
        <input type="fullname" name="fullname" value="<?= set_value('fullname') ?>" style="padding: 5px; padding-right: 225px;">
        <p style="padding: 15px 0 0 0">Email</p>
        <input type="email" name="email" value="<?= set_value('email') ?>" style="padding: 5px; padding-right: 225px;">
        <p style="padding: 15px 0 0 0">username</p>
        <input type="username" name="username" value="<?= set_value('username') ?>" style="padding: 5px; padding-right: 225px;">
        <p style="padding: 15px 0 0 0">Password</p>
        <input type="password" name="password" value="<?= set_value('password') ?>" style="padding: 5px; padding-right: 225px;">
        <br>
        <br>
        <button type="submit" class="btn btn-primary float-center">
            Register Account
        </button>
        </a>
    </form>
</div>