<!-- Modal -->
<div class="modal fade" id="edit_profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content"  style="background-image: url(images/bg_4.jpg);">
            <div class="modal-header text-center">
                <h4 class="modal-title" id="exampleModalLabel">Edit Profil</h4> 
            </div>
            <br>
            <div class="modal-body">
                <form id="edit_profil_form" onsubmit="return false">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo $_SESSION["id"];?>"/>
                        <label class="h5">Nom d'Utilisateur</label>
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" name="usernamen" class="form-control" id="usernamen" value="<?php echo $_SESSION["user"] ?>" placeholder="Entrer Votre Nom"> 
                            </div>  
                            <div class="col-md-4">
                                <br>
                                <a href="#" class="edit_name">Modifier</a>
                            </div>
                        </div>
                        <small id="pu_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label class="h5" for="passwordf">Ancien Mot de passe</label>
                        <input type="password" name="password" class="form-control"  id="passwordf" placeholder="Mot de Passe Utiliser">
                        <small id="pp1_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label class="h5" for="passwordnew">Le Nouveaux Mot de passe</label>
                        <input type="password" name="passwordnew" class="form-control"  id="passwordnew" placeholder="Mot de Passe Utiliser">
                        <small id="pn_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label class="h5" for="passwords">Rentrer le Mot de Passe</label>
                        <input type="password" name="passwordsec" class="form-control"  id="passwords" placeholder="Rentrer le nouveau Mot de Passe">
                        <small id="pp2_error" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Editer</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>