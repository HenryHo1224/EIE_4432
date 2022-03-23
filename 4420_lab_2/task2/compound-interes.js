
function get_result(year,deposit,rate){
    year=year+1
    rate=rate/100
    var Starting_v = (deposit *Math.pow(((1+(rate))),year-1))
    var earn=  (Starting_v*(rate))
    var End_v = (Starting_v+earn)

    Starting_v=Starting_v.toFixed(2)
    earn=earn.toFixed(2)
    End_v=End_v.toFixed(2)

    var result=[year,Starting_v,earn,End_v]

    
    return result

}

$(document).ready(function(){
    $("#button").click(function(){
        $(".result_table_c").remove()
        
        var deposit = parseInt($('#deposit').val())
        var rate = parseInt($('#rate').val())
        var year = parseInt($('#year').val())

        var result=[]

        
        for(i=0;i<year;i++){
            result.push(get_result(i,deposit,rate))
            console.log(result)
            
            $(".result_table_t").append(
                `<tr class="result_table_c">
                    <th class="result_table">${result[i][0]}</th>
                    <th class="result_table">${result[i][1]}</th>
                    <th class="result_table">${result[i][2]}</th>
                    <th class="result_table">${result[i][3]}</th>
                </tr>`)
        }
        


        
       

    });
});

