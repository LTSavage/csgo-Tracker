<html>

<head>
    <?php include('imports/other/config.php');?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CSGO Tracker &mdash; Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="An application to track personal CSGO Competitive Match scores and performance based on certain criteria " />
    <meta name="keywords" content="Kieran, Molloy, Kieran Molloy, CSGO, Tracker, CSGO Tracker, Performance" />
    <meta name="author" content="Kieran Molloy" />

    <!-- 
	//////////////////////////////////////////////////////

    Title : Personal Website for Kieran Molloy
    Author : Kieran Molloy
    Date : 29/05/2018
    Page: CSGO Tracker Home

	//////////////////////////////////////////////////////
	 -->
    <?php include('imports/styleScript/root.php');?>


</head>

<body>

	<div id="csTr-wrap">
		<header id="csTr-header">
			<div class="container">

                
				<?php include('imports/other/navbar.php'); ?>
                
			</div>
		</header>

		<div class="csTr-hero" style="background-image: url(imports/images/splashBackground.png);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center csTr-table">
						<div class="csTr-intro csTr-table-cell">
							<h1 class="text-center">Data Entry</h1>
							<p>Input matches here :D</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="csTr-section">
			<div class="container">

                <div class="container jf-form">
                    <form data-licenseKey="" name="jqueryform-af5169" id="jqueryform-af5169" action='submitEntry.php' method='post' enctype='multipart/form-data' novalidate autocomplete="on">
                        <input type="hidden" name="method" value="validateForm">
                        <input type="hidden" id="serverValidationFields" name="serverValidationFields" value="">
                        <div class="form-group f25 required" data-fid="f25">
                            <label class="control-label" for="f25">Player</label>
                            <select class="form-control" id="f25" name="f25" data-rule-required="true">
                            <option value="">- Select -</option>
                            <option value="Kieran">Kieran</option>
                            <option value="Joe">Joe</option>
                        </select>
                        </div>
                        <div class="form-group f7 required" data-fid="f7">
                            <label class="control-label" for="f7">Select</label>
                            <select class="form-control" id="f7" name="f7" data-rule-required="true">
                            <option value="">- Select Map -</option>
                            <option value="Inferno">Inferno</option>
                            <option value="Mirage">Mirage</option>
                            <option value="Nuke">Nuke</option>
                            <option value="Cobblestone">Cobblestone</option>
                            <option value="Cache">Cache</option>
                            <option value="Overpass">Overpass</option>
                            <option value="Dust 2">Dust 2</option>
                            <option value="Office">Office</option>
                        </select>
                        </div>
                        <div class="form-group f2 required" data-fid="f2">
                            <label class="control-label" for="f16">Score</label>
                            <input type="text" class="form-control " id="f2" name="f2" value="" data-rule-required="true" /> </div>
                        <div class="form-group f11 required inline" data-fid="f11">
                            <label class="control-label" for="f11">Win/Loss/Draw</label>
                            <div class="radio">
                                <input id="f11_1" name="f11" type="radio" value="Win" data-rule-required="true">
                                <label for="f11_1"> Win </label>
                            </div>
                            <div class="radio">
                                <input id="f11_2" name="f11" type="radio" value="Loss">
                                <label for="f11_2"> Loss </label>
                            </div>
                            <div class="radio">
                                <input id="f11_3" name="f11" type="radio" value="Draw">
                                <label for="f11_3"> Draw </label>
                            </div>
                        </div>
                        <div class="form-group f16 required" data-fid="f16">
                            <label class="control-label" for="f16">Kills</label>
                            <input type="text" class="form-control " id="f16" name="f16" value="" data-rule-number="true" data-rule-required="true" /> </div>
                        <div class="form-group f17 required" data-fid="f17">
                            <label class="control-label" for="f17">Assists</label>
                            <input type="text" class="form-control " id="f17" name="f17" value="" data-rule-number="true" data-rule-required="true" /> </div>
                        <div class="form-group f18 required" data-fid="f18">
                            <label class="control-label" for="f18">Deaths</label>
                            <input type="text" class="form-control " id="f18" name="f18" value="" data-rule-number="true" data-rule-required="true" /> </div>
                        <div class="form-group f19 " data-fid="f19">
                            <label class="control-label" for="f19">MVP's</label>
                            <input type="text" class="form-control " id="f19" name="f19" value="" data-rule-number="true" /> </div>
                        <div class="form-group f20 " data-fid="f20">
                            <label class="control-label" for="f20">HS%</label>
                            <input type="text" class="form-control " id="f20" name="f20" value="" data-rule-number="true" /> </div>
                        <div class="form-group f21 " data-fid="f21">
                            <label class="control-label" for="f21">ADR</label>
                            <input type="text" class="form-control " id="f21" name="f21" value="" data-rule-number="true" /> </div>
                        <div class="form-group f24 inline" data-fid="f24">
                            <label class="control-label" for="f24">Other Info</label>
                            <div class="checkbox">
                                <input id="f24_1" name="f24[]" type="checkbox" value="Top Fragger">
                                <label for="f24_1"> Top Fragger </label>
                            </div>
                            <div class="checkbox">
                                <input id="f24_3" name="f24[]" type="checkbox" value="Enemy Leaver">
                                <label for="f24_3"> Enemy Leaver </label>
                            </div>
                            <div class="checkbox">
                                <input id="f24_4" name="f24[]" type="checkbox" value="Team Leaver">
                                <label for="f24_4"> Team Leaver/Throw/Useless </label>
                            </div>
                            <div class="checkbox">
                                <input id="f24_5" name="f24[]" type="checkbox" value="Enemy Cheater">
                                <label for="f24_5"> Enemy Cheater </label>
                            </div>
                            <div class="checkbox">
                                <input id="f24_6" name="f24[]" type="checkbox" value="Team Cheater">
                                <label for="f24_6"> Team Cheater </label>
                            </div>
                            <div class="checkbox">
                                <input id="f24_7" name="f24[]" type="checkbox" value="Average Game">
                                <label for="f24_7"> Average Game </label>
                            </div>
                        </div>
                        <div class="form-group submit f0 " data-fid="f0" style="position: relative;">
                            <label class="control-label sr-only" for="f0" style="display: block;">Submit Button</label>
                            <div class="progress" style="display: none; z-index: -1; position: absolute;">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:100%"> </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg" style="z-index: 1;"> Submit </button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="submit">
                            <p class="error bg-warning" style="display:none;"> Please check the required fields. </p>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <div class="container jf-thankyou" style="display:none;" data-redirect="" data-seconds="10">
                    <h3>Your form has been submitted. Thank You!</h3>
                </div>
                <!-- ----------------------------------------------- -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
                <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
                <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
                <script src="vendor.js"></script>
                <script src="jqueryform.com.min.js?ver=v2.1.3&id=jqueryform-af5169"></script>
                <!-- [ Start: iCheck support ] ---------------------------------- -->
                <link href="https://cdn.jsdelivr.net/icheck/1.0.2/skins/flat/_all.min.css" rel="stylesheet">
                <style type="text/css">
                    /* overwrite bootstrap styles */

                    .checkbox input[type=checkbox],
                    .checkbox-inline input[type=checkbox],
                    .radio input[type=radio],
                    .radio-inline input[type=radio] {
                        position: relative;
                        margin-top: 0px;
                        margin-left: 2px;
                    }

                    .checkbox label,
                    .radio label {
                        padding-left: 4px;
                    }

                </style>
                <script src="https://cdn.jsdelivr.net/icheck/1.0.2/icheck.min.js"></script>
                <script type="text/javascript">
                    ;
                    (function($, undefined) {
                        var checkers = '.icheckbox_flat, .iradio_flat';

                        function initICheck($input) {
                            $input.iCheck({
                                checkboxClass: 'icheckbox_flat',
                                radioClass: 'iradio_flat'
                            }).on('ifClicked', function(e) {
                                setTimeout(function() {
                                    $(e.target).valid();
                                    $(e.target).trigger('change').trigger('handleOptionBox');
                                }, 250);
                            });
                        }; // func
                        //$('.jf-form .checkbox, .jf-form .radio')
                        $('.jf-form input[type="checkbox"], .jf-form input[type="radio"]').each(function(i, e) {
                            var $input = $(e),
                                $div = $input.closest('.checkbox,.radio'),
                                hasImg = $div.find('label > img').length;
                            if (hasImg) {
                                $input.css({
                                    'opacity': '0',
                                    'position': 'absolute',
                                    'left': '-1000px',
                                    'right': '-1000px'
                                });
                            } else {
                                initICheck($input);
                                // IE11 and under, the table-cell makes the checkboxes/radio buttons not clickable
                                var isWin = navigator.platform.indexOf('Win') > -1,
                                    isEdge = navigator.userAgent.indexOf('Edge/') > -1,
                                    noTableCell = isWin && !isEdge;
                                if (!noTableCell) {
                                    $div.find('label').css({
                                        display: 'table-cell'
                                    });
                                    $(checkers).css({
                                        display: 'table-cell'
                                    });
                                };
                            };
                        });
                    })(jQuery);

                </script>
                <!-- [ End: iCheck support ] ---------------------------------- -->
                <!-- [ Start: Select2 support ] ---------------------------------- -->
                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>
                <style type="text/css">
                    .select2-hidden-accessible {
                        opacity: 0;
                        width: 1% !important;
                    }

                    .select2-container .select2-selection--single {
                        height: 34px;
                        padding-top: 2px;
                        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                        border: 1px solid #ccc;
                    }

                    .select2-container--default .select2-selection--single .select2-selection__arrow {
                        top: 4px;
                    }

                </style>
                <script type="text/javascript">
                    ;
                    (function() {
                        function templateResult(obj) {
                            if (!obj.id) {
                                return obj.text;
                            }
                            var img = $(obj.element).data('imgSrc');
                            if (img) {
                                return $('<span><img src="' + img + '" class="img-flag" /> ' + obj.text + '</span>');
                            };
                            return obj.text;
                        };
                        $(".jf-form select").css('width', '100%'); // make it responsive
                        $(".jf-form select").select2({
                            templateResult: templateResult
                        }).change(function(e) {
                            $(e.target).valid();
                        });
                    })();

                </script>
                <!-- [ End: Select2 support ] ---------------------------------- -->
                <script type="text/javascript">
                    // start jqueryform initialization
                    // --------------------------------
                    JF.init('#jqueryform-af5169');

                </script>

            </div>

</body>

</html>
