
function validate(formType, ...fields){

    let errors = [];


    fields.forEach(field => {
        switch (formType) {
           

            case 'application':

                switch(field.type){


                    case 'phone':

                        const phonePattern = /^\d{11}$/;
                        if(field.element.value[0] === '+') { 
                            field.element.value = field.element.value.slice(1);
                        }
                        if (!phonePattern.test(field.element.value)) {
                            field.element.nextElementSibling.style.opacity = 1;
                            field.element.nextElementSibling.textContent = 'Номер телефона должен состоять из 11 цифр';
                            errors.push({type:'phone'});
                            break;
                        }

                        field.element.value = '+' + field.element.value;
                        break;

                    case 'name':
                        const namePattern = /^[A-Za-z]*(\s[A-Za-z]*)*$/;
                        if (!namePattern.test(field.element.value)) {
                            field.element.nextElementSibling.style.opacity = 1;
                            field.element.nextElementSibling.textContent = 'Имя не должно содержать цифр или спец.символов';
                            errors.push({type: 'nameFormat'});
                            break;
                        }

                        break;


                };

                break;



        }
    });

    return errors;



}


