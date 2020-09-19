<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class DCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filename = str_replace(" ", "", config("data.personal.name"));
        $pdf = new \TCPDF();

        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->SetTitle(config("data.personal.name"));
        $pdf->AddPage();

        $pdf->SetTextColor(100,100,100);
        $pdf->SetFillColor(49,118,140);
        $pdf->SetLineStyle(array('width' => 0.2, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(124, 124, 124)));
        
        $pdf->Ln(30);
        $pdf->SetFont('helvetica', 'B', 24);
        $pdf->Cell(0,0,config("data.title"),0,1,'R');
        $pdf->Ln(10);
        $pdf->SetFont('helvetica', 'B', 20);
        $pdf->Cell(0,0,config("data.personal.name"),0,1,'R');
        $pdf->SetFont('helvetica', 'B', 10);
        $pdf->Cell(0,0,config("data.personal.phone"),0,1,'R');
        $pdf->Cell(0,0,config("data.personal.address"),0,1,'R');
        $pdf->Cell(0,0,config("data.url"),0,1,'R');
        $pdf->Ln(2);
        
        $pdf->SetTextColor(49,118,140);
        $pdf->SetFont('helvetica', 'B', 10);
        foreach(config("data.socials") as $social){
            //Write($h, $txt, $link='', $fill=false, $align='', $ln=false, $stretch=0, $firstline=false, $firstblock=false, $maxh=0, $wadj=0, $margin='')
            $pdf->Write(0, $social["title"], $social["url"], false, 'R', true);            
        }

        $pdf->Ln(30);


        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->Cell(0,8,"ABOUT",0,1,'L',1);
        $pdf->SetTextColor(100,100,100);
        $pdf->Ln(2);

        $pdf->SetFont('helvetica', '', 10);
        $pdf->writeHTML(config("data.abstract"), true, false, true, false, '');

        $pdf->AddPage();
        //Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')
        
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->Cell(0,8,"SKILLS",0,1,'L',1);
        $pdf->SetTextColor(100,100,100);
        $pdf->Ln(2);
        
        
        foreach(config("data.skills") ?? [] as $category => $skills){
            $pdf->SetFont('helvetica', 'B', 14);
            $pdf->SetTextColor(0,0,0);
            $pdf->Cell(0,10,$category,0,1);
            $pdf->SetTextColor(100,100,100);
            $ct = 1;
            foreach($skills ?? [] as $skill){
                $pdf->SetFont('helvetica', $skill['value'] > 6 ? 'B' : '', 10);
                $ln = $ct > 4 ? 1 : 0;
                $ct = $ct > 4 ? 0 : $ct;
                $pdf->Cell(28,10,$skill['name'],'LBT',0,'C');
                $pdf->Cell(10,10,$skill['value'],'RBT',$ln,'L');
                $ct++;
            }
            $pdf->Ln();
        }

        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->Cell(0,8,"PORTFOLIO",0,1,'L',1);
        $pdf->SetTextColor(100,100,100);
        $pdf->Ln(2);

        foreach(config("data.portofolio") ?? [] as $type => $portofolio){
            $pdf->SetFont('helvetica', 'B', 12);
            foreach ($portofolio["projects"] as $project) {
                $pdf->SetTextColor(0,0,0);
                $pdf->SetFont('helvetica', 'B', 10);
                $pdf->Cell(130,0,$project['title'] . " - " . strtoupper($type),0,0,'L');
                $pdf->SetTextColor(80,80,80);
                $pdf->Cell(60,0,$project['start'] . " - " . $project['end'],0,1,'R');
                $pdf->Cell(130,0,"Context",0,1,'L');
                $pdf->SetTextColor(100,100,100);
                $pdf->SetFont('helvetica', '', 10);
                $pdf->MultiCell(0,0,$project['context'],0,'L',false,1);
                $pdf->Ln(2);
                $pdf->SetFont('helvetica', 'B', 10);
                $pdf->SetTextColor(80,80,80);
                if($project["mainactivities"]) $pdf->Cell(95,0,"Main Activities",'R',0,'L');
                if($project["technologies"]) $pdf->Cell(9,0,"Technologies",0,1,'L');
                $pdf->SetTextColor(100,100,100);
                $pdf->SetFont('helvetica', '', 10);
                //MultiCell($w, $h, $txt, $border=0, $align='J', $fill=false, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0, $valign='T', $fitcell=false)
                $h = $pdf->getY();
                if($project["mainactivities"]) $pdf->MultiCell(95,0,$project["mainactivities"],'R','J',false,0);
                if($project["technologies"]) $pdf->MultiCell(95,$pdf->getY()-$h,$project["technologies"],0,'J',false, 1, '', '', false);
                $pdf->Ln();
            }
        }

        // $pdf->SetFillColor(49,118,140);
        // $pdf->SetTextColor(255,255,255);
        // $pdf->SetFont('helvetica', 'B', 14);
        // $pdf->Cell(0,8,"EXPERIENCE",0,1,'L',1);
        // $pdf->SetTextColor(100,100,100);
        // $pdf->Ln(2);

        // $pdf->SetFillColor(220,220,220);
        // foreach(config("data.experience") ?? [] as $experience){
        //     $y = $pdf->getY();
        //     $pdf->SetFont('helvetica', '', 10);
            
        //     $pdf->Cell(50,10,$experience["start"] . (isset($experience["start"]) && $experience["start"] != "" ? " - " : "") . $experience["end"],0,0,'C');
        //     $pdf->SetTextColor(100,100,100);
        //     $pdf->SetFont('helvetica', 'B', 10);
        //     $pdf->Cell(140,0,$experience["position"],0,1);
        //     $pdf->SetTextColor(80,80,80);
        //     $pdf->SetFont('helvetica', '', 10);
        //     $pdf->Cell(140,0,$experience["company"],0,1);
        //     $pdf->SetTextColor(100,100,100);
        //     $pdf->SetFont('helvetica', '', 10);
        //     $pdf->MultiCell(140,0,$experience["description"],0,'L',false,1,60,$pdf->getY());
        //     $pdf->MultiCell(50,$pdf->getY() - $y,"",0,'J',true,1,10,$y,false);
        //     $pdf->Ln(2);
        // }

        $pdf->SetFillColor(49,118,140);
        $pdf->SetTextColor(255,255,255);
        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->Cell(0,8,"EDUCATION",0,1,'L',1);
        $pdf->SetTextColor(100,100,100);
        $pdf->Ln(2);

        $pdf->SetFillColor(220,220,220);
        foreach(config("data.education") ?? [] as $education){
            $y = $pdf->getY();
            $pdf->SetFont('helvetica', '', 10);
            
            $pdf->Cell(50,10,$education["start"] . (isset($education["start"]) && $education["start"] != "" ? " - " : "") . $education["end"],0,0,'C');
            $pdf->SetTextColor(100,100,100);
            $pdf->SetFont('helvetica', 'B', 10);
            $pdf->Cell(140,0,$education["title"],0,1);

            
            $pdf->Cell(50,10,$education["degree"],0,0,'C');
            $pdf->SetTextColor(80,80,80);
            $pdf->SetFont('helvetica', '', 10);
            $pdf->Cell(140,0,$education["institution"],0,1);
            $pdf->SetTextColor(100,100,100);
            $pdf->SetFont('helvetica', '', 10);
            $pdf->MultiCell(140,0,$education["description"],0,'L',false,1,60,$pdf->getY());
            $pdf->MultiCell(50,$pdf->getY() - $y,"",0,'J',true,1,10,$y,false);
            $pdf->Ln(2);
        }




        $pdf->Output($filename . '.pdf');
    }
}
