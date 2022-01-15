@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card" >
        <div class="card-header title display-4 text-center" >
          <img src="{{asset('images/reg.user.png')}}" >Register User 
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('saveregist') }}" id="formulario" onsubmit="return confirm('¿Confirm if you want to save User?');">
             @csrf
             <div class="card">
              <div class="card-body" style="background:   #7accfa">
                <input type="text" placeholder="Name(s)" class="form-control" name="name" value="{{ old('name') }}" autocomplete="name" style="padding: 0.5%; font-size: 1rem;" >
                <input type="text" placeholder="last_name(s)"class="form-control" name="last_name" value="{{ old('last_name') }}" autocomplete="last_name" style="padding: 0.5%; font-size: 1rem;margin-top: 1%;">
                <div>     
                  <input id="email" type="email"  class="form-control"  name="email"  placeholder="email@example.com"  required autocomplete="email" style="padding: 0.5%; font-size: 1.5rem; margin-top: 2%;">
                    @if ($errors->has('email'))
                    <div class="display-7 text-danger">verif email</diV>                 
                     @endif 
                </div>
              <BR>
      


<!-- PRIVILEGES -->
    <div class="card" style="background: #c4e9f7 ">
      <div class="title display-5 text-center" style=" word-spacing: 0.25em;"> Privileges</div>
        <div class="card-body">
          <div  class="flex">
            <div class="img-rol-user">
              <img src="{{asset('images/roles.png')}}"  onmouseover="this.width=200;this.height=100;" onmouseout="this.width=100;this.height=80;" width="50" height="50"> 
            </div>                              
        
            <div style="margin-left: 5%">
              <div align="left">
               <b class="display-6"  >¿How do i define a privilege?</b><br>
               <img src="{{asset('images/icons/priv.png')}}" width="20"> <b>Admin -></b> Tool <br>
               <img src="{{asset('images/icons/priv.png')}}" width="20"> <b>UP -></b> Add, Update, Delete <br>
               <img src="{{asset('images/icons/priv.png')}}" width="20"> <b>UC -></b>  Update y Show<br>
               <img src="{{asset('images/icons/priv.png')}}" width="20"> <b>UR -></b> Show<br>
             </div>                    
            </div>

            <div  style="margin-left: 5%;">
              <select name="role" id="role" class="" value="{{ old('role') }}"  onclick="userRole()" required style="padding: 3%; color: red; font-size: 1.5rem;color:  #060fa1 ">
                <option value="">--Select Role--</option>
                @foreach($roles as $rol)
                  <option value="{{$rol->id}}">{{$rol->name}}</option>
                @endforeach   
              </select> 
              @if ($errors->has('role'))
                <div class="display-8">
                indicate role
               </div>
              @endif
                
              <div style="margin-left: 20%; margin-top: 3%;">               
                <input type="radio" name="nivel" value="1" style="display: none;" id="nivel1">
                <small id="rol1" style="display: none" class="display-7 text-danger">
                  <img src="{{asset('images/icons/delet.png')}}" width="50">
                  <img src="{{asset('images/icons/editar.png')}}" width="40">
                  <img src="{{asset('images/icons/show.png')}}" width="30">
                </small>                        
                <input type="radio" name="nivel" value="2" style="display: none;" id="nivel2">
                <small id="rol2" style="display: none" class="display-7 text-primary">
                  <img src="{{asset('images/icons/editar.png')}}" width="40">
                  <img src="{{asset('images/icons/show.png')}}" width="30">
                </small>                      
                  <input type="radio" name="nivel" value="3" style="display: none;" id="nivel3">
                  <small id="rol3" style="display: none" class="display-7 text-success">
                    <img src="{{asset('images/icons/editar.png')}}" width="40">
                    <img src="{{asset('images/icons/show.png')}}" width="30">&nbsp;&nbsp;<small class="text-danger">¡con restrinciòn!</small>
                  </small>                        
                  <input type="radio" name="nivel" value="4" style="display: none;" id="nivel4">
                  <small id="rol4" class="display-6 text-warning" style="display: none">
                    <img src="{{asset('images/icons/show.png')}}" width="30" >
                  </small>                
                </div>                               
            </div>
          </div>       
        <div class="text-center display-8 font-weight-bold font-italic" style="margin-top: 0; margin-left: 5%; margin-right: 15%; color:  #060fa1 ">
          <b>El  privilerio determiná la funcion y rol dentro de la empresa/organizacion, preservando la integridad de la misma y el adecuado manejo de la aplicacion web</b>
        </div>






      </div>
    </div>



<!-- PREGUNTAS DE SEGURIDAD 3 por usuario registrado-->
          
      <div class="card" style="background:  #c4e9f7">
        <div class="display-6 text-center"> Preguntas de segutidad</div>
          
            <div class="flex">
                <select name="question1">
                  <option value="">Seleccione...</option>
                  @foreach($quests as $q)
                   <option value="{{$q->id}}">{{$q->question}}</option>
                  @endforeach
                </select>
                <input type="text" name="answer1" placeholder="Answer" class="form-control">
            </div>
            <div class="flex">
                <select name="question2" >
                  <option value="">Seleccione...</option>
                  @foreach($quests as $q)
                   <option value="{{$q->id}}">{{$q->question}}</option>
                  @endforeach
                </select>
                <input type="text" name="answer2" class="form-control" placeholder="Answer" >            
            </div>
           
        </div>
         
         </div>


<br>
  <!-- USER -->
  <div  align="center" style="">
        <strong style="color:#7A551E;" class="display-4">Name User</strong>
        <input id="username" type="text"  name="username" value="{{ old('username') }}" class="username form-control-2" required>
        <p class="zoomItext"> It must contain: between 5-10 Alpha-numeric characters, it must be unique!</p>
        @if ($errors->has('username'))
          <br>
          <small class="display-7 text-danger text-center">verify username</small>
        @endif
        </div>
               
  <!-- password - CONFIRME password-->
  <div class="card">
      <div class="card-body">
        <strong class="display-6">Password</strong>
        <input id="password" type="password" class="form-control @error('password') errores @enderror" name="password" placeholder="Password" required>
        <input id="password-confirm" type="password" name="password_confirmation"  placeholder="Confirmatión" class="form-control" required>
      </div>
        <div class="help-block text-danger">
          @if ($errors->first('password') )
            <strong> las contaseña no coinside</strong>
          @endif
        </div>

      </div>
  </div>


                
  <div align="center">      
    <input type="submit" name="btnsave" class="bt-save tex-bt btn btn-primary btn-block" onclick="pregunta()" value="Guardar"/> 
  </div>


  </form>
 

    </div>
  </div>
</div>

    <img src="{{asset('images/icons/clear.png')}}"class="img-clear-2" style="cursor: pointer;"  title="limpiar" onclick="funtClear()" >       

         <div align="left" style=";">
            <a href="{{ route('AdmUser') }}" title="ir atras">
               <img src="{{ asset('images/icons/back.png') }}"  class="irAtras">
            </a> 
          </div>
  </div>
</div>



 

 <script src="{{ asset('js/user_role.js') }}"></script>
 <script src="{{ asset('js/clear.js') }}"></script>
@endsection
