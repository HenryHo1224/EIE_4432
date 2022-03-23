
<html>
    <head>
        <title>BUSINESS TRAVEL</title>
        <link rel="stylesheet" href="bus-travel.css" />
    </head>
    <bdoy>
        
    <?php
    $datafile = fopen("bus-travel.txt","r");
    while(!feof($datafile)) {
        $rawdata = fgets($datafile);
        
        $data_in_row[]=$rawdata;


        

        
        }
        
        fclose($datafile);

        $array_length = count($data_in_row);
        print("
                <h1>BUSINESS TRAVEL SUMMARY</h1>
                        
                <div>Authors: </div>
                <div>Students ID:</div>
                <p>
                <table>
                    <tr>
                        <th>DATE</th>
                        <th>CAR USE</th>
                        <th>BREAKFAST</th>
                        <th>LUNCH</th>
                        <th>DINEER</th>
                        <th>HOTEL</th>
                        <th>TOTLE</th>
                    </tr>"
            );
            $total_period =0;
        for($i=0;$i<$array_length;$i++){ 
            list($date, $car_use, $breakfast, $lunch, $dinner, $hotel) = explode(":", $data_in_row[$i]);
            

            if($breakfast == "YES"){
                $breakfast=7;
            }else{
                $breakfast=0;
            }

            if($lunch == "YES"){
                $lunch=10.5;
            }else{
                $lunch=0;
            }
            
            if($dinner == "YES"){
                $dinner=16.5;
            }else{
                $dinner=0;
            }
            
            
            
            if(strcmp($hotel, "YES\0") ==1){
                $hotel= 130;
            }else{
                $hotel=0;
            }

            $car_use=number_format($car_use, 2, '.', ',');
            $breakfast=number_format($breakfast, 2, '.', ',');
            $lunch=number_format($lunch, 2, '.', ',');
            $dinner=number_format($dinner, 2, '.', ',');
            $hotel=number_format($hotel, 2, '.', ',');

            $total=$car_use+$breakfast+$lunch+$dinner+$hotel;
            $total_period += $total;
            $total=number_format($total, 2, '.', ',');
            print("         
                <tr>
                    <td>$date</td>
                    <td>$$car_use</td>
                    <td>$$breakfast</td>
                    <td>$$lunch</td>
                    <td>$$dinner</td>
                    <td>$$hotel</td>
                    <td>$$total</t>
                </tr> 
            ");
            
          
        }
        $total_period=number_format($total_period, 2, '.', ',');
       
        print("</table>
        <p>Your total reimbursement for this period is $$total_period.</p>
                </p>"
            );
        
        
    ?>
    
    </bdoy>
</html>
