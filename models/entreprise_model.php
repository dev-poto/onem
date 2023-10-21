<?php
function entreprise($id) {
    return (array) new Entreprises($id);
}
function entreprise_details($id){
    return (array) Offres::entreprise($id);
}