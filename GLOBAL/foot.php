        <!--  NAV  -->

        <div id='nav' class='navContainer'>

        	<ul>
                	<?php
				if ($pageName != 'index') {	
                        	
					$path = $id;
                        		$limit = 1;
                        		$selection = $idFull;
                        		$linkPageName = $pageName;
                        		$breadcrumbsMode = FALSE;
                        		$multiColumn = 20;      // used to indent menu?
                        		// $stub = TRUE;
                        		// if (!$breadcrumbsMode) ($id) ? $breadcrumbsMode = TRUE : $breadcrumbsMode = FALSE;
                        		displayNavigation($path, $limit, $selection, $linkPageName, $stub, $breadcrumbsMode, $multiColumn);
				}
                	?>
        	</ul>
		<a href='index.html'><img src='MEDIA/cursor-blink.gif'> Home</a>
	</div>

	<?php 


	// Time

	if ($pageName == 'index') {

		$html  = "<div class='clear'>&nbsp;";
		$html .= "</div>";
		$html  .= "<div class='timeContainer caption'>";
		$html .= date('Y-m-d g:i:s A');
		$html .= "</div>";
		echo $html;			
	}
	?>

	</body>
</html>
