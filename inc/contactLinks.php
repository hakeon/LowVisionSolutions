<div id="emailPrompt">
	<script type="text/javascript" language="javascript">
	<!--
	// Email obfuscator script 2.1 by Tim Williams, University of Arizona
	// Random encryption key feature by Andrew Moulden, Site Engineering Ltd
	// This code is freeware provided these four comment lines remain intact
	// A wizard to generate this code is at http://www.jottings.com/obfuscator/
		{ coded = "roltvk2tkti6@Epot7.yip"
			key = "R4rYoqbfl52zJMym3AuTs8BZgOiGej7PxX0nIphULFk9aKEQtNvHwVcCd6W1SD"
			shift=coded.length
			link=""
			for (i=0; i<coded.length; i++) {
				if (key.indexOf(coded.charAt(i))==-1) {
					ltr = coded.charAt(i)
					link += (ltr)
    		}
				else {     
					ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
					link += (key.charAt(ltr))
    		}
  		}
			document.write("<a href='mailto:"+link+"'>"+link+"</a>")
		}
	//-->
	</script><noscript>Sorry, you need Javascript on to email me.</noscript>
</div>