<?php
	error_reporting(0);
	function createFile($dbUser,$dbPass,$db,$dbHost){
		$myfile = fopen("config.php", "w") or die("Unable to write config file. Make sure you have write permssions.!");
		$encoded = '<?php $username ="'.$dbUser.'"; $password ="'.$dbPass.'"; $database ="'.$db.'"; $host ="'.$dbHost.'";?>';
		$txt = $encoded;
		if(fwrite($myfile, $txt)){
			return TRUE;
		}else{
			return False;
		}
		fclose($myfile);
	}

	if(isset($_POST['installDB'])){
		
		$dbUser = $_POST['dbUser'];
		$dbPass = $_POST['dbPass'];
		$db 	= "lizcoder";
		$dbHost = $_POST['dbHost'];
		createFile($dbUser,$dbPass,$db,$dbHost);
		

		$error = 0;

		$file = 'sqllab.sql';
		$db = new mysqli($dbHost,$dbUser,$dbPass);

		if (mysqli_connect_errno()) {
    		printf("Connect failed: %s\n", mysqli_connect_error());
    		die();
			}
		$tmp = '';
		$lines = file($file);
		foreach ($lines as $line){
			if (substr($line, 0, 2) == '--' || $line == '')
		    continue;
		$tmp .= $line;

		if (substr(trim($line), -1, 1) == ';'){
			$db->query($tmp) or $error = $error+1;
			
		   	 $tmp = '';
			}
		}
		 if($error>0){
		 	echo "Database has some conflicts. Or you may be using same database for multiple times.";
		 }
		 else{
		 	
		 		echo "Success";
		 	}
		 }

	else{
		die("Cannot load this file directly.");
	}
