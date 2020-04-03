<div style="padding-left: 30%">
    <h2>Login</h2>
    <form action="<?= site_url('LoginController') ?>" method="post" accept-charset="utf-8">
        <table>
            <tbody>
                <tr>
                    <td>Username</td>
                </tr>

                <tr>
                    <td><input type="username" name="username" class="textlog" style="padding: 5px; padding-right: 225px;"></td>
                </tr>

                <tr>
                    <td style="padding-top: 10px">Password</td>
                </tr>

                <tr>
                    <td><input type="password" name="password" class="textlog" style="padding: 5px; padding-right: 225px"></td>
                </tr>

                <tr>
                    <td style="padding-top: 10px"><input type="submit" value="Sign In" id="signin" class="sign"></td>
                </tr>
            </tbody>
        </table>
    </form>
    <div class="text-left">
        <a class="btn btn-secondary btn-sm active" href="<?= base_url('RegistController'); ?>">Create an Account!</a>
    </div>
</div>
