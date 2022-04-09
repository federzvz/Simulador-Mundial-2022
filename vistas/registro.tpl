<div class="container">
    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <legend>Ingresa</legend>

            <!-- Nombre input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Nombre</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="email" placeholder="Nombre" class="form-control"  type="text">
                        </div>
                </div>
            </div>

            <!-- Apellido input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Apellido</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="email" placeholder="Apellido" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Emial input-->
            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="E-Mail Address" class="form-control"  type="email">
                    </div>
                </div>
            </div>
            
            <!-- Contraseña input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Contraseña</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input name="password" placeholder="Contraseña" class="form-control"  type="password">
                    </div>
                </div>
            </div>
            


            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-warning" >Registrarme <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>

        </fieldset>
    </form>
</div>