 </body>
</html>

<?php foreach($js as $jsFile){ ?>
   <script type="text/javascript" src="<?php echo $jsFile?>"></script>
<?php }?>

<style>
.zoom {
  
  transition: transform .2s; /* Animation */

  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5);   
  width:  400px;
  height: 250px;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>