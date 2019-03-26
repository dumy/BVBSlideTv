<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V04</title>
	<meta charset="UTF-8"><meta http-equiv="refresh" content="30"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.devrama.slider.js"></script>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <?php
 $header = new SoapHeader('www.bvb.ro', 'Header', array("User" => "******", "Password" => "*******" ) );

//creaza obiectul de tip SoapClient
$soapClient = new SoapClient("http://www.rasd.ro/BVBDelayedws/intraday.asmx?wsdl");

$soapClient->__setSoapHeaders(array($header));
		?>

		

<div class="slide" data-timing=4 data-fadein=0.5 data-fadeout=0.5>
    <img class="img1" src="https://www.magazinulprogresiv.ro/sites/default/files/premii_purcari.png"/>
</div>
<div class="slide" data-timing=10 data-fadein=0.5 data-fadeout=1 data-videopause=false>
    <video>
        <source src="ok2.mp4" type="video/mp4">
    </video>
</div>
<div class="slide" data-timing=4 data-fadein=0.5 data-fadeout=1>
    <img class="img1" src="https://visitmoldova.travel/wp-content/uploads/2018/02/Purcari-1.jpg" />
</div>
<div class="slide" data-timing=4 data-fadein=0.5 data-fadeout=1>
        <div class="card card-5">
                
                <div class="title">
                        <h1>PURCARI WINERIES PUBLIC COMPANY LIMITED</h1>
                    </div>
                    <div class="title2">
                            <h1>BUCHAREST STOCK EXCHANGE</h1>
                        </div>
                <div class = "detail">	
                                <h3>			
                                        <p>Symbol:	<b>WINE</b>
                                        <p>ISIN:	<b>CY0107600716</b>
                                        <p>Type:	<b>Shares</b>
                                        <p>Segment:	<b>Main</b>
                                        <p>Category:	<b>Int'l</b>
                                </h3>
                                
                </div>
                <div class="v1"></div>
                <div class="price">
                        <h1>18,9500 </h1>
                </div>
                <div class = "cube">
                        <h1>-0.26%</h1>
                </div>
                <div class="dif"><h3>
                    <p>High:	18,9500 
                    <p>Low:	18,9500 
                        </h3>
                </div>
                <div class="data">
                    <h2><?php echo "Data de: " . date("d-m-Y h:i:m");?></h2>
                </div>
                <div class= "img-right">
                        <img src="https://purcari.wine/static/projects/purcari.wine/dist/images/home/logo.png" width="400" height="200" >
                </div>
                
        </div>
    </div>
</div>

<div class="slide" data-timing=4 data-fadein=0.5 data-fadeout=1>
    <img class="img1" src="images/bvb.png" />
</div>


<div class="slide" data-timing=4 data-fadein=0.5 data-fadeout=1>
	<div class="limiter">
		<div class="container-table100">
	<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Symbol</th>
									<th class="cell100 column2">Market</th>
                                    <th class="cell100 column3">Price</th>
                                    <th class="cell100 column4">Avg. Price</th>
                                    <th class="cell100 column5">Traduri</th>
									<th class="cell100 column6">Value</th>
                                    <th class="cell100 column7">Volum</th>
                                    <th class="cell100 column8">Timpul</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
                            <tbody>
                          <?php 
$in=array("noIssues"=>11 , "criteria"=>"4","market"=>"REGS", "order"=>"XORDR");
$tdArray=$soapClient->TopIssues($in);
$tdResult= $tdArray->TopIssuesResult;



foreach ($tdResult->TypeTopIssues as $el){
    if($el->Symbolcode == "BRD"){
        echo '<class = "ok">';
    }
echo '<tr  class="row100 body"> ',
                     "<td  >", $el->Symbolcode,"</td>",
                     "<td>",$el->Marketcode,"</td>",
                     "<td>",$el->Closeprice,"</td>",
                     "<td>",$el->Avgprice ,"</td>",
                     "<td>",$el->Trades ,"</td>",
                     "<td>",$el->Value  ,"</td>",
                     "<td>",$el->Volume ,"</td>",
                     "<td>",$el->LastTradeTime,"</td>",
            "</tr>";
}
 ?>
								
							</tbody>
						</table>
					</div>
					
				</div>
	</div>
  


	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script  src="js/index.js"></script>


</body>
</html>