<body>
	<div class="container-fluid">
		<!-- <h3>出納記入画面</h3> -->
		<form action="" method="post">
			<table class="table table-bordered" style="font-size: 20px;">
				<tbody>
					<tr>
						<td class="col-sm-2" style="text-align:left; vertical-align: middle;"><b>日付</b></td>
						<td><input type="date" name="payment_date" value="" class="form-control"></td>
					</tr>
					<tr>
						<td class="col-sm-2" style="text-align:left; vertical-align: middle;"><b>金額</b></td>
						<td><input type="text" name="payment_price" value="" class="form-control"></td>
					</tr>
					<tr>
						<td class="col-sm-2" style="text-align:left; vertical-align: middle;"><b>収入？</b></td>
						<td><label class="checkbox"><input type="checkbox" name="income_flg" data-toggle="checkbox">Yes</label></td>
					</tr>
					<tr>
						<td class="col-sm-2" style="text-align:left; vertical-align: middle;"><b>適用</b></td>
						<td><input type="text" name="payment_memo" class="form-control"></td>
					</tr>
				</tbody>
			</table>
			<div class="center">
				<button class="btn btn-hg btn-success" type="submit">登録</button>
				<button class="btn btn-hg btn-warning" onClick="window.close(); return false;">閉じる</button>
			</div>
		</form>
	</div>
	<?= $close; ?>
</body>
