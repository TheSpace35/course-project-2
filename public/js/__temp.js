const applications = JSON.parse(localStorage.getItem('APPLICATIONS')) || [];


/// Функция создания заявки ///
function createApplication(){
    const form = applicationBtn.closest('form');
    const application = {
        "id":(Math.max(...getData('APPLICATIONS','id')))+1, //Поиск максимального id и прибавление единицы
        "Name":`${form.name.value}`,
        "Phone":`${form.phone.value}`,
        "Message":`${form.message.value}`,
        "Status":"Не обработано"};
    let applications = JSON.parse(localStorage.getItem('APPLICATIONS'));
    applications.push(application);
    localStorage.setItem('APPLICATIONS',JSON.stringify(applications));

}

///

/// Обработка кнопки отправки заявки ///

applicationBtn.addEventListener('click', e => {
    e.preventDefault();
    const form = applicationBtn.closest('form');
    form.querySelectorAll('.application-form__label_error').forEach(e=> e.style.opacity = 0);
    if (form.checkValidity()) {
        // Валидация
        //const validCheck = validate('application',{'type':'name','element':form.name},{'type':'phone','element':form.phone});
        //  if(!validCheck.length > 0){

            applicationBtn.setAttribute('disabled', 'disabled');
            createApplication();
  
            document.querySelector('.application-form__message').style.opacity = 1;
    
            setTimeout(()=>{
                applicationPopup.classList.remove('active');
                document.querySelector('.form-overlay').style.display = 'none';
                form.reset();
    
            }, 2000)
        // }

        // else{

            console.log(validCheck);

            validCheck.forEach(el => {

                form.querySelectorAll('.application-form__input').forEach(e => {
                    console.log(e.nextElementSibling);
   
                    if(e.name === el.type){
                        e.nextElementSibling.style.opacity = 1;

                    }
                });
               
            });


        // }


    } else {
        form.reportValidity();
    }
});

///


/// Функция удаления заявки ///

function deleteApplicationRow(event) {
    const row = event.target.closest('tr');
    let applications = localStorage.getItem('APPLICATIONS');
    applications = applications.filter(app => app.id !== row.querySelector('.applications__table_id').textContent);
    localStorage.setItem('APPLICATIONS', JSON.stringify(applications));
    row.nextElementSibling.remove();
    row.remove();
}

///


/// Вывод списка заявок ///

function initApplications(){

    applicationsTable.innerHTML = `
    <tr>

        <th>id</th>
        <th>Имя</th>
        <th>Телефон</th>
        <th>Статус</th>
        <th>Действие</th>
        <th>Сообщение</th>

    </tr>
    
    `

    const applications = JSON.parse(localStorage.getItem('APPLICATIONS')) || [];

    applications.forEach(el=>{
        let row = document.createElement('tr');
        
        row.innerHTML=
        `
            <td class='applications__table_id'>${el.id}</td>
            <td>${el.Name}</td>
            <td>${el.Phone}</td>
            <td class='applications__table_status'>${el.Status}</td>
            <td><img class="applications__table_${el.Status ==='Не обработано' ? 'CompleteBtn' : 'RemoveBtn'}" src="icons/${el.Status ==='Не обработано' ? 'complete' : 'remove'}.svg" alt="иконка ${el.Status ==='Не обработано' ? 'завершения' : 'удаление'}"></td>
            <td><img class="applications__table_MsgBtn" src="icons/arrow-down.svg" alt="иконка раскрытия"></td>
        
        `;



        applicationsTable.append(row);



        /// Закрытие заявки //
        applicationsTable.querySelectorAll('.applications__table_CompleteBtn').forEach(el=>{

            el.addEventListener('click', e=>{
                let applications = localStorage.getItem('APPLICATIONS');
                applications.forEach(app=>{
                    if(app.id === el.closest('tr').querySelector('.applications__table_id').textContent){
                        app.Status = 'Обработано';
                        localStorage.setItem('APPLICATIONS', JSON.stringify(applications));

                    }
                });

                e.target.classList.remove('applications__table_CompleteBtn');
                e.target.classList.add('applications__table_RemoveBtn');
                e.target.src = 'icons/remove.svg';
                e.target.closest('tr').querySelector('.applications__table_status').textContent = 'Обработано';
                e.target.addEventListener('click', deleteApplicationRow)
                
                
            });


        });

        ///

        /// Удаление заявки //
        applicationsTable.querySelectorAll('.applications__table_RemoveBtn').forEach(el=>{

            applicationsTable.querySelectorAll('.applications__table_RemoveBtn').forEach(el => {
                el.addEventListener('click', deleteApplicationRow);
            });


        });

        ///
    })};