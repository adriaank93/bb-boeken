<h2>Boeken Toevoegen</h2>
<form class="form-horizontal" method="post" action="php/boeken_toevoegen.php">
<!--    <div class="form-group">-->
<!--        <label class="control-label col-sm-2" >Titel:</label>-->
<!--        <div class="col-sm-10">-->
<!--            <input type="text" class="form-control" placeholder="Titel" name="titel">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label class="control-label col-sm-2" for="pwd">Schrijver:</label>-->
<!--        <div class="col-sm-10">-->
<!--            <input type="text" class="form-control" placeholder="Schrijver" name="schrijver">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label class="control-label col-sm-2" >Categorie:</label>-->
<!--        <div class="col-sm-10">-->
<!--            <select class="form-control" name="cat">-->
<!--                --><?php //foreach ($categorie_rows as $row){
//                echo '<option value="'. $row['categorie_id'] .'">'. htmlentities(
//                        $row['categorie_naam'], ENT_QUOTES, 'UTF-8'
//                    ) . '</option>';
//                }
//                ?>
<!--            </select>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label class="control-label col-sm-2" >Pad:</label>-->
<!--        <div class="col-sm-10">-->
<!--            <input type="text" class="form-control" placeholder="pad/naar/boek" name="pad">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <label for="comment">Beschrijving:</label>-->
<!--        <textarea class="form-control" rows="5" cols="2" name="beschrijving" placeholder="Beschrijving"></textarea>-->
<!--    </div>-->
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" class="btn btn-danger">Submit</button>
        </div>
    </div>
</form>