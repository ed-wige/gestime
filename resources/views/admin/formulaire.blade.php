@extends('layouts.dashboard')

@yield('sidebare') 
<! @section('dashboard-content')

            
<h1> <center> Formulaire d'enregistrement </center></h1>
<form action="{{url('ajouter')}}" method="post"   >
        @csrf
  				<div class="row">
    				<div class="col">
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="module" required>
                        <option >module</option>
                        <option value="biologie">biologie</option>
                        <option value="epidemiologie">epidemiologie</option>
                        <option value="gynecolog   ie">gynecologie</option>
						<option value="medecine générale">medecine générale</option>
						<option value="cardiologie">cardiologie</option>


                      </select>
    				</div>
    				<div class="col">
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Horaire" required>
                        <option >Horaire</option>
                        <option value="8h à 12h">8h à 12h</option>
                        <option value="14h à 18h">14h à 18h</option>
                        <option value="18h à 20h">18h à 20h</option>
                      </select>
    				</div>
  				</div>
				  <br>
				  <div class="row">
    				<div class="col">
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Salle" required>
                        <option >Salle</option>
                        <option value="AmphiA">AmphiA</option>
                        <option value="AmphiB">AmphiB</option>
                        <option value="AmphiC">AmphiC</option>
                      </select>
    				</div>
    				<div class="col">
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Niveau" required>
                        <option >niveau</option>
                        <option value="premiere année">premiere année</option>
                        <option value="deuxième année">deuxième année</option>
                        <option value="troisième année">troisième année</option>
						<option value="quatrième année">quatrième année</option>
						<option value="cinquième année">cinquième année</option>
						<option value="sixièmeième année">sixièmeième année</option>
						<option value="septième année">septième année</option>
						
                    </select>
    				</div>
  				</div>
                <br>
				<div class="row">
    				<div class="col">
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="Formateur" required>
                        <option >formateur</option>
                        <option value="Dr Ouedraogo sidiki">Dr Ouedraogo sidiki</option>
                        <option value="Pr Armelle Nanema">Pr Armelle Nanema/option>
                        <option value="Dr Martial Ouedraogo">Dr Martial Ouedraogo</option>
						<option value="Dr Lionel Lankouandé">Dr Lionel Lankouandé</option>
						<option value="Dr Yacouba KANFO">Dr Yacouba KANFO</option>
						
						
                    </select>
    				</div>
    				<div class="col">
					<div class="col">
					<input type="date"name="Date" class="form-control" placeholder="date" required>
    				</div>
    				</div>
  				</div>
				  <br>
				 
  				
				  
				 
  				<br><br>
				 <center>         
				 <button type="submit" class="btn btn-info">Enregistrer</button>
				 <button type="submit" class="btn btn-danger">Retour</button></center>
			</form>
		
			
			@endsection -->



                  