<!-- #Ano Script -->
<script lang="javascript">

var now = new Date();
var yearNr = now.getYear();
if(yearNr < 2000){
  Year = 1900 + yearNr;
}
else{
  Year = yearNr;
}
var todaysDate = (" "+ Year);

document.write('  '+todaysDate);
</script>
<!-- .Ano Script -->