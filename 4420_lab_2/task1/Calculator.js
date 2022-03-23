            function calculator(){

            var a = document.getElementById('a').value
            var b = document.getElementById('b').value
            var c = document.getElementById('c').value
            let alert_check = false
            let alert_message=""
            var x1 = "type sth plz"
            alert_check = false
            alert_message = ""

            document.getElementById("a").style.borderColor="black"
            document.getElementById("b").style.borderColor="black"
            document.getElementById("c").style.borderColor="black"

            if(a<-100||a>100||a===0||Number.isInteger(parseFloat(a))===false){
                document.getElementById("a").style.borderColor="red"
                alert_check = true
                alert_message="Invalid entry for a. Must be an none-zero integer between -100 and +100 \n"
            }

            if(b<-100||b>100||Number.isInteger(parseFloat(b))===false||b===0){
                document.getElementById("b").style.borderColor="red"
                alert_check = true
                alert_message=alert_message+"Invalid entry for b. Must be an integer between -100 and +100 \n"
            }
            if (c<-100||c>100||Number.isInteger(parseFloat(c))===false||c===0){
                document.getElementById("c").style.borderColor="red"
                alert_check = true
                alert_message=alert_message+"Invalid entry for c. Must be an integer between -100 and +100"
            }

            if (alert_check === true){
                alert(alert_message)
            }else{
                
                if(b*b<4*a*c){
                    
                    x1="Solution: roots are imaginary"
                    document.getElementById("x").innerHTML=x1
                }else if(b*b===4*a*c){
                    x1="Solution: x= "+((-b+Math.sqrt(b*b-4*a*c))/(2*a)).toFixed(3)
                    document.getElementById("x").innerHTML=x1
                }else if(b*b>4*a*c){
                    x1=((-b+Math.sqrt(b*b-4*a*c))/(2*a)).toFixed(3)
                    x2=((-b-Math.sqrt(b*b-4*a*c))/(2*a)).toFixed(3)
                    document.getElementById("x").innerHTML="Solution: x1="+ x1 + "    x2=" +x2
                }
            }

           
            
            
        }