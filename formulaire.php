<link rel="stylesheet" type="text/css" href="style.css">
<div id="registration-form">
  <div class='fieldset'>
    <legend>FORMULAIRE DE DEMANDE DE BOURSE</legend>
    <form action="traitement.php" method="post" data-validate="parsley" enctype="multipart/form-data">
      <div class='row'>
        <input type="text" placeholder="SAISIR LE NOM" name='nom' id='firstname' data-required="true" data-error-message="Your First Name is required">
      </div>
<div class='row'>
        <input type="text" placeholder="SAISIR LE PRENOM" name='prenom' id='firstname' data-required="true" data-error-message="Your First Name is required">
      </div>
      <div class='row'>
        <input type="text" placeholder="E-mail"  name='email' data-required="true" data-type="email" data-error-message="Your E-mail is required">
      </div>
   <div class='row'>
        <input type="date" placeholder="SAISIR LE NOM" name='date' id='firstname' data-required="true" data-error-message="Your First Name is required">
      </div>

      <div class='row'>
        <input type="radio" checked value="masculin" name='sexe'> MASCULIN
       <input type="radio" name='sexe' value="feminin"> FEMININ
      </div>

<br><br>

<label>DIPLOME</label>
       <div class='row'>
        <input type="checkbox" value="bac" name='bac'> BAC
       <input type="checkbox" name='dts' value="dts"> DTS
      <input type="checkbox" name='licence' value="licence"> LICENCE
      </div>

<br>
        <div class='row'>
        <input type="file" name='photo'> 

      </div>



      <br>
        <div class='row'>
        <input type="file" name='attestation'> 

      </div>
      <input type="submit" value="Register" name="enregistrer">
    </form>
  </div>
</div>

<script type="text/javascript">
  
function placeholderIsSupported() {
    test = document.createElement('input');
    return ('placeholder' in test);
  }

$(document).ready(function(){
  placeholderSupport = placeholderIsSupported() ? 'placeholder' : 'no-placeholder';
  $('html').addClass(placeholderSupport);  
});
</script>