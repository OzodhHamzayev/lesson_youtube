<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- Birinchi team item -->
        <div class="col-md-4 mb-4">
            <div class="team">
                <div class="team-img">
                    <img class="img-fluid w-100" src="{{ asset('assets/img/team-1.jpg') }}" alt="Employee Image">
                </div>
                <div class="team-info">
                    <h5 class="font-weight-bold">{{ $employee->type }}</h5>
                    <p>{{ $employee->name }}</p>
                    <p>phone:{{ $employee->phone }}</p>
                    <p style="color: red">address:{{ $employee->address }}</p>
                </div>
            </div>
        </div>

        <!-- Boshqa team item'lar uchun ham shunga o'xshash tuzilma kiritish mumkin -->
    </div>
</div>

<!-- CSS -->
<style>
    /* Umumiy .team stili */
    .team {
        border: 1px solid #ddd;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .team:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    /* Rasm uchun maxsus stil */
    .team-img img {
        object-fit: cover;
        height: 300;
    }

    /* Ma'lumotlar qismi */
    .team-info {
        background-color: #007bff;
        color: white;
        padding: 40px;
        text-align: center;
    }

    .team-info h5 {
        margin: 0;
        font-size: 1.25rem;
    }

    .team-info p {
        margin: 10px 0;
    }

    .team-info .btn {
        background-color: #343a40;
        border: none;
    }

    .team-info .btn:hover {
        background-color: #23272b;
    }

    /* Flexbox uchun qatorni markazlash */
    .row {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .col-md-4 {
        flex: 1;
        max-width: 300px;
    }

    /* Butun sahifa uchun orqa fon */
    body {
        background-color: #03213f;
        /* Pastel oq rangli fon */
        color: #333;
        /* Butun sahifa matnining rangi */
    }

    /* Ma'lumotlar qismi orqa fonini yumshatish */
    .team-info {
        background-color: #1a1919;
        /* Yumshoq kulrang fon */
    }
</style>
