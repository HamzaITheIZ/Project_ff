<!-- Modal -->
<div class="modal fade" id="remplir_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content"  style="background-image: url(images/bg_4.jpg);">
            <div class="modal-header text-center">
                <h4 class="modal-title" id="exampleModalLabel">Remplir Les Information Personnel</h4> 
            </div>
            <br>
            <div class="modal-body">
                <form id="remplir_info_form" onsubmit="return false">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo $_SESSION["id"];?>"/>
                        <label class="h5">Nom Complet</label>
                        <input type="text" name="nomcomplet" class="form-control" id="nomcomplet" placeholder="Entrer Votre Nom et Prenom">
                        <small id="nc_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label class="h5" for="passwordf">Adresse</label>
                        <input type="password" name="adresse" class="form-control"  id="adresse" placeholder="Votre Adresse actuel">
                        <small id="a_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label class="h5" for="passwordnew">Telephone</label>
                        <input type="password" name="telephone" class="form-control"  id="telephone" placeholder="Votre Numero de Telephone">
                        <small id="t_error" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Mis a Jour</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>