<div class="container-fluid">
	<table class="table table-bordered table-hover table-striped" style="margin-top: 10px;">
		<thead>
			<tr>
				<th>日付</th><th>金額</th><th>適用</th>
			</tr>
		</thead>
		<tbody>
			<?php  foreach($records as $data): ?>
				<tr>
					<td><?= date('Y/m/d', strtotime($data->payment_date)); ?></td>
					<td><?= $data->payment_price; ?></td>
					<td><?= $data->payment_memo; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
