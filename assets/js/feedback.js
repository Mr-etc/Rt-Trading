var notifytimeoit;
window.addEventListener("load", ()=>{
    $("#phone_input").mask("8 (999) 999-99-99");
    $(".input_item-field").on("focus", (e)=>{
        let input = $(e.target);
        input.siblings("label").addClass("input_item-label--active");
    });
    $(".input_item-field").on("blur", (e)=>{
        let input = $(e.target);
        if(input.val() == "")
            input.siblings("label").removeClass("input_item-label--active");
    });
    $("button.section-feedback_button-send").on("click", (e)=>{
        let fields = document.querySelectorAll("#name_input, #mail_input, #topic_message_input, #message_input");
        if(/^.[A-zА-яё ]+$/.test(fields[0].value)
        && fields[1].value != ""
        && fields[2].value != ""
        && fields[3].value != ""){
            clearTimeout(notifytimeoit);
            $.ajax({
                type: 'POST',
                url: "./components/feedback.php",
                data: `method=register_request&name=${fields[0].value}&mail=${fields[1].value}&topic=${fields[2].value}&message=${fields[3].value}`,
                cache: false,
                beforeSend: ()=>{
                    e.target.setAttribute('disabled', 'disabled');
                },
                success: (data)=>{
                    e.target.removeAttribute('disabled');
                    try {
                        data = JSON.parse(data);
                        if(data['Status'] == "true"){
                            createNotify("Уведомление", data['Response']);
                            setTimeout(() => {
                                document.location.href = "/";
                            }, 3000);
                        }
                        else
                            createNotify("Ошибка", data['Response']);
                    } catch{
                        createNotify("Ошибка", "Ошибка соединения с сервером!");
                    }
                }
            });
        }else{
            clearTimeout(notifytimeoit);
            createNotify("Ошибка", "Заполните все поля!");
        }


    })
});
function createNotify(title, message){
    $("main.content > .popup").html(`
        <div class="popup_body">
            <div class="popup_body-header">
                <h3 class="popup_body-title">${title}</h3>
            </div>
            <span class="popup_body-message">${message}</span>
        </div>
    `);
    notifytimeoit = setTimeout(()=>{
        $('main.content > .popup .popup_body').slideUp('slow', function(){
            $(this).remove();
        });
    }, 3000);
}