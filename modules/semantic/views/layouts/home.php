<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="en">
		<?php Yii::app()->clientScript->registerCssFile($this->module->assetsUrl.'/css/home.css'); ?>
		<?php Yii::app()->clientScript->registerScriptFile($this->module->assetsUrl.'/js/home.js'); ?>
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>
	<body id="home" class="index pushable">
		<div id="toc" class="ui vertical inverted sidebar menu left overlay visible" style="">
			<div class="item">
				<a href="/" class="ui logo icon image">
				<img src="<?php echo $this->module->assetsUrl; ?>/images/logo.png">
				</a>
				<a href="/"><b>UI Docs</b></a>
			</div>
			<a href="https://github.com/maslena/YiiSemanticUI.git" class="item">
				<i class="download icon"></i> <b>Download</b>
			</a>
			<a href="/semantic/kitchenSink" class="item">
				<i class="food icon"></i> <b>Kitchen Sink</b>
			</a>
			<div class="item">
				<div class="ui small inverted header">Elements</div>
				<div class="menu">
					<a href="/semantic/elements/button" class="item">
						Button
					</a>
					<a href="/semantic/elements/input" class="item">
						Input
					</a>
				</div>
			</div>
			<div class="item">
				<div class="ui small inverted header">Collections</div>
				<div class="menu">
					<a href="/semantic/collections/breadcrumb" class="item">
						Breadcrumb
					</a>
					<a href="/semantic/collections/form" class="item">
						Form
					</a>
					<a href="/semantic/collections/menu" class="item">
						Menu
					</a>
				</div>
			</div>
			<div class="item">
				<div class="ui small inverted header">Modules</div>
				<div class="menu">
					<a href="/semantic/modules/checkbox" class="item">
						Checkbox
					</a>
				</div>
			</div>
			<div class="item">
				<div class="ui small inverted header">Custom</div>
				<div class="menu">
					<a href="/semantic/custom/navbar" class="item">
						Navigation Bar
					</a>
				</div>
			</div>
		</div>
		<div class="pusher">
			<div class="full height">
				<div class="following bar">
					<div class="ui page grid">
						<div class="column">
							<div class="ui logo shape">
								<div class="sides">
									<div class="active ui side">
										<img src="<?php echo $this->module->assetsUrl; ?>/images/logo.png" class="ui image">
									</div>
									<div class="learn side">
										<img src="/images/learn-logo.png" class="ui image">
									</div>
								</div>
							</div>
							<div class="ui large secondary network menu inverted">
								<a class="view-ui item">
									<i class="sidebar icon"></i> Menu
								</a>
								<a class="additional item transition hidden" data-site="learn" href="http://www.learnsemantic.com" style="">Learn</a>
								<span data-content="Coming Soon" data-site="themes" class="additional item transition hidden" style="">Themes</span>
								<span data-content="Coming Soon" data-site="layout" class="additional item transition hidden" style="">Layouts</span>
							</div>
						</div>
					</div>
				</div>
				<div class="masthead segment">
					<div class="ui page grid">
						<div class="column">
							<div class="introduction">
								<a href="https://github.com/Semantic-Org/Semantic-UI/blob/master/RELEASE-NOTES.md" class="ui black version label transition visible" style="">
									Semantic UI 1.8.1
								</a>
								<h1 class="ui inverted header">
									<span class="library transition visible" style="">
										Yii Semantic UI
									</span>
									<b data-text="User Interface">This Project</b>
									<span class="typed-cursor">|</span>
									<span class="text">is under construction.</span>
								</h1>
								<div class="ui hidden divider"></div>
								<a class="ui huge basic inverted teal download button" href="https://github.com/maslena/YiiSemanticUI.git" target="_blank">
									Download Now
									<i class="right chevron icon"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!--
				<div class="ui stripe vertical segment">
				<div class="ui stackable very relaxed page grid">
				<div class="fourteen wide center aligned centered column">
				<h1 class="ui icon header">
				<img class="ui icon image" src="/images/icons/toolbox.png">
				Unbelievable Breadth
				</h1>
				<p>Definitions aren't limited to just buttons on a page. Semantic's components allow several distinct types of definitions: elements, collections, views, modules and behaviors which cover the gamut of interface design.</p>
				<a href="/kitchen-sink.html" class="ui large primary button">
				View Kitchen Sink
				<i class="right chevron icon"></i>
				</a>
				</div>
				<div class="three column computer one column mobile demo row">
				<div class="column">
				<div class="no example">
				<h4 class="ui header">
				<a href="/collections/menu.html">Menu</a>
				</h4><i class="icon code"></i><a class="anchor" id="menu"></a>
				<div class="ui vertical demo menu">
				<a class="active teal item">
				Inbox
				<div class="ui teal label">1</div>
				</a>
				<a class="item">
				Trash
				<div class="ui label">1</div>
				</a>
				<div class="item">
				<div class="ui transparent icon input">
				<input type="text" placeholder="Search mail...">
				<i class="search icon"></i>
				</div>
				</div>
				</div>
				<div class="ui fluid demo tabular menu">
				<a class="active item">
				Tab
				</a>
				<a class="item">
				Tab
				</a>
				</div>
				<div class="ui secondary vertical demo menu">
				<a class="active item">
				Inbox
				</a>
				<a class="item">
				Starred
				</a>
				<a class="item">
				Trash
				</a>
				</div>
				<div class="ui secondary pointing vertical demo menu">
				<a class="active item">
				Inbox
				</a>
				<a class="item">
				Starred
				</a>
				<a class="item">
				Trash
				</a>
				</div>
				</div>
				<div class="no example">
				<h4 class="ui header">
				<a href="/elements/divider.html">Divider</a>
				</h4><i class="icon code"></i><a class="anchor" id="divider"></a>
				<div class="ui two column stackable center aligned grid segment">
				<div class="column">
				<div class="ui button">A</div>
				</div>
				<div class="ui vertical divider">or</div>
				<div class="column">
				<div class="teal ui button">B</div>
				</div>
				</div>
				</div>
				<div class="no example">
				<h4 class="ui header">
				<a href="/modules/accordion.html">Accordion</a>
				</h4><i class="icon code"></i><a class="anchor" id="accordion"></a>
				<div class="ui vertical fluid accordion menu">
				<div class="item">
				<a class="active title">
				<i class="dropdown icon"></i>
				Size
				</a>
				<div class="active content">
				<div class="ui form">
				<div class="grouped fields">
				<div class="field">
				<div class="ui radio checkbox">
				<input type="radio" value="small" name="size">
				<label>Small</label>
				</div>
				</div>
				<div class="field">
				<div class="ui radio checkbox">
				<input type="radio" value="medium" name="size">
				<label>Medium</label>
				</div>
				</div>
				<div class="field">
				<div class="ui radio checkbox">
				<input type="radio" value="large" name="size">
				<label>Large</label>
				</div>
				</div>
				<div class="field">
				<div class="ui radio checkbox">
				<input type="radio" value="x-large" name="size">
				<label>X-Large</label>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				<div class="item">
				<a class="title">
				<i class="dropdown icon"></i>
				Colors
				</a>
				<div class="content">
				<div class="ui form">
				<div class="grouped fields">
				<div class="field">
				<div class="ui radio checkbox">
				<input type="radio" name="color">
				<label>Red</label>
				</div>
				</div>
				<div class="field">
				<div class="ui radio checkbox">
				<input type="radio" name="color">
				<label>Orange</label>
				</div>
				</div>
				<div class="field">
				<div class="ui radio checkbox">
				<input type="radio" name="color">
				<label>Green</label>
				</div>
				</div>
				<div class="field">
				<div class="ui radio checkbox">
				<input type="radio" name="color">
				<label>Blue</label>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				<div class="no example">
				<h4 class="ui header">
				<a href="/collections/message.html">Message</a>
				</h4><i class="icon code"></i><a class="anchor" id="message"></a>
				<div class="ui message">
				<i class="close icon"></i>
				This site uses cookies
				</div>
				<div class="ui warning icon message">
				<div class="content">
				<div class="header">Looking for help? </div>
				<ul class="list">
				<li>Use our <a href="#">help center</a></li>
				<li>Check our <a href"#"="">FAQ</a></li>
				</ul>
				</div>
				</div>
				<div class="ui info message">
				<div class="header">We're creating your profile page</div>
				<p>It will be ready in just a second.</p>
				</div>
				</div>
				</div>
				<div class="tablet only computer only column">
				<div class="no example">
				<h4 class="ui header">
				<a href="/views/card.html">Card</a>
				</h4><i class="icon code"></i><a class="anchor" id="card"></a>
				<div class="ui card">
				<div class="image dimmable">
				<div class="ui dimmer">
				<div class="content">
				<div class="center">
				<div class="ui inverted button">Add Friend</div>
				</div>
				</div>
				</div>
				<img src="/images/home-avatar.png">
				</div>
				<div class="content">
				<div class="header">Steve Jobes</div>
				<div class="meta">
				<a class="group">Acquaintances</a>
				</div>
				<div class="description">
				Steve Jobes is a fictional character designed to resemble someone familiar to readers.
				</div>
				</div>
				<div class="extra content">
				<a class="right floated created">
				Joined in 1998
				</a>
				<a class="friends">
				<i class="user icon"></i>
				22 Friends
				</a>
				</div>
				</div>
				</div>
				<div class="no example">
				<h4 class="ui header">
				<a href="/views/feed.html">Feed</a>
				</h4><i class="icon code"></i><a class="anchor" id="feed"></a>
				<div class="ui feed">
				<div class="event">
				<div class="label">
				<img src="/images/avatar/small/elliot.jpg">
				</div>
				<div class="content">
				<div class="summary">
				<a class="user">
				Elliot Fu
				</a> added you as a friend
				</div>
				</div>
				</div>
				<div class="event">
				<div class="label">
				<img src="/images/avatar/small/jenny.jpg">
				</div>
				<div class="content">
				You added Jenny Hess to the group <a>Close Friends</a>
				</div>
				</div>
				<div class="event">
				<div class="label">
				<img src="/images/avatar/small/zoe.jpg">
				</div>
				<div class="content">
				Zoe just <a>posted on your page</a>
				</div>
				</div>
				</div>
				</div>
				<div class="no example">
				<h4 class="ui header">
				<a href="/elements/label.html">Label</a>
				</h4><i class="icon code"></i><a class="anchor" id="label"></a>
				<div class="ui image label">
				<img src="/images/avatar/small/justen.jpg">
				jkitsune@newrepublic.com
				<i class="delete icon"></i>
				</div>
				<a class="ui teal label">
				<i class="mail icon"></i> 23 New
				</a>
				<a class="ui tag label">Dresses</a>
				</div>
				<div class="no example">
				<h4 class="ui header">
				<a href="/elements/step.html">Step</a>
				</h4><i class="icon code"></i><a class="anchor" id="step"></a>
				<div class="ui fluid vertical steps">
				<a class="step">
				<i class="truck icon"></i>
				<div class="content">
				<div class="title">Shipping</div>
				<div class="description">Choose your shipping options</div>
				</div>
				</a>
				<a class="active step">
				<i class="payment icon"></i>
				<div class="content">
				<div class="title">Billing</div>
				<div class="description">Enter billing information</div>
				</div>
				</a>
				<a class="disabled step">
				<i class="info icon"></i>
				<div class="content">
				<div class="title">Confirm Order</div>
				<div class="description">Verify order details</div>
				</div>
				</a>
				</div>
				</div>
				</div>
				<div class="tablet only computer only column">
				<div class="no example">
				<h4 class="ui header">
				<a href="/modules/dropdown.html">Dropdown</a>
				</h4><i class="icon code"></i><a class="anchor" id="dropdown"></a>
				<div class="ui fluid search selection dropdown">
				<input type="hidden" name="country">
				<i class="dropdown icon"></i>
				<input tabindex="0" class="search"><div class="default text">Select Country</div>
				<div tabindex="-1" class="menu">
				<div data-value="ad" class="item"><i class="ad flag"></i>Andorra</div>
				<div data-value="ae" class="item"><i class="ae flag"></i>United Arab Emirates</div>
				<div data-value="af" class="item"><i class="af flag"></i>Afghanistan</div>
				<div data-value="ag" class="item"><i class="ag flag"></i>Antigua</div>
				<div data-value="ai" class="item"><i class="ai flag"></i>Anguilla</div>
				<div data-value="al" class="item"><i class="al flag"></i>Albania</div>
				<div data-value="am" class="item"><i class="am flag"></i>Armenia</div>
				<div data-value="an" class="item"><i class="an flag"></i>Netherlands Antilles</div>
				<div data-value="ao" class="item"><i class="ao flag"></i>Angola</div>
				<div data-value="ar" class="item"><i class="ar flag"></i>Argentina</div>
				<div data-value="as" class="item"><i class="as flag"></i>American Samoa</div>
				<div data-value="at" class="item"><i class="at flag"></i>Austria</div>
				<div data-value="au" class="item"><i class="au flag"></i>Australia</div>
				<div data-value="aw" class="item"><i class="aw flag"></i>Aruba</div>
				<div data-value="ax" class="item"><i class="ax flag"></i>Aland Islands</div>
				<div data-value="az" class="item"><i class="az flag"></i>Azerbaijan</div>
				<div data-value="ba" class="item"><i class="ba flag"></i>Bosnia</div>
				<div data-value="bb" class="item"><i class="bb flag"></i>Barbados</div>
				<div data-value="bd" class="item"><i class="bd flag"></i>Bangladesh</div>
				<div data-value="be" class="item"><i class="be flag"></i>Belgium</div>
				<div data-value="bf" class="item"><i class="bf flag"></i>Burkina Faso</div>
				<div data-value="bg" class="item"><i class="bg flag"></i>Bulgaria</div>
				<div data-value="bh" class="item"><i class="bh flag"></i>Bahrain</div>
				<div data-value="bi" class="item"><i class="bi flag"></i>Burundi</div>
				<div data-value="bj" class="item"><i class="bj flag"></i>Benin</div>
				<div data-value="bm" class="item"><i class="bm flag"></i>Bermuda</div>
				<div data-value="bn" class="item"><i class="bn flag"></i>Brunei</div>
				<div data-value="bo" class="item"><i class="bo flag"></i>Bolivia</div>
				<div data-value="br" class="item"><i class="br flag"></i>Brazil</div>
				<div data-value="bs" class="item"><i class="bs flag"></i>Bahamas</div>
				<div data-value="bt" class="item"><i class="bt flag"></i>Bhutan</div>
				<div data-value="bv" class="item"><i class="bv flag"></i>Bouvet Island</div>
				<div data-value="bw" class="item"><i class="bw flag"></i>Botswana</div>
				<div data-value="by" class="item"><i class="by flag"></i>Belarus</div>
				<div data-value="bz" class="item"><i class="bz flag"></i>Belize</div>
				<div data-value="ca" class="item"><i class="ca flag"></i>Canada</div>
				<div data-value="cc" class="item"><i class="cc flag"></i>Cocos Islands</div>
				<div data-value="cd" class="item"><i class="cd flag"></i>Congo</div>
				<div data-value="cf" class="item"><i class="cf flag"></i>Central African Republic</div>
				<div data-value="cg" class="item"><i class="cg flag"></i>Congo Brazzaville</div>
				<div data-value="ch" class="item"><i class="ch flag"></i>Switzerland</div>
				<div data-value="ci" class="item"><i class="ci flag"></i>Cote Divoire</div>
				<div data-value="ck" class="item"><i class="ck flag"></i>Cook Islands</div>
				<div data-value="cl" class="item"><i class="cl flag"></i>Chile</div>
				<div data-value="cm" class="item"><i class="cm flag"></i>Cameroon</div>
				<div data-value="cn" class="item"><i class="cn flag"></i>China</div>
				<div data-value="co" class="item"><i class="co flag"></i>Colombia</div>
				<div data-value="cr" class="item"><i class="cr flag"></i>Costa Rica</div>
				<div data-value="cs" class="item"><i class="cs flag"></i>Serbia</div>
				<div data-value="cu" class="item"><i class="cu flag"></i>Cuba</div>
				<div data-value="cv" class="item"><i class="cv flag"></i>Cape Verde</div>
				<div data-value="cx" class="item"><i class="cx flag"></i>Christmas Island</div>
				<div data-value="cy" class="item"><i class="cy flag"></i>Cyprus</div>
				<div data-value="cz" class="item"><i class="cz flag"></i>Czech Republic</div>
				<div data-value="de" class="item"><i class="de flag"></i>Germany</div>
				<div data-value="dj" class="item"><i class="dj flag"></i>Djibouti</div>
				<div data-value="dk" class="item"><i class="dk flag"></i>Denmark</div>
				<div data-value="dm" class="item"><i class="dm flag"></i>Dominica</div>
				<div data-value="do" class="item"><i class="do flag"></i>Dominican Republic</div>
				<div data-value="dz" class="item"><i class="dz flag"></i>Algeria</div>
				<div data-value="ec" class="item"><i class="ec flag"></i>Ecuador</div>
				<div data-value="ee" class="item"><i class="ee flag"></i>Estonia</div>
				<div data-value="eg" class="item"><i class="eg flag"></i>Egypt</div>
				<div data-value="eh" class="item"><i class="eh flag"></i>Western Sahara</div>
				<div data-value="er" class="item"><i class="er flag"></i>Eritrea</div>
				<div data-value="es" class="item"><i class="es flag"></i>Spain</div>
				<div data-value="et" class="item"><i class="et flag"></i>Ethiopia</div>
				<div data-value="eu" class="item"><i class="eu flag"></i>European Union</div>
				<div data-value="fi" class="item"><i class="fi flag"></i>Finland</div>
				<div data-value="fj" class="item"><i class="fj flag"></i>Fiji</div>
				<div data-value="fk" class="item"><i class="fk flag"></i>Falkland Islands</div>
				<div data-value="fm" class="item"><i class="fm flag"></i>Micronesia</div>
				<div data-value="fo" class="item"><i class="fo flag"></i>Faroe Islands</div>
				<div data-value="fr" class="item"><i class="fr flag"></i>France</div>
				<div data-value="ga" class="item"><i class="ga flag"></i>Gabon</div>
				<div data-value="gb" class="item"><i class="gb flag"></i>England</div>
				<div data-value="gd" class="item"><i class="gd flag"></i>Grenada</div>
				<div data-value="ge" class="item"><i class="ge flag"></i>Georgia</div>
				<div data-value="gf" class="item"><i class="gf flag"></i>French Guiana</div>
				<div data-value="gh" class="item"><i class="gh flag"></i>Ghana</div>
				<div data-value="gi" class="item"><i class="gi flag"></i>Gibraltar</div>
				<div data-value="gl" class="item"><i class="gl flag"></i>Greenland</div>
				<div data-value="gm" class="item"><i class="gm flag"></i>Gambia</div>
				<div data-value="gn" class="item"><i class="gn flag"></i>Guinea</div>
				<div data-value="gp" class="item"><i class="gp flag"></i>Guadeloupe</div>
				<div data-value="gq" class="item"><i class="gq flag"></i>Equatorial Guinea</div>
				<div data-value="gr" class="item"><i class="gr flag"></i>Greece</div>
				<div data-value="gs" class="item"><i class="gs flag"></i>Sandwich Islands</div>
				<div data-value="gt" class="item"><i class="gt flag"></i>Guatemala</div>
				<div data-value="gu" class="item"><i class="gu flag"></i>Guam</div>
				<div data-value="gw" class="item"><i class="gw flag"></i>Guinea-Bissau</div>
				<div data-value="gy" class="item"><i class="gy flag"></i>Guyana</div>
				<div data-value="hk" class="item"><i class="hk flag"></i>Hong Kong</div>
				<div data-value="hm" class="item"><i class="hm flag"></i>Heard Island</div>
				<div data-value="hn" class="item"><i class="hn flag"></i>Honduras</div>
				<div data-value="hr" class="item"><i class="hr flag"></i>Croatia</div>
				<div data-value="ht" class="item"><i class="ht flag"></i>Haiti</div>
				<div data-value="hu" class="item"><i class="hu flag"></i>Hungary</div>
				<div data-value="id" class="item"><i class="id flag"></i>Indonesia</div>
				<div data-value="ie" class="item"><i class="ie flag"></i>Ireland</div>
				<div data-value="il" class="item"><i class="il flag"></i>Israel</div>
				<div data-value="in" class="item"><i class="in flag"></i>India</div>
				<div data-value="io" class="item"><i class="io flag"></i>Indian Ocean Territory</div>
				<div data-value="iq" class="item"><i class="iq flag"></i>Iraq</div>
				<div data-value="ir" class="item"><i class="ir flag"></i>Iran</div>
				<div data-value="is" class="item"><i class="is flag"></i>Iceland</div>
				<div data-value="it" class="item"><i class="it flag"></i>Italy</div>
				<div data-value="jm" class="item"><i class="jm flag"></i>Jamaica</div>
				<div data-value="jo" class="item"><i class="jo flag"></i>Jordan</div>
				<div data-value="jp" class="item"><i class="jp flag"></i>Japan</div>
				<div data-value="ke" class="item"><i class="ke flag"></i>Kenya</div>
				<div data-value="kg" class="item"><i class="kg flag"></i>Kyrgyzstan</div>
				<div data-value="kh" class="item"><i class="kh flag"></i>Cambodia</div>
				<div data-value="ki" class="item"><i class="ki flag"></i>Kiribati</div>
				<div data-value="km" class="item"><i class="km flag"></i>Comoros</div>
				<div data-value="kn" class="item"><i class="kn flag"></i>Saint Kitts and Nevis</div>
				<div data-value="kp" class="item"><i class="kp flag"></i>North Korea</div>
				<div data-value="kr" class="item"><i class="kr flag"></i>South Korea</div>
				<div data-value="kw" class="item"><i class="kw flag"></i>Kuwait</div>
				<div data-value="ky" class="item"><i class="ky flag"></i>Cayman Islands</div>
				<div data-value="kz" class="item"><i class="kz flag"></i>Kazakhstan</div>
				<div data-value="la" class="item"><i class="la flag"></i>Laos</div>
				<div data-value="lb" class="item"><i class="lb flag"></i>Lebanon</div>
				<div data-value="lc" class="item"><i class="lc flag"></i>Saint Lucia</div>
				<div data-value="li" class="item"><i class="li flag"></i>Liechtenstein</div>
				<div data-value="lk" class="item"><i class="lk flag"></i>Sri Lanka</div>
				<div data-value="lr" class="item"><i class="lr flag"></i>Liberia</div>
				<div data-value="ls" class="item"><i class="ls flag"></i>Lesotho</div>
				<div data-value="lt" class="item"><i class="lt flag"></i>Lithuania</div>
				<div data-value="lu" class="item"><i class="lu flag"></i>Luxembourg</div>
				<div data-value="lv" class="item"><i class="lv flag"></i>Latvia</div>
				<div data-value="ly" class="item"><i class="ly flag"></i>Libya</div>
				<div data-value="ma" class="item"><i class="ma flag"></i>Morocco</div>
				<div data-value="mc" class="item"><i class="mc flag"></i>Monaco</div>
				<div data-value="md" class="item"><i class="md flag"></i>Moldova</div>
				<div data-value="me" class="item"><i class="me flag"></i>Montenegro</div>
				<div data-value="mg" class="item"><i class="mg flag"></i>Madagascar</div>
				<div data-value="mh" class="item"><i class="mh flag"></i>Marshall Islands</div>
				<div data-value="mk" class="item"><i class="mk flag"></i>MacEdonia</div>
				<div data-value="ml" class="item"><i class="ml flag"></i>Mali</div>
				<div data-value="ar" class="item"><i class="ar flag"></i>Burma</div>
				<div data-value="mn" class="item"><i class="mn flag"></i>Mongolia</div>
				<div data-value="mo" class="item"><i class="mo flag"></i>MacAu</div>
				<div data-value="mp" class="item"><i class="mp flag"></i>Northern Mariana Islands</div>
				<div data-value="mq" class="item"><i class="mq flag"></i>Martinique</div>
				<div data-value="mr" class="item"><i class="mr flag"></i>Mauritania</div>
				<div data-value="ms" class="item"><i class="ms flag"></i>Montserrat</div>
				<div data-value="mt" class="item"><i class="mt flag"></i>Malta</div>
				<div data-value="mu" class="item"><i class="mu flag"></i>Mauritius</div>
				<div data-value="mv" class="item"><i class="mv flag"></i>Maldives</div>
				<div data-value="mw" class="item"><i class="mw flag"></i>Malawi</div>
				<div data-value="mx" class="item"><i class="mx flag"></i>Mexico</div>
				<div data-value="my" class="item"><i class="my flag"></i>Malaysia</div>
				<div data-value="mz" class="item"><i class="mz flag"></i>Mozambique</div>
				<div data-value="na" class="item"><i class="na flag"></i>Namibia</div>
				<div data-value="nc" class="item"><i class="nc flag"></i>New Caledonia</div>
				<div data-value="ne" class="item"><i class="ne flag"></i>Niger</div>
				<div data-value="nf" class="item"><i class="nf flag"></i>Norfolk Island</div>
				<div data-value="ng" class="item"><i class="ng flag"></i>Nigeria</div>
				<div data-value="ni" class="item"><i class="ni flag"></i>Nicaragua</div>
				<div data-value="nl" class="item"><i class="nl flag"></i>Netherlands</div>
				<div data-value="no" class="item"><i class="no flag"></i>Norway</div>
				<div data-value="np" class="item"><i class="np flag"></i>Nepal</div>
				<div data-value="nr" class="item"><i class="nr flag"></i>Nauru</div>
				<div data-value="nu" class="item"><i class="nu flag"></i>Niue</div>
				<div data-value="nz" class="item"><i class="nz flag"></i>New Zealand</div>
				<div data-value="om" class="item"><i class="om flag"></i>Oman</div>
				<div data-value="pa" class="item"><i class="pa flag"></i>Panama</div>
				<div data-value="pe" class="item"><i class="pe flag"></i>Peru</div>
				<div data-value="pf" class="item"><i class="pf flag"></i>French Polynesia</div>
				<div data-value="pg" class="item"><i class="pg flag"></i>New Guinea</div>
				<div data-value="ph" class="item"><i class="ph flag"></i>Philippines</div>
				<div data-value="pk" class="item"><i class="pk flag"></i>Pakistan</div>
				<div data-value="pl" class="item"><i class="pl flag"></i>Poland</div>
				<div data-value="pm" class="item"><i class="pm flag"></i>Saint Pierre</div>
				<div data-value="pn" class="item"><i class="pn flag"></i>Pitcairn Islands</div>
				<div data-value="pr" class="item"><i class="pr flag"></i>Puerto Rico</div>
				<div data-value="ps" class="item"><i class="ps flag"></i>Palestine</div>
				<div data-value="pt" class="item"><i class="pt flag"></i>Portugal</div>
				<div data-value="pw" class="item"><i class="pw flag"></i>Palau</div>
				<div data-value="py" class="item"><i class="py flag"></i>Paraguay</div>
				<div data-value="qa" class="item"><i class="qa flag"></i>Qatar</div>
				<div data-value="re" class="item"><i class="re flag"></i>Reunion</div>
				<div data-value="ro" class="item"><i class="ro flag"></i>Romania</div>
				<div data-value="rs" class="item"><i class="rs flag"></i>Serbia</div>
				<div data-value="ru" class="item"><i class="ru flag"></i>Russia</div>
				<div data-value="rw" class="item"><i class="rw flag"></i>Rwanda</div>
				<div data-value="sa" class="item"><i class="sa flag"></i>Saudi Arabia</div>
				<div data-value="sb" class="item"><i class="sb flag"></i>Solomon Islands</div>
				<div data-value="sc" class="item"><i class="sc flag"></i>Seychelles</div>
				<div data-value="sd" class="item"><i class="sd flag"></i>Sudan</div>
				<div data-value="se" class="item"><i class="se flag"></i>Sweden</div>
				<div data-value="sg" class="item"><i class="sg flag"></i>Singapore</div>
				<div data-value="sh" class="item"><i class="sh flag"></i>Saint Helena</div>
				<div data-value="si" class="item"><i class="si flag"></i>Slovenia</div>
				<div data-value="sj" class="item"><i class="sj flag"></i>Svalbard, I Flag Jan Mayen</div>
				<div data-value="sk" class="item"><i class="sk flag"></i>Slovakia</div>
				<div data-value="sl" class="item"><i class="sl flag"></i>Sierra Leone</div>
				<div data-value="sm" class="item"><i class="sm flag"></i>San Marino</div>
				<div data-value="sn" class="item"><i class="sn flag"></i>Senegal</div>
				<div data-value="so" class="item"><i class="so flag"></i>Somalia</div>
				<div data-value="sr" class="item"><i class="sr flag"></i>Suriname</div>
				<div data-value="st" class="item"><i class="st flag"></i>Sao Tome</div>
				<div data-value="sv" class="item"><i class="sv flag"></i>El Salvador</div>
				<div data-value="sy" class="item"><i class="sy flag"></i>Syria</div>
				<div data-value="sz" class="item"><i class="sz flag"></i>Swaziland</div>
				<div data-value="tc" class="item"><i class="tc flag"></i>Caicos Islands</div>
				<div data-value="td" class="item"><i class="td flag"></i>Chad</div>
				<div data-value="tf" class="item"><i class="tf flag"></i>French Territories</div>
				<div data-value="tg" class="item"><i class="tg flag"></i>Togo</div>
				<div data-value="th" class="item"><i class="th flag"></i>Thailand</div>
				<div data-value="tj" class="item"><i class="tj flag"></i>Tajikistan</div>
				<div data-value="tk" class="item"><i class="tk flag"></i>Tokelau</div>
				<div data-value="tl" class="item"><i class="tl flag"></i>Timorleste</div>
				<div data-value="tm" class="item"><i class="tm flag"></i>Turkmenistan</div>
				<div data-value="tn" class="item"><i class="tn flag"></i>Tunisia</div>
				<div data-value="to" class="item"><i class="to flag"></i>Tonga</div>
				<div data-value="tr" class="item"><i class="tr flag"></i>Turkey</div>
				<div data-value="tt" class="item"><i class="tt flag"></i>Trinidad</div>
				<div data-value="tv" class="item"><i class="tv flag"></i>Tuvalu</div>
				<div data-value="tw" class="item"><i class="tw flag"></i>Taiwan</div>
				<div data-value="tz" class="item"><i class="tz flag"></i>Tanzania</div>
				<div data-value="ua" class="item"><i class="ua flag"></i>Ukraine</div>
				<div data-value="ug" class="item"><i class="ug flag"></i>Uganda</div>
				<div data-value="um" class="item"><i class="um flag"></i>Us Minor Islands</div>
				<div data-value="us" class="item"><i class="us flag"></i>United States</div>
				<div data-value="uy" class="item"><i class="uy flag"></i>Uruguay</div>
				<div data-value="uz" class="item"><i class="uz flag"></i>Uzbekistan</div>
				<div data-value="va" class="item"><i class="va flag"></i>Vatican City</div>
				<div data-value="vc" class="item"><i class="vc flag"></i>Saint Vincent</div>
				<div data-value="ve" class="item"><i class="ve flag"></i>Venezuela</div>
				<div data-value="vg" class="item"><i class="vg flag"></i>British Virgin Islands</div>
				<div data-value="vi" class="item"><i class="vi flag"></i>Us Virgin Islands</div>
				<div data-value="vn" class="item"><i class="vn flag"></i>Vietnam</div>
				<div data-value="vu" class="item"><i class="vu flag"></i>Vanuatu</div>
				<div data-value="wf" class="item"><i class="wf flag"></i>Wallis and Futuna</div>
				<div data-value="ws" class="item"><i class="ws flag"></i>Samoa</div>
				<div data-value="ye" class="item"><i class="ye flag"></i>Yemen</div>
				<div data-value="yt" class="item"><i class="yt flag"></i>Mayotte</div>
				<div data-value="za" class="item"><i class="za flag"></i>South Africa</div>
				<div data-value="zm" class="item"><i class="zm flag"></i>Zambia</div>
				<div data-value="zw" class="item"><i class="zw flag"></i>Zimbabwe</div>
				</div>
				</div>

				<div class="ui divider"></div>
				<div class="ui searchable floating dropdown labeled icon button" tabindex="0">
				<i class="filter icon"></i>
				<span class="text">Filter Posts</span>
				<div class="menu" tabindex="-1">
				<div class="header">
				Filter by Tag
				</div>
				<div class="item">
				<div class="ui red empty circular label"></div>
				Important
				</div>
				<div class="item">
				<div class="ui blue empty circular label"></div>
				Announcement
				</div>
				<div class="item">
				<div class="ui black empty circular label"></div>
				Cannot Fix
				</div>
				<div class="item">
				<div class="ui green empty circular label"></div>
				Discussion
				</div>
				</div>
				</div>
				</div>
				<div class="no example">
				<h4 class="ui header">
				<a href="/modules/progress.html">Progress</a>
				</h4><i class="icon code"></i><a class="anchor" id="progress"></a>
				<div class="ui teal file demo progress active" data-value="6" data-total="20">
				<div style="width: 25%;" class="bar">
				<div class="progress"></div>
				</div>
				<div class="label">Adding 5 of 20 photos</div>
				</div>
				</div>
				<div class="no segment example">
				<h4 class="ui header">
				<a href="/elements/segment.html">Segment</a>
				</h4><i class="icon code"></i><a class="anchor" id="segment"></a>
				<div class="ui stacked segment"></div>
				<div class="ui raised segment"></div>
				<div class="ui secondary segment"></div>
				<div class="ui tertiary segment"></div>

				<div class="ui top attached segment"></div>
				<div class="ui attached segment"></div>
				<div class="ui bottom attached segment"></div>
				</div>
				<div class="no example">
				<h4 class="ui header">
				<a href="/elements/input.html">Input</a>
				</h4><i class="icon code"></i><a class="anchor" id="input"></a>
				<div class="ui action left icon input">
				<i class="search icon"></i>
				<input type="text" placeholder="Search...">
				<div class="ui teal button">Search</div>
				</div>
				<div class="ui hidden divider"></div>
				<div class="ui labeled right icon input">
				<div class="ui label">
				http://
				</div>
				<input type="text" placeholder="mysite.com">
				<i class="linkify link icon"></i>
				</div>

				<div class="ui hidden divider"></div>
				<div class="ui right labeled input">
				<input type="text" placeholder="Enter categories">
				<a class="ui tag label">
				Add Tags
				</a>
				</div>
				</div>
				<div class="no example">
				<h4 class="ui header">
				<a href="/modules/checkbox.html">Checkbox</a>
				</h4><i class="icon code"></i><a class="anchor" id="checkbox"></a>
				<div class="ui checkbox">
				<input type="checkbox" name="fun">
				<label>I enjoy having fun</label>
				</div>

				<div class="ui hidden divider"></div>
				<div class="ui slider checkbox">
				<input type="checkbox" name="newsletter">
				<label>Receive weekly poodle newsletter</label>
				</div>

				<div class="ui hidden divider"></div>
				<div class="ui toggle checkbox">
				<input type="checkbox" name="public">
				<label>Make my dog's profile public</label>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				-->
			</div>
		</div>
	</body>
</html>