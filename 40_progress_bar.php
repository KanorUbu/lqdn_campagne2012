<?php
    list($obj1count, $nbdons)=@mysql_fetch_array(mysql_query("SELECT SUM(somme), count(somme) FROM pi_mailing.dons WHERE status!=0  AND status!=100 AND datec > '2012-01-01'"));
    if(getenv('SERVER_NAME') == 'soutien.dev.laquadrature.net')
    {
	$nbdons = 600;
        $obj1count = 30000;
    }
        $pct = intval($obj1count/1000);
    if( $pct > 100 ) $pct = 100;
?>
<a name="progressbar"></a>
    <div class="container-wrapper" id="progress"><!-- progress bar -->
        <div class="container" >
            <div class="row">
                <!--<div class="span2">
                    <h3><?php __("Progress Bar"); ?></h3>
                </div>-->
                <div class="span10">
              <p style="float:right;width:14%;text-align:right;font-size:13px"><?php printf(_("%s donations since 01/01/2012"),$nbdons) ?></p>
	      <div id="progress_bar" style="width:85%" title="<?php echo $obj1count." €, ".$pct." %"; ?>"></div>
                    <div class="progress_indices" style="width:85%">
                        <div class="marks">
                            <div class="start">0&euro;</div>
                            <div class="middle">50 000&euro;</div>
                            <div class="end">100 000&euro;</div>
                        </div>
                    </div>
                </div>
                <div class="span2">
           <?php /*  <h3><?php __("We need 100.000€!"); ?></h3> */ ?>
                </div>
<!--
                <div class="span6">
                    <?php
                        // return # days until dayArray
                        $dayArray = Array(0,0,0,10,31,2012);
                        function daysRemaining($dA){
                            $future = mktime( $dA[0],$dA[1],$dA[2],$dA[3],$dA[4],$dA[5]);
                            $today  = time();
                            $diff   = ( $future - $today ) / 60 / 60 / 24 ;
                            return( $diff < 0 ? "0" : floor($diff));
                            
                        }
                       
                    ?>
                    <h3><?= daysRemaining($dayArray) ." ". _("days until the end of this campaign") ?> </h3>
                    <h4><?php __("Generous donators"); ?></h4>
                    <p id="donator-container"></p>
                    <?php
                        // TODO : fetch from api
                        //$donatorsList = '[["jean",100],["ahmed",1000],["simone",15],["ganesh",50]]';
                    ?>
                    <script type="text/javascript">
                        var donator_id = 0;
                        var donatorsList;
                        function switchDonators(  ){
                            var l = donatorsList.length;
                            donator_id = ( donator_id == l - 1)? 0: donator_id + 1;
                            $("#donator-container").html(
                                donatorsList[donator_id][0]
                                + "<?php __(":"); ?>"
                                + donatorsList[donator_id][1]+"&euro;"
                            )
                        }
                        (function(){
                            donatorsList    = <?= $donatorsList ?>;
                            switchDonators()
                            setInterval("switchDonators()",3000)
                        })()
                    </script>
                </div>
-->

            </div>
        </div>
    </div><!-- progress bar -->
<script type="text/javascript" >


$(document).ready(function() {
  // Sets the progress bar
  $( "#progress_bar" ).progressbar({
  value: <?= $pct ?>
  });
});

</script>
