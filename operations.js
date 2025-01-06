$(document).ready(function(){
    //alert("Hello World");
    //var valor = $("#textBox").val(); //a través del id
    //var valor = $(".textClass").val(); // a través de la clase
    
    //alert(valor);

    //$("#textBox").val("1801");    
});

function deleteCharacter() {
    let currentValue = $('.textBox').val();
    $('.textBox').val(currentValue.substring(0, currentValue.length - 1));
}

function insertCharacter(char) {
    let currentValue = $('.textBox').val();
    if(currentValue == 0 || currentValue == "ERROR!")
        clearInput();
    let length = currentValue.length;
    let flag = false;
    if(char == '+' || char == '-' || char == '*' || char == '/' || char == '%' || char == 'r' || char == 'p' || char == 'f')
        flag = true;
    if(length == 0){
        if(flag)
        return;
    }
    let flagNew = false;
    let lastCharacter = currentValue[length-1];
    if(lastCharacter == '+' || lastCharacter == '-' || lastCharacter == '*' || lastCharacter == '/'  || char == '%' || char == 'r' || char == 'p' || char == 'f')
        flagNew = true;
    if(flag && flagNew)
        $('.textBox').val(currentValue.substring(0,length-1) + char);
    else
        $('.textBox').val($('.textBox').val() + char);
}

function clearInput() {
    $('.textBox').val('');
}

function clearEntry() {
    let currentValue = $('.textBox').val();

    let divFlag = currentValue.includes('/');
    let timesFlag = currentValue.includes('*');
    let diffFlag = currentValue.includes('-');
    let addFlag = currentValue.includes('+');

    if(!divFlag && !timesFlag && !diffFlag && !addFlag){
        clearInput();
        return;
    }
    
    if(divFlag){
        $('.textBox').val(currentValue.substring(0, currentValue.indexOf('/')+1));
    }else if(timesFlag){
        $('.textBox').val(currentValue.substring(0, currentValue.indexOf('*')+1));
    }else if(diffFlag){
        $('.textBox').val(currentValue.substring(0, currentValue.indexOf('-')+1));
    }else{
        $('.textBox').val(currentValue.substring(0, currentValue.indexOf('+')+1));
    }
}

function result() {
    let currentValue = $('.textBox').val();
    let length = currentValue.length;
    let flag = false;
    let char = currentValue[length-1];
    if(char == '+' || char == '-' || char == '*' || char == '/' || char == '%' || char == 'r' || char == 'p' || char == 'f')
        flag = true;
    if(flag)
        $('.textBox').val("ERROR!");
    else
        $('.textBox').val(eval($('.textBox').val()));
}
