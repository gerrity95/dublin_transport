<html>
<head>

</head>
<body>
<h1>Hello</h1>
<select id="luas-dropdown" name="luas">
</select>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
let dropdown = $('#luas-dropdown');

dropdown.empty();

dropdown.append('<option selected="true" disabled>Choose Stop</option>');
dropdown.prop('selectedIndex', 0);

</script>
</body>
<html>
