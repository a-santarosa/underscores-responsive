underscores-responsive
======================

WordPress starter template using Automattic's Underscores Starter Theme and Dennis Leblanc's Responsive Grid System.

Credit to:

Automattic: http://underscores.me/

Dennis Leblanc: http://responsive.gs/

Scott Jehl: http://j.mp/respondjs


<!-- How the grid system works -->

<div class="container"></div>
<!-- Add this class to your page wrapper to center it to the browser window and set the width of the page. -->

<div class="row"></div>
<!-- Add this class to any element that spans the entire width of your 'container' to clear any floating child or 'col' elements. Also allows you to define spacing between rows, or add borders, etc. Using this class alone does not add gutters to 'col' elements. -->

<div class="row gutters"></div>
<!-- Using these two classes together works the same as described above and adds gutters to 'col' elements within. If you don't need gutters then just use the 'row' class on its own. -->

<div class="col span_4"></div>
<!-- The 'col' class defines each column within a 'row' and the 'span_' classes define the width of each particular column. These are used together as child elements of a 'row'. On smaller devices these elements will stack vertically unless defined otherwise in media queries. -->

<div class="clr"></div>
<!-- Add this class to any element to clear its floating children. Also, 'container', 'row' and 'col' will clear floats by default. (aka - clearfix method) -->