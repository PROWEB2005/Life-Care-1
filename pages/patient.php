<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bemorlarni Ro'yxatga olish</title>
    <link rel="stylesheet" href="../css/style.css?v=<?time()?>">
    <link rel="icon" href="../images/fevicon.ico.png">
</head>
<body>
    <div class="patient_main">
        <div class="patient_body">
            <h2 class="form_title">Bemorlarni Ro'yxatga olish</h1>
            <form action="" class="patient_form" method="post" enctype="multipart/form-data">
                <div class="input_content">
                    <h4 class="input_title">Bemor ismi</h4>
                    <div class="patient_input">
                        <input name="name" type="text" class="form_input" required>
                        <label for="name" class="form_label">Ismi...</label>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Bemor familiyasi</h4>
                    <div class="patient_input">
                        <input name="surname" type="text" class="form_input" required>
                        <label for="surname" class="form_label">Familiyasi...</label>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Bemor Otasining ismi</h4>
                    <div class="patient_input">
                        <input name="patronymic" type="text" class="form_input" required>
                        <label for="patronymic" class="form_label">Otasining ismi...</label>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Kasal turi</h4>
                    <div class="patient_input">
                        <input name="sicktype" type="text" class="form_input" required>
                        <label for="sicktype" class="form_label">Kasal turi...</label>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Bemor Yoshi</h4>
                    <div class="patient_input">
                        <input name="age" type="number" class="form_input" required>
                        <label for="age" class="form_label">Bemor yoshi...</label>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Bemorning Pasport seriya raqami</h4>
                    <div class="patient_input">
                        <input name="age" type="number" class="form_input" required>
                        <label for="age" class="form_label">AA123456...</label>
                    </div>
                </div>
                <div class="input_content input_uploader">
                    <h4 class="input_title">Bemor Rengen tasviri(yoki har qanday rasm)</h4> 
                    <div class="patient_input">
                        <div class="form__imgUploader">
                            <div class="form__wrapper">
                                <div class="form__image">
                                    <img src="" alt="" class="form__img">
                                </div>
                                <div class="formUploader__content">
                                    <div class="formUploader__icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                    <div class="formUploader__text">Rasm yuklash uchun bosing</div>
                                </div>
                                <div class="formUploader__cancel">Bekor qilish</div>
                                <div class="formUploader__fileName"><p>file name</p></div>
                            </div>
                            <input name="photo" type="file" class="imgUploader" accept=".jpg, .jpeg, .png" name="photo" hidden required>
                        </div>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Shifoxonaga kelgan Vaqti</h4>
                    <div class="patient_input">
                        <input name="date" type="date" class="form_input" required>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Tuzalgan(ketgan) Vaqti</h4> 
                    <div class="patient_input">
                        <input name="date" type="date" class="form_input" required>
                    </div>
                </div>
                <div class="input_content">
                    <h4 class="input_title">Bemorning Telefon raqami</h4>
                    <div class="patient_input">
                        <input name="tel" type="number" class="form_input" required>
                        <label for="tel" class="form_label">+99812345678...</label>
                    </div>
                </div>
                <button type="submit" class="btn patient_btn btn-light btn-radius btn-brd grd1 effect-1">Tasdiqlash</button>
            </form>
        </div>
        <div class="patient_panel">
            <h3 class="patient_panel_title">Creative Coders jamoasi</h1>
            <h1 class="patient_panel_text">Bemorlar ro'yxatini bizning Databazalarda ishonchli saqlang</h2>
            <p class="patient_panel_info">Buloqboshi tumanidagi barcha shifoxona poliklinika va internatlar bemorlar va kasallar ro'yxatini saqlash uchun ishlab chiqildi. Ro'yxatlar qo'shish faqat shifoxona admini(Ro'yxatga javobgor shaxs) tomonidan qo'shilib boriladi. Ro'yxatlarni o'chirsh boshqarish va nazorat qilish Faqat shifoxona egasi qo'lida bo'ladi.</p>
            <img src="../images/image_processing20200213-28304-bq9v4n-removebg-preview.png" alt="">
            <div class="patient_panel_footer">Creative Coders jamoasi mahsuloti</div>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>