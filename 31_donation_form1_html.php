            <div class="row donations">
                <div class="span6">

                    <div class="row">
                        <div class="span6">
                            <h2>
                            <?= $t->t('support_us') ?>
                            </h2>
                        </div>
                    </div>
                    <form method="post" action="/#progressbar" name="f1" id="f1">
                    <div class="row">
                        <div class="span6">
                    

                            <div class="span1 amounts_holder">
	       <input type="radio" name="sum" value="10" id="sum10"<?php ifcheck($_REQUEST["sum"]=="10"); ?> class="predef"  />
                                    <label for="sum10">10&nbsp;&euro;</label>

                                    <div class="alert" id="piplome_pdf" style="display:none">
                                        <p class="cadeaux"><img src="images/upiplomepdf.png"></p>
                                        <p>En remerciement de votre don, vous recevrez 1 000 décimales de π 
                                            dans un certificat personnalisé, envoyé <strong>par mail au format PDF</strong>.</p>
                                    </div>
                            </div>
                            <div class="span1 amounts_holder">
                                    <input type="radio" name="sum" value="25" id="sum25"<?php ifcheck($_REQUEST["sum"]=="25"); ?> class="predef" />
                                    <label for="sum25">25&nbsp;&euro;</label>
                                    <div class="alert" id="piplome_pdf2" style="display:none">
                                        <p class="cadeaux"><img src="images/upiplomepdf.png"></p>
                                        <p>En remerciement de votre don, vous recevrez 1 000 décimales de π 
                                            dans un certificat personnalisé, envoyé <strong>par mail au format PDF</strong>.</p>
                                    </div>
                            </div>
                            <div class="span1 amounts_holder">
                                    <input type="radio" name="sum" value="50" id="sum50"<?php ifcheck($_REQUEST["sum"]=="50"); ?> class="predef" />
                                    <label for="sum50">50&nbsp;&euro;</label>
                                    <div class="alert " id="piplome" style="display:none">
                                        <p class="cadeaux"><img src="images/upiplome.png"></p>
                                        <p>En remerciement de votre don, vous recevrez 1 000 décimales de π 
                                            dans un certificat personnalisé, envoyé <strong>par courriel au format PDF 
                                                + un  tirage original de qualité supérieure</strong>.
                                        </p>
                                    </div>    
                            </div>

                            <div class="span1 amounts_holder">
                                    <input type="radio" name="sum" value="100" id="sum100"<?php ifcheck($_REQUEST["sum"]=="100"); ?> class="predef" />
                                    <label for="sum100">100&nbsp;&euro;</label>
                                    <div class="alert " id="piplome_ts"  style="display:none">
                                        <p class="cadeaux"><img src="images/upiplome.png">
                                            <span class="plus">+</span><img src="images/upishirt.png"></p>
                                        <p>En remerciement de votre don, vous recevrez 1 000 
                                            décimales de π dans un certificat personnalisé, 
                                            envoyé par courriel au format PDF + un  
                                            tirage original de qualité supérieure + un 
                                            'pi-shirt' portant le logo de La Quadrature 
                                            du Net !</p></div>    
                            </div>
                            <div class="span1 amounts_holder">
                                    <input type="radio" name="sum" value="250" id="sum250"<?php ifcheck($_REQUEST["sum"]=="25"); ?> class="predef" />
                                    <label for="sum250">250&nbsp;&euro;</label>
                                    <div class="alert " id="piplome_ts2"  style="display:none">
                                        <p class="cadeaux"><img src="images/upiplome.png">
                                            <span class="plus">+</span><img src="images/upishirt.png"></p>
                                        <p>En remerciement de votre don, vous recevrez 1 000 
                                            décimales de π dans un certificat personnalisé, 
                                            envoyé par courriel au format PDF + un  
                                            tirage original de qualité supérieure + un 
                                            'pi-shirt' portant le logo de La Quadrature 
                                            du Net !</p></div>    
                            </div>
                            <div class="span1 amounts_holder othersum">
				    <input type="radio" name="sum" value="-1" id="sum1"<?php ifcheck(!in_array($_REQUEST["sum"],$asums)); ?> />
                                    <input type="text" name="othersum" value="<?php if (in_array($_REQUEST["sum"],$asums)) echo $t->t('other_placeholder'); else echo intval($_REQUEST["sum"]); ?>" />
                                    <label for="sum1">&euro;</label>
                                    <div class="alert " id="nocado5" style="display:none">
				      Entrez le montant de votre don au choix. Notez que 
                                        nous ne pouvons pas accepter les soutiens 
                                        inf&eacute;rieurs &agrave; 5&nbsp;&euro; 
                                        (frais bancaires trop importants). 
                                        Vous pouvez toujours nous aider par 
                                        <a href="/fr/participer">votre action</a>&nbsp;!
                                    </div>
                            </div>
                        </div>                            
                    </div>                            
                    <div class="row">
                        <div class="span6">
                                <div class="giftContainer ui-widget-content" style="display:none;"></div>
                        </div>                            
                    </div>                            
                    <div class="row">
                        <div class="span6 checkbox_holder">
                                    <input type="checkbox" id="monthly" name="monthly"<?php ifcheck($_REQUEST["monthly"]); ?>/> <label for="monthly"><?= $t->t('recurent_donation') ?></label>
                        </div>
                    </div>                            
                    <div class="row">
                        <div class="span6">
                            </p>
                                <input type="submit" class="btn btn-large btn-inverse" value="Je soutiens La Quadrature du Net &gt;&gt;"/>
                        </div>
                    </div>
                    </form><!-- donation form -->
                </div>