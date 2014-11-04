<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>attributeEquals demo</title>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div>
  <label>
    <input type="radio" name="newsletter" value="Hot Fuzz">
    <span>name?</span>
  </label>
</div>
<div>
  <label>
    <input type="radio" name="newsletter" value="Cold Fusion">
    <span>value?</span>
  </label>
</div>
<div>
  <label>
    <input type="radio" name="newsletter" value="Evil Plans">
    <span>value?</span>
  </label>
</div>
 
<script>
$( "input[value='Hot Fuzz']" ).next().text( "Hot Fuzz" );
</script>
 
</body>
</html>