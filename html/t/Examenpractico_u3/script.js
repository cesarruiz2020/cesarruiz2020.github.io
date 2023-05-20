function setResult(value) {
    document.getElementById('resultado').innerHTML = value;
}

function getResult() {
    return(document.getElementById('resultado').innerHTML);
}

function add(key) { 
    var result = getResult();
    if (result!='0' || isNaN(key)) setResult(result + key);
    else setResult(key);
}

function calc() {
    var result = eval(getResult()); 
    setResult(result);
}

function del() { 
    setResult(0);
}
