<?php
class bookingController {
    function booking(){
        if (isset($_POST['submit'])) {
            $costumer = $_SESSION["user-id"];
            $cruise = isset($_POST["cruise"]) ? $_POST["cruise"] : null;
            $price = isset($_POST["price"]) ? $_POST["price"] : null;
            $place = isset($_POST["place"]) ? $_POST["place"] : null;
            if(isset($_POST["room"])){
                $room = $_POST["room"];
                switch($room){
                    case 1 :
                        $price += 0;
                        $capacity = 1;
                        break;
    
                    case 2 :
                        $price += 100;
                        $capacity = 2;
                        break;
                        
                    case 3 :
                        $price += 200;
                        $capacity = 6;
                        break;

                    case 4 :
                        $price += 300;
                        $capacity = 2;
                        break;

                    default :
                        $price +=0;
                        $capacity = 1;
                        break; 
                }
            }else{
                $room = null;
            }
            $dateOfReservation = date("Y-m-d");
            $add = new addNew;
            $result = $add->updateplace($place,$capacity);
            if($result == false){
                return 0;
            }elseif($result == true){
                $add->book($costumer,$cruise,$price,$dateOfReservation,$room);
                $add->room($place,$price,$room,$capacity);
                return 1;
            }
        }
    }
    function ticket($id){
        require('fpdf/fpdf.php');
        $pdf = new FPDF();
        $pdf->AddPage();
        $row=file("../app/View/uploads/ticket".$id.".txt");
        $logoFile = '../app/View/assets/images/shipCruiseTour.png';
        $pdf->Image( $logoFile, 80, 10, '40px' );
        $pdf->SetTextColor(20,50,90);
        $pdf->SetFont('Arial','B',20);	
        $pdf->Write( 70, "                            SHIP CRUISE TOUR\n" );
        $pdf->SetTextColor(0,0,0);
        $pdf->Write( 0, "                                 YOUR TICKET\n" );
        $pdf->Write( 0, "                                 ____________\n" );
        foreach($row as $rowValue) {
            $data=explode(';',$rowValue);
            foreach($data as $columnValue)
                $pdf->Cell(90,12,$columnValue);
                $pdf->SetFont('Arial','',12);		
                $pdf->Ln();
        }
        $pdf->SetFont('Arial','B',15);	
        $pdf->SetTextColor(20,120,90);
        $pdf->Ln(10);
        $pdf->Write( 0, "                                               ENJOY YOUR TRIP\n" );
        $pdf->Write( 0, "                                               ________________\n" );
        $name = "ticket.pdf";
        ob_end_clean();
        $pdf->Output($name, 'I');
    }
    
}