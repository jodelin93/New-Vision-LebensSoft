<form method="post" id="insererParrain" class="form-element"  enctype="multipart/form-data">
	  <!-- left column -->
       <fieldset>
          <div class="col-lg-6">
           
            <!-- /.box-header -->
            <!-- form start -->
        
              <div class="box-body">
                <div class="form-group">
                  <label for="">Prenom</label>
                  <input type="text" class="form-control" id="prenom_par" name="prenom_par" placeholder="Entrer le Prenom" required>
                </div>
                <div class="form-group">
                  <label for="">Telephone</label>
                  <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Entrer le Numero de Telephone" required>
                </div>
                <div class="form-group">
                  <label for="">Sexe</label>
                 <select class="form-control" name="sexe" id="sexe" required="">
                 	<option></option>
                 	<option>Feminin</option>
                 	<option>Masculin</option>
                 </select>
                </div>
                 <div class="form-group">
                  <label for="">Pays</label>
	                 <select class="form-control" name="nationalite" id="nationalite" required>
	                 	<option></option>
                    <?php
                    $pays = $core->selectData("country", NULL, NULL, NULL, NULL);
                    foreach ($pays as $key) {
                  ?>
	                 	<option><?= $key->nicename ?></option>
                    <?php
                  }
                  ?>
	                 </select>
                </div>
                 <div class="form-group">
                  <label for="">Profession</label>
                <input type="text" class="form-control" name="profession" id="profession" placeholder="Entrer la Profession">
                     <input type="checkbox" id="" class="chk-col-blue" checked />
                </div>

              
              </div>
              <!-- /.box-body -->

            
          </div>
           <div class="col-lg-6">
           
            <!-- /.box-header -->
            <!-- form start -->
        
              <div class="box-body">
                <div class="form-group">
                  <label for="">Nom</label>
                  <input type="text" class="form-control" id="nom_par" name="nom_par" placeholder="Entrer le Nom" required>
                </div>
                <div class="form-group">
                  <label for="">E-Mail</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Saisir l'e-mail">
                </div>
                 <div class="form-group">
                  <label for="">Etat Civil</label>
                  <select id="etat_civil" name="etat_civil" class="form-control" >
                    <option>Celibataire</option>
                    <option>Marie(e)</option>
                    <option>Divorce(e)</option>
                    <option>Veuf(ve)</option>
                  </select>
                  
                </div>
                 <div class="form-group">
                  <label for="">Adresse</label>
                  <input type="text" class="form-control" id="adresse_par" name="adresse_par" placeholder="Saisir l'Adresse">
                </div>
                <div class="form-group">
                  
                  <input type="file" class="form-control" id="file" name="file" placeholder="Saisir l'Adresse">
                </div>
              </div>
              <!-- /.box-body -->
             
               <input type="hidden" class="form-control" name="messenrthh" id="messenrthh">
              <div id=""></div>
              <div class="box-footer">
                <input type="submit" id="Enregistrer" name="Enregistrer" class="btn btn-primary pull-right" value="Enregistrer" />
              </div>
            <span id="errorrr"></span>
          </div>
        </fieldset>								

</form>