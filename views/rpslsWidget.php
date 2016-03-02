<?php
/*
 * @author Maurizio Cingolani <mauriziocingolani74@gmail.com>
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @version 1.0
 */
?>

<div class="rpsls">
    <a data-type="rock" href="" onclick="return false"><i class="fa fa-hand-rock-o" title="<?= Yii::t('rpsls', 'Rock'); ?>"></i></a>
    <a data-type="paper" href="" onclick="return false"><i class="fa fa-hand-paper-o" title="<?= Yii::t('rpsls', 'Paper'); ?>"></i></a>
    <a data-type="scissors" href="" onclick="return false"><i class="fa fa-hand-scissors-o" title="<?= Yii::t('rpsls', 'Scissors'); ?>"></i></a>
    <a data-type="lizard" href="" onclick="return false"><i class="fa fa-hand-lizard-o" title="<?= Yii::t('rpsls', 'Lizard'); ?>"></i></a>
    <a data-type="spock" href="" onclick="return false"><i class="fa fa-hand-spock-o" title="<?= Yii::t('rpsls', 'Spock'); ?>"></i></a>
    <div class="rpsls-result alert-dismissable" style="display: none;">
        <i class="my fa"></i>
        <span class="result" style="font-weight: bold;"></span>
        <i class="opponent fa"></i>
    </div>
</div>
<div class="modal fade" id="rpsls-modal" tabindex="-1" role="dialog" aria-labelledby="rpsls-modal-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="rpsls-modal-label">Rock-Paper-Scissors-Lizard-Spock</h4>
            </div>
            <div class="modal-body">
                <p>Rock-Paper-Scissors-Lizard-Spock was created by internet pioneer 
                    <a href="http://www.samkass.com/theories/RPSSL.html" target="blank">Sam Kass</a>
                    as an improvement on the classic game Rock-Paper-Scissors.
                    How does it work? Oh, it's very simple:</p>
                <table style="text-align: center">
                    <tr><!-- Scissors vs Paper -->
                        <td><a href="" onclick="return false" title="Scissors"><i class="fa fa-hand-scissors-o win"></i></a></td>
                        <td>cuts</td>
                        <td><a href="" onclick="return false" title="Paper"><i class="fa fa-hand-paper-o lose"></i></a></td>
                        <td />
                    </tr>
                    <tr><!-- Paper vs Rock -->
                        <td><a href="" onclick="return false" title="Paper"><i class="fa fa-hand-paper-o win"></i></a></td>
                        <td>covers</td>
                        <td><a href="" onclick="return false" title="Rock"><i class="fa fa-hand-rock-o lose"></i></a></td>
                        <td />
                    </tr>
                    <tr><!-- Rock vs Lizard -->
                        <td><a href="" onclick="return false" title="Rock"><i class="fa fa-hand-rock-o win"></i></a></td>
                        <td>crushes</td>
                        <td><a href="" onclick="return false" title="Lizard"><i class="fa fa-hand-lizard-o lose"></i></a></td>
                        <td />
                    </tr>
                    <tr><!-- Lizard vs Spock -->
                        <td><a href="" onclick="return false" title="Lizard"><i class="fa fa-hand-lizard-o win"></i></a></td>
                        <td>poisons</td>
                        <td><a href="" onclick="return false" title="Spock"><i class="fa fa-hand-spock-o lose"></i></a></td>
                        <td />
                    </tr>
                    <tr><!-- Spock vs Scissors -->
                        <td><a href="" onclick="return false" title="Spock"><i class="fa fa-hand-spock-o win"></i></a></td>
                        <td>smashes</td>
                        <td><a href="" onclick="return false" title="Scissors"><i class="fa fa-hand-scissors-o lose"></i></a></td>
                        <td />
                    </tr>
                    <tr><!-- Scissors vs Lizard -->
                        <td><a href="" onclick="return false" title="Scissors"><i class="fa fa-hand-scissors-o win"></i></a></td>
                        <td>decapitates</td>
                        <td><a href="" onclick="return false" title="Lizard"><i class="fa fa-hand-lizard-o lose"></i></a></td>
                        <td />
                    </tr>
                    <tr><!-- Lizard vs Paper -->
                        <td><a href="" onclick="return false" title="Lizard"><i class="fa fa-hand-lizard-o win"></i></a></td>
                        <td>eats</td>
                        <td><a href="" onclick="return false" title="Paper"><i class="fa fa-hand-paper-o lose"></i></a></td>
                        <td />
                    </tr>
                    <tr><!-- Paper vs Spock -->
                        <td><a href="" onclick="return false" title="Paper"><i class="fa fa-hand-paper-o win"></i></a></td>
                        <td>disproves</td>
                        <td><a href="" onclick="return false" title="Spock"><i class="fa fa-hand-spock-o lose"></i></a></td>
                        <td />
                    </tr>
                    <tr><!-- Spock vs Rock -->
                        <td><a href="" onclick="return false" title="Spock"><i class="fa fa-hand-spock-o win"></i></a></td>
                        <td>vaporizes</td>
                        <td><a href="" onclick="return false" title="Rock"><i class="fa fa-hand-rock-o lose"></i></a></td>
                        <td>and as it always has:</td>
                    </tr>
                    <tr><!-- Rock vs Scissors -->
                        <td><a href="" onclick="return false" title="Rock"><i class="fa fa-hand-rock-o win"></i></a></td>
                        <td>crashes</td>
                        <td><a href="" onclick="return false" title="Scissors"><i class="fa fa-hand-scissors-o lose"></i></a></td>
                        <td />
                    </tr>
                </table>
                <p style="margin-top: 15px;">
                    You didn't get it, did you? Then <a href="https://www.youtube.com/watch?v=x5Q6-wMx-K8" target="blank">listen to it</a> over and over again.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
