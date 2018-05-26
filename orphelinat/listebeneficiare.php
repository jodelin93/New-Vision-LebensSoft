 <?php 
			 include ("../class/Core.php");
				$pass="";
					$core = new Core();
					
						$table="beneficiaire";
						//$attribut='idBne','nom_bene','prenom_bene','sexe','dat_nais';

					$select= $core->selectData($table, NULL, NULL, NULL, NULL);
				
				foreach ($select as $res_rek) {
       
					$pass = $res_rek->idBene ;
					$nom = $res_rek->nom_ben;
					$prenom = $res_rek->prenom_ben;
					$sexe = $res_rek->sexe;
					$datenais = $res_rek->date_nais;
					?>
				<tr>
				 <td><?php echo $pass;?></td>
                  <td><?php echo $nom;?></td>
                  <td><?php echo $prenom;?>
                  </td>
                  <td><?php echo $sexe;?></td>
                  <td><?php echo $datenais;?> </td>
                  <td><select class="form-control"><option>kskhkddh</option><option>kskhkddh</option><option>kskhkddh</option></select></td>
              <td><a><i class="fa  fa-pencil"></i></a></td>
			  <td><a><i class="fa  fa-eye"></i></a></td>
			  </tr>
			   <?php }
			?>
					              	
