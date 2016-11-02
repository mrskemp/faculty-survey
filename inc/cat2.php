<?php

   // the questions for ategory 2 (3) start with step-11
   $offset = 10;

   $maxq = $ia['catq'][3];
   $q = 1;
   for ( $i = 1; $i <= $maxq; $i ++ ) {
      $stepnum = $i + $offset;
      $mystr="\$curt = \$ia[3]['q$i'];";
      eval($mystr);
      $mystr="\$curd = \$ia[3]['t$i'];";
      eval($mystr);
      $a = "answer" . $stepnum;
?>
<div class="row setup-content" id="step-<?php echo $stepnum; ?>">
   <div class="col-xs-2"> </div>
   <div class="col-xs-8">
         <?php include('warning.php'); ?>
      <div role="tabpanel" class="tab-pane active"
           id="category2q<?php echo $i; ?>">
         <div class="panel panel-default">
            <div class="panel-body">
               <p class="h4"> Category 2: 
                              <?php echo $ia['categories']['3']; ?>
                              (<?php echo $maxq; ?> questions)</p>
            </div>
         </div>
         <div class="panel panel-default">
            <div class="panel-body">
               <p class="h4">(Question <?php echo $i; ?> out
                             of <?php echo $maxq; ?>):
<?php echo $curt; ?>
</p>
               <span class="lead">
                  <span> <?php echo $i; ?>. &nbsp; 
<?php echo $curd; ?>
                  <br>
                  <div class=form-group>
                     <div class="radio">
                        <label for="<?php echo $a; ?>_0">
                           <input type="radio" name="<?php echo $a; ?>"
                                  id="<?php echo $a; ?>_0"
                                  value="radio1" required autofocus tabindex=1>
                           <?php echo $ia['radio']['0']; ?>
                        </label>
                        <br>
                        <label for="<?php echo $a; ?>_1">
                           <input type="radio" name="<?php echo $a; ?>"
                                  id="<?php echo $a; ?>_1"
                                  value="radio2" required>
                           <?php echo $ia['radio']['1']; ?>
                        </label>
                           <br>
                        <label for="<?php echo $a; ?>_2">
                           <input type="radio" name="<?php echo $a; ?>"
                                  id="<?php echo $a; ?>_2"
                                  value="radio3" required>
                           <?php echo $ia['radio']['2']; ?>
                        </label>
                           <br>
                        <label for="<?php echo $a; ?>_3">
                           <input type="radio" name="<?php echo $a; ?>"
                                  id="<?php echo $a; ?>_3"
                                  value="radio4" required
                                  data-error="Please select an option.">
                           <?php echo $ia['radio']['3']; ?>
                        </label>
                     </div> <!-- closing radio -->
                  </div> <!-- closing form-group -->
               </span>
               <div class="help-block with-errors"> </div>
               <br>

               <button class="btn btn-primary prevBtn btn-md pull-left"
                       type="button">Previous</button>
&nbsp; &nbsp;
               <button class="btn btn-primary nextBtn btn-md"
                       type="button">Next</button>
            </div>
         </div>
      </div>
   </div>
</div>

<?php
}
?>
