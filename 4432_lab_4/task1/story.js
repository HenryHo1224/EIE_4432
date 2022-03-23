function restart() {
    //function to show "[missing text]" again
    var missingtext = "<b class='MissingText'>[missing text]</b>";
    
    for (var i = 1; i <= 5; i++) {
    document.getElementById("input" + i).value= "";
      document.getElementById(i).innerHTML = missingtext;
    }
  }
  
  function done() {
  
    var text = document.getElementById("content").textContent;

    var patten = /[missing text]/g;
    var result;
    var i = 1;

    while ((result = patten.exec(text)) !== null) {
      var input = document.getElementById("input" + i).value;
      if (input != "") {
        var repl = document.getElementById(i).innerText;
        var ans = repl.replace("[missing text]", input);
        document.getElementById(i).style.color = "blue";
        document.getElementById(i).innerText = ans;
     } else {
        document.getElementById(i).style.color = "red";
        document.getElementById(i).innerText = "[missing text]";

      }
      i++;
    }

  }
  