function validacao(){
    var dados = document.getElementsByClassName('obrigatorio')
    var tamanho = dados.length
    var vazio = false
    for(var i = 0; i < tamanho; i++){
        if(dados[i].value == 0){
            vazio = true
            break
        }
    }
    if(vazio){
        alert("Por favor, preencha o campo nome.")
        return false
    }
    else{
        return true
    }
}