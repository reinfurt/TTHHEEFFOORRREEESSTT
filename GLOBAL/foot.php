        <!--  NAV  -->

        <div id='address' class='navContainer'>

		<?php 


			if ($pageName != "index") {

				$html = $name1; 
				$html .= "<br />";
				$html .= "<a href='index.html'>Go home</a>";
			} else {

				$html = "Home";
			}

			$html .= "<br />";
			echo $html;
		?>

		<br />

                <div id='nav' class='palatino'>
                        <ul>
                                <?php

                                        $path = "0";            // hard-coded hack for "+ Menu" branch
                                        $limit = 1;
                                        $selection = $idFull;
                                        $linkPageName = $pageName;
                                        $breadcrumbsMode = FALSE;
                                        $multiColumn = 20;      // used to indent menu?
                                        // $stub = TRUE;
                                        // if (!$breadcrumbsMode) ($id) ? $breadcrumbsMode = TRUE : $breadcrumbsMode = FALSE;
                                        // displayNavigation($path, $limit, $selection, $linkPageName, $stub, $breadcrumbsMode, $multiColumn);
                                ?>
                        </ul>
                </div>
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
