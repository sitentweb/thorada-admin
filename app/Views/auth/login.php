<?= $this->extend('template/authentication') ?>

<?= $this->section('content') ?>

<section class="content-main mt-40 mb-0">
    <div class="card mx-auto card-login">
        <div class="card-header">
            <img src="/assets/imgs/logo/logo.png" alt="" srcset="">
        </div>
        <div class="card-body">
            <h4 class="card-title mb-4">Sign in</h4>
            <form id="loginForm" onsubmit="login()" action="javascript:void(0)">
                <div class="mb-3">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" />
                </div>
                <!-- form-group// -->
                <div class="mb-3">
                    <input class="form-control" id="password" name="password" placeholder="Password" type="password" />
                </div>
                <!-- form-group// -->
                <div class="mb-3">
                    <a href="#" class="float-end font-sm text-muted">Forgot password?</a>
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" checked="" />
                        <span class="form-check-label">Remember</span>
                    </label>
                </div>
                <!-- form-group form-check .// -->
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </div>
                <!-- form-group// -->
            </form>
        </div>
    </div>
</section>



<style>
    body {
        height: 100%;
        max-height: fit-content;
        min-height: min-content;
    }
</style>

<?= $this->endSection() ?>


<?= $this->section('moreScripts') ?>
<script>
    $(document).ready(function() {
        $('#loginForm').on('submit', function() {

            var email = $('#email').val();
            var password = $('#password').val();

            // console.log(this.email);

            if (email.length == 0) {
                $.toast({
                    heading: 'Error',
                    text: 'Email is required',
                    icon: 'error',
                    loader: false,
                    position: 'top-center'
                })
                return false;
            }

            if (password.length == 0) {
                $.toast({
                    heading: 'Error',
                    text: 'Password is required',
                    icon: 'error',
                    loader: false,
                    position: 'top-center'
                })
                return false;
            }

            var formData = new FormData(this);

            // formData.append("email", email);
            // formData.append("password", password);

            $.ajax({
                type: "post",
                url: "/login/doLogin",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success: function(response) {

                    if (response.status) {
                        $.toast({
                            heading: 'Success',
                            text: response.message,
                            icon: 'success',
                            loader: false,
                            position: 'top-right'
                        });

                        window.location.href = '/dashboard';

                    } else {
                        $.toast({
                            heading: 'Error',
                            text: response.message,
                            icon: 'error',
                            loader: false,
                            position: 'top-right'
                        });
                    }

                },
                error: function(e) {
                    console.log(e);
                }
            });

        })
    });
</script>
<?= $this->endSection() ?>