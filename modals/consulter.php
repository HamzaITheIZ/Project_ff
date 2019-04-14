<!-- Modal -->
<div class="modal fade" id="consulter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content"  style="background-image: url(images/bg_4.jpg);">
            <div class="modal-header text-center">
                <h4 class="modal-title" id="exampleModalLabel">Votre Information Personnel</h4> 
            </div>
            <br>
            <div class="modal-body">
                <form id="consulter_form" onsubmit="return false">
                    <div class="form-group">
                        <label class="h5">Votre Nom Complet :</label>
                        <h4 type="text" name="nomcompletc" class="h4 text-center" style="color: #fac564;" id="nomcompletc"></h4>
                    </div>
                    <div class="form-group">
                        <label class="h5" for="passwordf">Votre Adresse :</label>
                        <h4 type="text" name="adressec" class="h4 text-center" style="color: #fac564;" id="adressec" placeholder="Votre Adresse actuel"></h4>
                    </div>
                    <div class="form-group">
                        <label class="h5" for="passwordnew">Votre Telephone :</label>
                        <h4 type="text" name="telephonec" class="h4 text-center" style="color: #fac564;" id="telephonec" placeholder="Votre Numero de Telephone"></h4>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>