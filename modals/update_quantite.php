<!-- Modal -->
<div class="modal fade" id="update_panier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content"  style="background-image: url(images/bg_4.jpg);">
            <div class="modal-header text-center">
                <h4 class="modal-title" id="exampleModalLabel">Modifier Quantite</h4> 
            </div>
            <br>
            <div class="modal-body">
                <form id="update_panier_form" onsubmit="return false">

                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value=""/>
                        <label>Quantite : </label>
                        <input type="text" class="form-control" id="quantite" name="quantite" placeholder="Entrer Le Nouveux Quantite" >
                        <small id="q_error" class="form-text text-muted"></small>
                        <input type="hidden" name="prix" id="prix" value=""/>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>