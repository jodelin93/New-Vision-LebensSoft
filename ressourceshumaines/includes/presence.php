<div class="row">
	<div class="col-lg-8">
		<form class="form-element" id="presenceForm">
			<div class="row">
				<div class="col-xs-4">
				<label>L'Employer :</label>
				<select class="form-control select2" multiple="multiple" data-placeholder="L'Employer"
                        style="width: 100%;" name="employerId">
									<?php
									$emp = $core->selectData('employer', NULL, NULL, NULL, NULL);
									foreach ($emp as $value) {
									
									?>
									<option value="<?php echo $value->idEmp; ?>"><?php echo $value->prenom_emp." ".$value->nom_emp;  ?></option>
										<?php
									}
									
									?>
                </select>
				</div>
				<div class="col-xs-4">
				<label>La Date :</label>
				<input type='text' class="form-control" name="dateHeure" id='datetimepicker6'/>
				</div>
				<div class="col-xs-3">
				<label>Entrée et Sortie</label>
				<select class="form-control" name="inout">
					<option selected disabled>Entree/Sortie</option>
					<option>Entrée</option>
					<option>Sortie</option>
				</select>
				</div>
				<div class="col-xs-1">
				<label></label>
					<input type="submit" class="btn btn-success btn-flat" value="OK">
				</div>
			</div>
		</form>
	</div>

	<div class="col-lg-4">
		  <div class="form-group">
              

                <div class="form-group">
                <label>Intervalle de temps :</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation" onchange="nombreHeure(this.value)">
                </div>
                <!-- /.input group -->
              </div>
            </div>
<div id="nbreHeureId"></div>
	</div>
</div>