<?php
/* 'rkey' is row key*/
/* 'ckey' is column key*/

/*human supposed to use X*/
/*computer supposed to use O*/

$heading = 'TicTacToe';

$table = [
	['', '', ''],
	['', '', ''],
	['', '', ''],
];

require 'storeinputs.php';
require 'ai.php';
require 'tttwinner.php';

?>

<?php include 'html-components/heading.html'; ?>

<h1 class="text-center my-2"> <?php echo $heading ?> </h1>
<form action="">
	<?php foreach ($table as $rkey => $rvalue): ?>
		<div class="row">
			<?php foreach ($rvalue as $ckey => $cvalue): ?>
				<div class="col mt-2">
					<input type="text" pattern="x|o" placeholder="Enter x" name="inp<?= $rkey.$ckey ?>" value="<?php echo $cvalue ?>" <?= $x_won || $o_won ? "disabled" : '' ?>>
				</div>
			<?php endforeach ?>
		</div>
	<?php endforeach ?>
	<button class="btn btn-primary my-2" type="submit">Make move</button>
</form>

<?php include 'html-components/ending.html'; ?>
