	
			<div style="display: flex; margin-top: 3%;">
				<div style="display: block;">
					<div>
						
						<select wire:model="curso_id" class="btn btn-success" wire:change="change_curso" style=" font-size: 1.5rem;">
					 		<option value="">Seleccione el curso</option>
					 		@foreach($cursos as $curso)
					 			@if($curso->statud == 1)
					 				<option value="{{$curso->id}}">{{$curso->title}}</option>
					 			@endif
					 		@endforeach
					 	</select>
						 	<!-- @error('curso_id')
								<label class="alert alert-danger">Seleccione el curso</label>
							@enderror -->
					</div>
					<div>
						<div style=" margin-top: 2%; display: inline-flex; width: 100%;" align="center">
							<div>
								@if($lecN)
									<label class="display-6 text-primary">Leccion
										<input type="text" wire:model="leccion" size="3" placeholder="Nª"  wire:change="verif" class="btn-warning text-center" onkeyUp="return ValNumero(this);" style="padding: 2%; font-size: 2rem; ">
							   		</label><br>
							   		@if($leccion)
										<img src="{{asset('images/icons/icon-ir.png')}}" width="50">
									@endif	

									@error('leccion')
									   	<small class="alert alert-danger">indique leccion</small> 
									@enderror	
								@endif	
								
							</div>
							<div>
							@if($create)
								<img src="{{asset('images/GIF/create.gif')}}">
							@elseif($edit)
								<img src="{{asset('images/GIF/update.gif')}}">
							@else								
								<img src="{{asset('images/GIF/admin-class.gif')}}" class="cursor">		
							@endif
							</div>	&nbsp;&nbsp;&nbsp; 
							<div>
								@if($mensaj)		
									@include('Admin.Class.verif')
								@endif			
							</div>

						</div>	
					</div>
				</div>
		
					&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
				<div class="img-curs-2">
					@if($curso_id)
      				  <?php	$exists = Storage::disk('local')->has($img); ?>
						@if($exists)				
						   	<img src="{{ Storage::url("$img") }}" alt="imagen no disponible">
						@else
							<img src="{{$img}}">	
						@endif
					@endif
				</div>
			</div>

							


		

		
