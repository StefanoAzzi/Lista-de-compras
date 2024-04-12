function removeItem(id){
    window.location.href = "comprasRemover.php?id=" + id
}

function atualizarItem(id){
    let item = prompt("Qual sua alteração?")
    window.location.href = "comprasAtualizar.php?id=" + id + "&item=" + item
}

function removeCompromisso(id){
    window.location.href = "compromissosRemover.php?id=" + id
}

function atualizarCompromisso(id){
    window.location.href = "compromissosAtt.php?id=" + id
}