<!DOCTYPE html>
<html>
<head>
    <title>Comprof Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6fb;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: white;
            border-right: 1px solid #eee;
        }
        .sidebar .menu-item {
            padding: 10px 20px;
            color: #555;
            cursor: pointer;
        }
        .sidebar .menu-item:hover {
            background: #f0f2f7;
        }
        .header {
            background: white;
            padding: 15px 25px;
            border-bottom: 1px solid #eee;
        }
        .card-program {
            border-radius: 12px;
        }
        .btn-purple {
            background-color: #6f42c1;
            color: white;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="sidebar p-3">
        <h5 class="fw-bold mb-4">PROTIC</h5>

        <div class="menu-item">Dashboard</div>
        <div class="menu-item fw-bold text-primary">Program</div>
        <div class="menu-item">Artikel</div>
        <div class="menu-item">Users</div>
        <div class="menu-item">Event</div>
        <div class="menu-item">Gallery</div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="flex-fill">

        <!-- HEADER -->
        <div class="header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Program</h4>
            <div>
                <input type="text" class="form-control d-inline-block me-2" style="width:200px;" placeholder="Search">
                <span class="fw-semibold">Halo, Admin</span>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="p-4">

            <div class="d-flex justify-content-between mb-4">
                <h5>Daftar Program</h5>
                <button class="btn btn-purple">+ Tambah Program</button>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card card-program p-3 shadow-sm">
                        <h6>Web Development</h6>
                        <p class="text-muted small">Belajar membuat website modern.</p>
                        <span class="badge bg-success">Aktif</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-program p-3 shadow-sm">
                        <h6>UI/UX Design</h6>
                        <p class="text-muted small">Belajar desain aplikasi dan website.</p>
                        <span class="badge bg-warning">Draft</span>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-program p-3 shadow-sm">
                        <h6>Mobile App</h6>
                        <p class="text-muted small">Membuat aplikasi Android & iOS.</p>
                        <span class="badge bg-danger">Nonaktif</span>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>