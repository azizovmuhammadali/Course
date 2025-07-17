<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Xush kelibsiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Xush kelibsiz!</h4>
                    <p>Ilovaga kirish uchun rolingizni tanlang</p>
                </div>

                <div class="card-body">
                    {{-- Alert uchun joy --}}
                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div id="errorAlert" class="alert alert-danger d-none" role="alert">
                        Iltimos, rol tanlang!
                    </div>

                    <form id="roleForm">
                        <div class="mb-3">
                            <label for="role" class="form-label">Rolni tanlang:</label>
                            <select class="form-select" id="role" name="role" required>
                                <option value="">Tanlang...</option>
                                <option value="admin">Admin</option>
                                <option value="manager">Manager</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirish</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    const adminLoginRoute = "{{ route('admin.login') }}";
    const managerLoginRoute = "{{ route('manager.login') }}";
</script>

<script>
    document.getElementById('roleForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const role = document.getElementById('role').value;
        const alertBox = document.getElementById('errorAlert');

        if (role === 'admin') {
            window.location.href = adminLoginRoute;
        } else if (role === 'manager') {
            window.location.href = managerLoginRoute;
        } else {
            alertBox.classList.remove('d-none');
        }
    });
</script>

</body>
</html>
