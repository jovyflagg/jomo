<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 0 10px;
}


/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.column-card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: darkorange;
  color: white;
}
</style>
</head>
<body>
<br/>
<br/>
<p>Resize the browser window to see the effect.</p>
<div class="row">
  <div class="column">
    <div class="column-card">
        <img src="images/bluehome.png" alt="game" width="80px" height="80px">
      <h3>Stuck at Home?</h3>
      <p>Beat the boredom by generating random fun activities everyone would surely love!</p>
    </div>
  </div>

  <div class="column">
    <div class="column-card">
    <img src="images/puzzle.png" alt="game" width="80px" height="80px">
      <h3>More Categories</h3>
      <p>With lots of categories to choose from, you will never be bored again. Easy as 1,2,3.</p>
    </div>
  </div>
</div>

</body>
</html>
