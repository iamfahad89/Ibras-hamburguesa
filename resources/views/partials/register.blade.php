<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal"  method="POST" id="registerForm">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="nameInput" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="nameInput" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                <span class="invalid-feedback help-block" role="alert" id="nameError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emailInput" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="emailInput" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                <span class="invalid-feedback help-block" role="alert" id="emailError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="passwordInput" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="passwordInput" type="password" class="form-control" name="password">

                                <span class="invalid-feedback help-block" role="alert" id="passwordError">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--action="{{ url('/register') }}"-->
@section('registerscripts')
@parent

<script>
$(function () {
    $('#registerForm').submit(function (e) {
        e.preventDefault();
        console.log('register submit')
        let formData = $(this).serializeArray();
        console.log(formData);
        $(".invalid-feedback").children("strong").text("");
        $("#registerForm input").removeClass("is-invalid");
        $(".form-group").removeClass('has-error');
                        
        $.ajax({
            method: "POST",
            headers: {
                Accept: "application/json"
            },
            url: "{{ url('/register') }}",
            data: formData,
            success: () => window.location.assign("{{ url('/home') }}"),
            error: (response) => {
                console.log(response)
                if(response.status === 422) {
                    console.log('error 422')
                    let errors = response.responseJSON;
                    console.log('errors',errors);
                    Object.keys(errors).forEach(function (key) {
                        $("#" + key + "Input").parent().parent().addClass('has-error');
                        $("#" + key + "Input").addClass("is-invalid");
                        $("#" + key + "Error").children("strong").text(errors[key][0]);
                    });
                } else {
                    window.location.reload();
                }
            }
        })
    });
})
</script>
@endsection