<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>child demo</title>
  <style>
  body {
    font-size: 14px;
  }
      </style>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<ul class="topnav">
  <li>Item 1</li>
  <li>Item 2
    <ul>
    <li>Nested item 1</li>
    <li>Nested item 2</li>
    <li>Nested item 3</li>
    </ul>
  </li>
  <li>Item 3</li>
</ul>
 
<script>
$( "ul.topnav > li" ).css( "border", "3px double red" );
</script>
 
</body>
</html>