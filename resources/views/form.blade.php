@extends('layouts.app')

@section('content')
    <div class="container mx-auto m-5 p-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="h3 text-center m-3">Contact Us</div>
                        <div id="response"></div>
                        <form id="contactForm">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Fullname">
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="message" name="message"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <button type="button" class="btn btn-primary w-100" id="sendMessage">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $('#sendMessage').on('click', function() {
            $(this).prop('disabled', true);
            submitForm();
        });

        const submitForm = async () => {
            try {
                var formData = $('#contactForm').serialize();
                const response = await axios.post('concerns/store', formData, {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $("#response").html(
                    `<div class="alert alert-success text-center">Message sent</div>`);
                $("#email").val(null);
                $("#name").val(null);
                $("#message").val(null);
            } catch (error) {
                const validationError = error.response.data;
                if (validationError) {
                    const propertiesToCheck = [
                        'email', 'name', 'message'
                    ];

                    for (const property of propertiesToCheck) {
                        if (validationError[property]) {
                            $("#response").html(
                                `<div class="alert alert-danger text-center">${validationError[property][0]}</div>`
                            );
                            break;
                        }
                    }
                } else {
                    $("#response").html('<div class="alert alert-danger text-center">Error submitting form.</div>');
                }
            } finally {
                $('#submitBtn').prop('disabled', false);
            }
        }
    </script>
@endsection
