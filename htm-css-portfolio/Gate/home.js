window.load = slider(1);

var imagemNumber = 1;

function slider(n){
    var allBgs = 5;
    
    document.getElementById('imagemfundo').style.backgroundImage = "url('img/logo_gatetotheworld-"+n+".jpg')";
}

function anterior(){
    if(imagemNumber>1){
        imagemNumber--;
        slider(imagemNumber);
    }
}
function proximo(){
    if(imagemNumber<5){
        imagemNumber++;
        slider(imagemNumber);
    }
}