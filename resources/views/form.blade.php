<!-- resources/views/patients/create.blade.php -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if(Session::has('success'))
                <script type="text/javascript">
                function massge() {
                Swal.fire(
                'Success',
                'Daily Entry Added Successfully'
                    );
                    }
                    window.onload = massge;
                    </script>
    @endif
</script>
        <div class="row justify-content-center" style="margin-top: 100px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Feedback</div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('patients.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Patient Name</label>
                                <input type="text" class="form-control" id="name" name="patient_name" required>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Patient Date Of Birth</label>
                                <input type="date" class="form-control" id="date" name="date_of_birth" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Address</label>
                                <input type="text" class="form-control" id="name" name="address" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">In Which Area Of The Hospital Did You Get Care</label>
                                <input type="text" class="form-control" id="name" name="hospital_area" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Please Rate Your Experience At Our Hospital</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rating" value="Very Good">
                                    <label class="form-check-label">Very Good</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rating" value="Good">
                                    <label class="form-check-label">Good</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rating" value="Fair">
                                    <label class="form-check-label">Fair</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rating" value="Poor">
                                    <label class="form-check-label">Poor</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                        <a href = "/" class = "btn btn-info">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
