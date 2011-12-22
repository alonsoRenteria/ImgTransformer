<html>
    <head>
		<title>IMAGE RESIZE TEST</title>
	</head>
	<body>
		<?php
		require_once ("ImgTransformer.php");
		$imgTmr = new ImgTransformer(FALSE);
		$imgTmr -> resizeAll("input/apple.jpg");
		$cropImg = $imgTmr -> cropImage(array("x" => 70, "y"=> 100 ,"width" => 100, "height" => 100),"input/apple.jpg");		
		imagejpeg($cropImg, "output/crop.jpeg", 100);	
		?>
		TEST: set de Imagenes generadas en la carpeta OUTPUT/
		<div>
			<img style="border: 2px solid blue" src="output/regular_result.jpeg" />
			<img style="border: 2px solid blue" src="output/thumbnail_large_result.jpeg" />
			<img style="border: 2px solid blue" src="output/thumbnail_medium_result.jpeg" />
			<img style="border: 2px solid blue" src="output/thumbnail_small_result.jpeg" />
			<div>		
				<big>test: cropImage($cropArea,$path)  pos:70,100   width:100px   height:100px</big>		
				<img style="border: 2px solid red" src="output/crop.jpeg" />
			</div>
		</div>
	</body>
</html>