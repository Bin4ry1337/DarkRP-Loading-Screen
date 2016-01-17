<?php

include("header.php");

?>
<div class="row">
	<div class="columns small-12">
		<div class="title">
			<?php echo "<font color='" . $color_name . "'>" . $name . "</font><font color=" . $color_name2 . ">" . $name2 . "</font>"; ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="columns small-12">
		<div class="column small-12 medium-4">
			<div class="box">
				<div class="box-header">
					<div class="box-title">
						<?php echo $title_player ?>
					</div>
				</div>

				<div class="box-content">
					<div class="avatar-frame">
						<img src="<?php GrabSteamAvatar(); ?>" class="avatar">
					</div>

					<div class="box-strip">
						<div class="strip-left">
							<img src="img/icons/player.png" width="22">
						</div>

						<div class="strip-right">
							<?php GrabSteamName(); ?>
						</div>
					</div>

					<div class="box-strip">
						<div class="strip-left">
							<img src="img/icons/steamid.png" width="22">
						</div>

						<div class="strip-right">
							<?php GrabSteamID(); ?>
						</div>
					</div>

					<?php

					if($mysql == 1)
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									<img src="img/icons/money.png" width="22">
								</div>

								<div class="strip-right">
									$<span class="green">' . GrabMoney() . '</span>
								</div>
							</div>';
					}
					else
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									<img src="img/icons/money.png" width="22">
								</div>

								<div class="strip-right">
									<span class="red">Not Found</span>
								</div>
							</div>';
					}

					?>
				</div>
			</div>

			<div class="box">
				<div class="box-header">
					<div class="box-title">
						<?php echo $title_server ?>
					</div>
				</div>

				<div class="box-content">
					<div class="box-strip">
						<div class="strip-left">
							<img src="img/icons/server.png" width="22">
						</div>

						<div class="strip-right">
							BinServers | custom | wire
						</div>
					</div>

					<div class="box-strip">
						<div class="strip-left">
							<img src="img/icons/map.png" width="22">
						</div>

						<div class="strip-right">
							rp_downtown_4c_v2
						</div>
					</div>

					<div class="box-strip">
						<div class="strip-left">
							<img src="img/icons/players.png" width="22">
						</div>

						<div class="strip-right">
							10/24 Players
						</div>
					</div>

					<div class="box-strip">
						<div class="strip-left">
							<img src="img/icons/gamemode.png" width="22">
						</div>

						<div class="strip-right">
							DarkRP
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="column small-12 medium-8">
			<div class="box">
				<div class="box-header">
					<div class="box-title">
						<?php echo $title_rules ?>
					</div>
				</div>

				<div class="box-content">
					<?php

					if($rule1 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									1
								</div>

								<div class="strip-right">
									' . $rule1 . '
								</div>
							</div>';
					}
					
					if($rule2 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									2
								</div>

								<div class="strip-right">
									' . $rule2 . '
								</div>
							</div>';
					}

					if($rule3 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									3
								</div>

								<div class="strip-right">
									' . $rule3 . '
								</div>
							</div>';
					}

					if($rule4 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									4
								</div>

								<div class="strip-right">
									' . $rule4 . '
								</div>
							</div>';
					}

					if($rule5 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									5
								</div>

								<div class="strip-right">
									' . $rule5 . '
								</div>
							</div>';
					}

					if($rule6 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									6
								</div>

								<div class="strip-right">
									' . $rule6 . '
								</div>
							</div>';
					}

					if($rule7 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									7
								</div>

								<div class="strip-right">
									' . $rule7 . '
								</div>
							</div>';
					}

					if($rule8 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									8
								</div>

								<div class="strip-right">
									' . $rule8 . '
								</div>
							</div>';
					}

					if($rule9 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									9
								</div>

								<div class="strip-right">
									' . $rule9 . '
								</div>
							</div>';
					}

					if($rule10 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									10
								</div>

								<div class="strip-right">
									' . $rule10 . '
								</div>
							</div>';
					}

					if($rule11 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									11
								</div>

								<div class="strip-right">
									' . $rule11 . '
								</div>
							</div>';
					}

					if($rule12 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									12
								</div>

								<div class="strip-right">
									' . $rule12 . '
								</div>
							</div>';
					}

					if($rule13 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									13
								</div>

								<div class="strip-right">
									' . $rule13 . '
								</div>
							</div>';
					}

					if($rule14 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									14
								</div>

								<div class="strip-right">
									' . $rule14 . '
								</div>
							</div>';
					}

					if($rule15 !== "")
					{
						echo '<div class="box-strip">
								<div class="strip-left">
									15
								</div>

								<div class="strip-right">
									' . $rule15 . '
								</div>
							</div>';
					}

					?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

include("footer.php");

?>