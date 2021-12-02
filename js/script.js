const inputs = document.querySelectorAll('.form_input'),
    labels = document.querySelectorAll('.form_label'),
    patientForm = document.querySelectorAll('.patient_form');
class imgUploader {
    constructor(){
        const FormimgUploader = document.querySelector('.form__imgUploader');
        const formWrapper = document.querySelector('.form__wrapper');
        const formCancel = document.querySelector('.formUploader__cancel');
        const imgUploader = document.querySelector('.imgUploader');
        const formImg = document.querySelector('.form__img');
        const formImgName = document.querySelector('.formUploader__fileName p');
        let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
        formImg.addEventListener('click', function(){
            imgUploader.click();
        })
        imgUploader.addEventListener('change', function(){
            const formFile = this.files[0];
            if (formFile) {
                const reader = new FileReader();
                reader.onload = function(){
                    let result = reader.result;
                    formImg.src = result;
                    formWrapper.classList.add('active');
                }
                formCancel.addEventListener('click', function(){
                    formImg.src = "";
                    formWrapper.classList.remove('active');
                })
                reader.readAsDataURL(formFile);
            }
            if (this.value) {
                let valueStore = this.value.match(regExp);
                formImgName.innerHTML = valueStore;
            }
        });
    }
}
const imguploader = new imgUploader();