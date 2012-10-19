<?php
//Daily Flat theme

$css = "body {
	background: hsl(0, 0%, 20%);
	color: #E0E0E0;
}

a:link		{ color: hsl(0, 0%, 75%); font-weight: bold; }
a:visited	{ color: hsl(0, 0%, 70%); }
a:hover		{ color: hsl(0, 0%, 100%);}
a:active	{ color: hsl(0, 0%, 90%); }

table, tr, td, th, div {
	border-width: 0px;
	border-color: rgba(0, 0, 0, 0);
	border-style: none;
}

table.outline, table.post {
	border: 1px solid hsl(0, 0%, 50%);
}

.header0 th {
	background: hsl(0, 0%, 30%);
}

.header1 th
{
	background: hsl(0, 0%, 35%);
}

.cell2 {
	background: hsl(0, 0%, 18%);
}

.cell1, table.post td.side, table.post td.userlink, table.post td.meta {
	background: hsl(0, 0%, 15%);
}

.cell0, table.post td.post, .faq {
	background: hsl(0, 0%, 12%);
}

table.post td.post {
	border-top: 1px solid hsl(0, 0%, 50%);
	border-left: 1px solid hsl(0, 0%, 50%);
}

.errort {
	background: hsl(0, 0, 25%);
}

.errorc {
	background: hsl(0, 0, 18%);;
	border: 1px solid hsl(0, 0, 50%);
}


button, input[type=\"submit\"], select {
	border: 1px solid hsl(0, 0%, 50%);
	background-color: hsl(0, 0%, 18%);
	color: #E0E0E0;
	-webkit-appearance: push-button;
	-moz-appearance: push-button;
	appearance: push-button;
}


button:hover, input[type=\"submit\"]:hover, select:hover {
	background-color: hsl(0, 0%, 25%);
	border: 1px solid hsl(0, 0%, 57%);
}

select {
	background-image: -webkit-linear-gradient(-45deg, hsla(0, 0%, 0%, 0), hsla(0, 0%, 0%, 0) 50%, hsl(0, 0%, 35%) 50%);
	background-image: -moz-linear-gradient(-45deg, hsla(0, 0%, 0%, 0), hsla(0, 0%, 0%, 0) 50%, hsl(0, 0%, 35%) 50%);
	background-image: linear-gradient(-45deg, hsla(0, 0%, 0%, 0), hsla(0, 0%, 0%, 0) 50%, hsl(0, 0%, 35%) 50%);
	background-size: 16px 16px;
	background-repeat: no-repeat;
	background-position: bottom right;
}

input[type=\"text\"], input[type=\"password\"], input[type=\"file\"], input[type=\"email\"], textarea {
	background: hsl(0, 0%, 18%);
	border: 0px none;
	border-bottom: 1px solid hsl(0, 0%, 25%);
	color: #E0E0E0;
}

input[type=\"radio\"] {
	border-radius: 8px;
}

input[type=\"text\"]:focus, input[type=\"password\"]:focus, input[type=\"file\"]:focus, input[type=\"email\"]:focus, textarea:focus {
	border-bottom-color: hsl(0, 0%, 50%);
	utline: 0px none rgba(0, 0, 0, 0);
}

div#tabs button {
	background: hsl(0, 0%, 18%);
}

div#tabs button.selected {
	border-bottom: 1px solid hsl(0, 0%, 30%);
	background: hsl(0, 0%, 30%);
}

.pollbarContainer {
	background: hsl(0, 0%, 10%);
	border-radius: 0px;
	box-shadow: none;
	border: none;
}

.pollbar {
	border-radius: 0px;
	box-shadow: none;
	border: 0px none;
}";

header("Content-Type: text/css");

$curtime = getdate(time());
$min = $curtime['hours'] * 60 + $curtime['minutes'] + 340;

$hue = ($min / 2) % 360;
$sat = 50;
$hs = $hue.", ".$sat."%";

$css = str_replace("(0, 0%", "(".$hs, $css);
print $css;
