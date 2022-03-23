function check(){
    var mpg =  Number(document.getElementById("input1").value);
    var fuel = Number(document.getElementById("input2").value);
    var city = Number(document.getElementById("city").value);

    
    if(mpg == "" || mpg<0){
        alert("please enter a valid average MPG");
    }

    if(fuel == "" || fuel<0){
        alert("please enter a valid average cost of gallon of fuel");
    }

    if(city == ""){
        alert("please choose a city you want to visit");
    }
 
    if(city!=""&&fuel != ""&&mpg != "" && fuel>=0 &&  mp>=0){ 
        document.getElementById('formid').submit();
        }
}