<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sdhf</title>
	<style type="text/css">
	.greenText{ color:green; }
	</style>
</head>
<body>
	<select class="form-control input-md" name="typeRemitt" onchange='SelectChanged(this);'>
        <option value=''>Select One</option>
        <option value='1'>One</option>
        <option value='2'>Two</option>
        <option value='3'>Three</option>
        <option value='4'>Four</option>
        <option value='5'>Five</option>
    </select>

    <div id='section1' style='display:none;'>
		<h2>This is section one</h2>
		<p style="color: green;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, animi sit iusto odio aperiam nam. Repellat, consequatur, soluta tempore eligendi earum odio explicabo reiciendis ratione ea fugiat mollitia unde perspiciatis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse molestias fugit, corrupti possimus aliquid? Obcaecati facere, possimus eaque nemo. Reiciendis libero dignissimos est repellendus neque cumque, eligendi, delectus et natus!</p>
    </div>
    <div id='section2' style='display:none;'>
    	<h2>This is section two</h2>
    	<p style="color: yellow;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, animi sit iusto odio aperiam nam. Repellat, consequatur, soluta tempore eligendi earum odio explicabo reiciendis ratione ea fugiat mollitia unde perspiciatis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse molestias fugit, corrupti possimus aliquid? Obcaecati facere, possimus eaque nemo. Reiciendis libero dignissimos est repellendus neque cumque, eligendi, delectus et natus!</p>
    </div>
    <div id='section3' style='display:none;'>
    	<h2>This is section three</h2>
    	<p style="color: red;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, animi sit iusto odio aperiam nam. Repellat, consequatur, soluta tempore eligendi earum odio explicabo reiciendis ratione ea fugiat mollitia unde perspiciatis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse molestias fugit, corrupti possimus aliquid? Obcaecati facere, possimus eaque nemo. Reiciendis libero dignissimos est repellendus neque cumque, eligendi, delectus et natus!</p>
    </div>
    <div id='section4' style='display:none;'>
    	<h2>This is section four</h2>
    	<p style="color: purple;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, animi sit iusto odio aperiam nam. Repellat, consequatur, soluta tempore eligendi earum odio explicabo reiciendis ratione ea fugiat mollitia unde perspiciatis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse molestias fugit, corrupti possimus aliquid? Obcaecati facere, possimus eaque nemo. Reiciendis libero dignissimos est repellendus neque cumque, eligendi, delectus et natus!</p>
    </div>
    <div id='section5' style='display:none;'>
    	<h2>This is section five</h2>
    	<p style="color: blue;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, animi sit iusto odio aperiam nam. Repellat, consequatur, soluta tempore eligendi earum odio explicabo reiciendis ratione ea fugiat mollitia unde perspiciatis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse molestias fugit, corrupti possimus aliquid? Obcaecati facere, possimus eaque nemo. Reiciendis libero dignissimos est repellendus neque cumque, eligendi, delectus et natus!</p>
    </div>



    <select id="dynamic_select">
	  <option value="" selected>Pick a Website</option>
	  <option value="http://www.google.com">Google</option>
	  <option value="http://www.youtube.com">YouTube</option>
	  <option value="https://www.gurustop.net">GuruStop.NET</option>
	</select>
           
    <select style="width:130px;" onchange="change_url(this.value);">
            <option value="http://www.url1.com">Option 1</option>
            <option value="http://www.url2.com">Option 2</option>
            <option value="http://www.facebook.com">Option 3</option>
     </select>

	<script type="text/javascript">
		var divSH = null;
	    function SelectChanged(obj) {
	        if (divSH) {
	            divSH.style.display = 'none';
	        }
	        divSH = document.getElementById('section' + obj.value)
	        if (divSH) {
	            divSH.style.display = 'block';
	        }
	    }
	</script>


	<script type="text/javascript">
		$(function() {
		  // bind change event to select
		  $('#dynamic_select').on('change', function() {
		    var url = $(this).val(); // get selected value
		    if (url) { // require a URL
		      window.location = url; // redirect
		    }
		    return false;
		  });
		});
	</script>

	<script type="text/javascript">
        function change_url(val) {
            window.location=val;
        }
    </script> 
</body>
</html>