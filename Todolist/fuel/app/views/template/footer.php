</body>
<script>
    $(function(){
      $('.home').on('click', function(){
        var url = '<?php echo Uri::base(); ?>';
        location.href = url;
      });

      $('.signup').on('click', function(){
        var url = '<?php echo Uri::base().'signup'; ?>';
        location.href = url;
      });

      $('.login').on('click', function(){
        var url = '<?php echo Uri::base().'login'; ?>';
        location.href = url;
      })
    })
</script>
</html>