{extends file="layout.tpl"}
{block name="content"}
	<h3>Register an Account</h3>

	<div>
		<form method="post" action="">
			<table>
				<tr>
					<th><label for="username">Username: </label></th>
					{nocache}
						<td><input id="username" name="username" type="text" maxlength="50" value="{$enteredUsername|default:""}" /></td>
					{/nocache}
				</tr>
				<tr>
					<th><label for="password">Password: </label></th>
					<td><input id="password" name="password" type="password" maxlength="50" /></td>
				</tr>
				<tr>
					<th><label for="password2">Re-enter password: </label></th>
					<td><input id="password2" name="password2" type="password" maxlength="50" /></td>
				</tr>
				<tr>
					<th></th>
					<td><button name="action" type="submit">Click to Register</button></td>
				</tr>
				<tr>
					<th></th>
					{nocache}
						<td>{$registerError|default:""}</td>
					{/nocache}
				</tr>
			</table>
		</form>
	</div>
{/block}
