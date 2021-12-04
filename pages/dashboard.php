<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDICINE</title>
    <link rel="stylesheet" href="../css/fontawesome.css?v=<?= time() ?>">
    <link rel="stylesheet" href="../css/dashboard.css?v=<?= time() ?>">
</head>

<body>
    <main class="main">
        <nav class="nav">
            <div class="logo">
                <img src="/images/navlogo.png" alt="" class="nav_logo">
            </div>
            <ul class="nav_list">
                <li class="nav_link"><i id="nav_icon" class="fas fa-stethoscope"></i><a class="nav_link" href="./?route=dashboard">Kabinet</a></li>
                <li class="nav_link"><i id="nav_icon" class="fas fa-user-injured"></i><a class="nav_link" href="./?route=dashboard&page=bemor">Bemorlar ro'yxati</a></li>
                <li class="nav_link"><i id="nav_icon" class="fas fa-user-md"></i><a class="nav_link" href="">Patients</a></li>
                <li class="nav_link"><i id="nav_icon" class="fas fa-credit-card"></i><a class="nav_link" href="">Payments</a></li>
            </ul>
            <div class="nav_help">
                <li class="nav_link"><i id="nav_icon" class="far fa-question-circle"></i><a class="nav_link" href="">Help</a></li>
            </div>
        </nav>
        <div class="page">
            <? if ($_GET['page'] != 'bemor') : ?>
                <div class="cabinet">
                    <div class="dashboard">
                        <div class="malumotlar">
                            <i id="dashboard_icon" class="fas fa-medkit"></i>
                            <div class="info">
                                <h2 class="malumot_turi">Appointments</h2>
                                <h4 class="number">213</h4>
                            </div>
                        </div>
                        <div class="malumotlar">
                            <i id="dashboard_icon" class="fas fa-user-injured"></i>
                            <div class="info">
                                <h2 class="malumot_turi">New Patients</h2>
                                <h4 class="number">213</h4>
                            </div>
                        </div>
                        <div class="malumotlar">

                            <i id="dashboard_icon" class="fas fa-procedures"></i>
                            <div class="info">
                                <h2 class="malumot_turi">Operations</h2>
                                <div class="number">344</div>
                            </div>
                        </div>
                        <div class="malumotlar">
                            <i id="dashboard_icon" class="fas fa-hand-holding-usd"></i>
                            <div class="info">
                                <h2 class="malumot_turi">Hospital Earnings</h2>
                                <div class="number">33</div>
                            </div>
                        </div>
                    </div>
                    <div class="diagramma">
                        <img class="diagramm_img" src="../images/diagramma.png" alt="">
                    </div>
                </div>
            <? endif; ?>
            <? if ($_GET['page'] == 'bemor') : ?>
                <div class="patient_main">
                    <div class="patient_header">
                        <h2 class="patient_title">Bemorlar Ro'yhati</h2>
                        <form action="" class="search_form">
                            <div class="search_input">
                                <input class="search" type="search" name="search" placeholder="Bemorlar ichidan izlash...">
                                <span class="search_icon"><i class="fas fa-search"></i></span>
                                <span class="search_cancel"><i class="fas fa-times"></i></span>
                            </div>
                        </form>
                    </div>
                    <div class="patient_body">
                        <table class="patient_table">
                            <thead class="thead">
                                <tr class="patient_list_title">
                                    <th scope="col">T/R</th>
                                    <th scope="col">Ismi</th>
                                    <th scope="col">Familyasi</th>
                                    <th scope="col">Kasal turi</th>
                                    <th scope="col">Yoshi</th>
                                    <th scope="col">Pasport seriya</th>
                                    <th scope="col">Telefon raqami</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                <tr class="patient_list">
                                    <th>1</th>
                                    <td>Falonchi</td>
                                    <td>Falonchiyev</td>
                                    <td>Yo'tal</td>
                                    <td>100</td>
                                    <td>AA4856732087</td>
                                    <td>998919999999</td>
                                    <td><a href="#" class="table_btn edit"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="#" class="table_btn delete"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                <tr class="patient_list">
                                    <th>1</th>
                                    <td>Falonchi</td>
                                    <td>Falonchiyev</td>
                                    <td>Yo'tal</td>
                                    <td>100</td>
                                    <td>AA4856732087</td>
                                    <td>998919999999</td>
                                    <td><a href="#" class="table_btn edit"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="#" class="table_btn delete"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                <tr class="patient_list">
                                    <th>1</th>
                                    <td>Falonchi</td>
                                    <td>Falonchiyev</td>
                                    <td>Yo'tal</td>
                                    <td>100</td>
                                    <td>AA4856732087</td>
                                    <td>998919999999</td>
                                    <td><a href="#" class="table_btn edit"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="#" class="table_btn delete"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <? endif; ?>
        </div>
    </main>
    <script src="../js/search.js?v=<?= time() ?>"></script>
</body>

</html>