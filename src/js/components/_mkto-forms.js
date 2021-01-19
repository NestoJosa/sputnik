<script> 
  MktoForms2.whenReady(function(form) {    
    //Removes any querystring in the URL before logging Latest Form URL
    form.addHiddenFields({ atbLatestFormURL : document.location.href.split('?')[0] })
  }); 
</script>