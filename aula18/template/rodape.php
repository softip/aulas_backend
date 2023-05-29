<hr>

<footer class="bg-dark text-white text-center p-4">
      Meu Catálogo de Produtos
</footer>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> 
<script>
  //let table = new DataTable('#myTable');
  $(document).ready(function() {
    $('#myTable').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json"
        }
    } );
} );
</script>

</body>
</html>