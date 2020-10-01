document.onload

function displayFormErrorMessage(){
    const feedbackMessage = document.getElementById('feedback-container').innerHTML;

    if(feedbackMessage.length !== 0){
        alert(feedbackMessage);
    }
}

displayFormErrorMessage();