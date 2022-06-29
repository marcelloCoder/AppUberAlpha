function validateFields(){
    const nomeValid = isNomeValid();
    document.getElementById("submit").disabled = !nomeValid;

}

function isNomeValid