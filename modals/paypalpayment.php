<!-- Modal -->
<div class="modal fade" id="paypal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content"  style="background-image: url(images/bg_4.jpg);">
            <div class="modal-header text-center">
                <h4 class="modal-title" id="exampleModalLabel">Paypal Paiement</h4> 
            </div>
            <br>
            <div class="modal-body">
                <form id="paypal_form" onsubmit="return false">
                    <input type="hidden" name="id" id="id" value="<?php echo $_SESSION["id"]; ?>"/>
                    <input type="hidden" name="montant" id="montant" value=""/>
                    <div class="form-group" id="paypal">

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>