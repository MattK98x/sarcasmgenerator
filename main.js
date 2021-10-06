function sarcasm(){
    let retArr = [];
    let input = $("#inputText").val();
    let inputArr = input.split('');

    for(let i = 0; i < inputArr.length; i++){
        
        if(/^[a-zA-Z]/.test(inputArr[i])){
            if(i % 2 == 0){
                if(inputArr[i] == inputArr[i].toUpperCase()){
                    retArr[i] = inputArr[i];
                }
                else{
                    retArr[i] = inputArr[i].toUpperCase();
                }
            }
            else{
                if(inputArr[i] == inputArr[i].toLowerCase()){
                    retArr[i] = inputArr[i];
                }
                else{
                    retArr[i] = inputArr[i].toLowerCase();
                }
            }
        }
        else{
            retArr[i] = inputArr[i];
        }
    }

    let output = retArr.join('');

    $("#outputText").val(output);
}

function deleteText(){
    let input = $("#inputText").val();

    if(input != ""){
        input = "";
        let output = "";
        $("#inputText").val(input);
        $("#outputText").val(output);
    }
}