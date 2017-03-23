<?php
	if(isset($_POST['play'])){
		//shell_exec('sudo ./fm_transmitter -f 95.0 -r star_wars.wav');
		$comm='bash script.sh';//test
		//$comm2	= 'sudo bash /home/pi/public_html/run.sh';//plays transmites stawars.wav
		$comm2	= 'sudo bash /home/pi/public_html/convert_and_play.sh';
		
		//echo "output:".$output;
		
		if(isset($_POST['frequency']))
		{
			$frequency=$_POST['frequency'];
			$comm2.=" ".$frequency;//added frequency to bash command
			}
		
		$output = shell_exec($comm2);//
		
		//$output=shell_exec('sudo bash ./FM_Transmitter_RPi3-master/fm_transmitter  -f 95.0 -r ./FM_Transmitter_RPi3-master/star_wars.wav');
		//$output2=shell_exec('./run.sh');
		//$output2=exec('./run.sh');
		//$output2=system('sudo /home/pi/public_html/script.sh');
		//echo "<br>output2:".$output2;
		
		}elseif(isset($_POST['stop'])){
			
			$comm3	= 'sudo bash /home/pi/public_html/stop.sh';
			$output = shell_exec($comm3);
			echo "output:".$output;
			}
?>
