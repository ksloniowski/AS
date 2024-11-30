{extends file="main.tpl"}

{block name=footer}treść stopki{/block}

{block name=content}

<div class="pure-g"></div>
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<!-- <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a> -->
		<form class="pure-form pure-form-stacked" action="{$config->action_root}calcCredit" method="post">
			<legend><h2 class="content-head is-center">Kalkulator kredytowy</h2></legend>
			<fieldset>
				<label for="id_kwota">Kwota: </label>
				<input id ="id_kwota" placeholder="kwota" type="text" name="kwota" value="{$form->kwota}"/><br />
				<label for="id_odsetki">Oprocentowanie: </label>
				<input id="id_odsetki" placeholder="odsetki" type="text" name="odsetki" value="{$form->odsetki}"/><br />
				<label for="id_okres">Okres (miesiące): </label>
				<input id="id_okres" placeholder="okres" type="text" name="okres" value="{$form->okres}"/><br />
			</fieldset>
			<button type="submit" class="pure-button">Oblicz</button>
		</form>

		<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

			{if $msgs->isError()}
				<h4>Wystąpiły błędy: </h4>
				<ol class="err">
				{foreach  $msgs->getErrors() as $err}
				{strip}
					<li>{$err}</li>
				{/strip}
				{/foreach}
				</ol>
			{/if}
			
			{if $msgs->isInfo()} 
				<h4>Informacje: </h4>
				<ol class="inf">
				{foreach  $msgs->getInfos() as $inf}
				{strip}
					<li>{$inf}</li>
				{/strip}
				{/foreach}
				</ol>
			{/if}
			
			{if isset($res->result)}
				<h4>Wynik</h4>
				<p class="res">
				{$res->result} zł
				</p>
			{/if}
		</div>
	</div>	
{/block}