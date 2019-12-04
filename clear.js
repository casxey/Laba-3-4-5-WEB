function clearall(){
    let element = ["output", "output1", "output2","output3","output4","output5","output6","output7","output8","output9"];

    for( var i=0;i<=element.length;i++){
        document.getElementById(element[i]).value=''
    }
}